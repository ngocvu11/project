<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Chitetdonhang;
use DB,File,Mail;

class BillController extends Controller
{
    public function getGiaodich(){
 
    	$data = Transaction::select('id','namekh','payment','ghichu','emailkh','phonekh','city','district','address','total','payment','status','created_at')->where('security',0)->orderBy('created_at','DESC')->get();
  		$chitiet =Chitetdonhang::select('transaction_id','product_name','product_image','soluong','total','created_at','status')->get();
  		$count = DB::table('transactions')->where('security',0)->count();

    	return view('admin.bill.giaodich',compact('data','chitiet','count'));
    }
    public function getRestore($id){
        $capnhat = Transaction::findOrfail($id);
        $capnhat->security = 0;
        $capnhat->status = 0;
        $capnhat->save();
        return redirect()->route('admin.bill.getDonhanghuy')->with('flash_message','Đã chuyển giao dịch sang trạng thái chờ !!!');
    }
    
    public function getDonhangcho(){
    	$datacho = Transaction::select('id','namekh','payment','ghichu','emailkh','phonekh','city','district','address','total','payment','status','created_at')->where('security',1)->orderBy('created_at','DESC')->get();
    	$chitiet =Chitetdonhang::select('transaction_id','product_name','product_image','soluong','total','created_at','status')->get();
    	$count = DB::table('transactions')->where('security',1)->count();
    	return view('admin.bill.giaodichcho',compact('datacho','chitiet','count'));
    }
    public function getDonhanght(){
    	$dataht = Transaction::select('id','namekh','payment','ghichu','emailkh','phonekh','city','district','address','total','payment','status','created_at')->where('security',2)->orderBy('created_at','DESC')->get();
    	$chitiet =Chitetdonhang::select('transaction_id','product_name','product_image','soluong','total','created_at','status')->get();
    	$count = DB::table('transactions')->where('security',2)->count();
    	return view('admin.bill.giaodichht',compact('dataht','chitiet','count'));
    }
    public function getDonhanghuy(){
        $datahuy = Transaction::select('id','namekh','payment','ghichu','emailkh','phonekh','city','district','address','total','payment','status','created_at')->where('security',3)->get();
        $chitiet =Chitetdonhang::select('transaction_id','product_name','product_image','soluong','total','created_at','status')->get();
        $count = DB::table('transactions')->where('security',3)->count();
        return view('admin.bill.giaodichhuy',compact('datahuy','chitiet','count'));
    }
    public function getDonhang(){

     	$data = Chitetdonhang::select('product_name','product_image','soluong','total','created_at','transaction_id','status')->orderBy('created_at','DESC')->get();
    	return view('admin.bill.donhang',compact('data'));
    }
    public function getTtcho(Request $Request,$id){
         $capnhat = Transaction::find($id);
         $capnhat->security = 1;
         
        $data = [
            'id'        => $capnhat->id,
            'namekh'      => $capnhat->namekh,
            'email'     => $capnhat->emailkh
        ];
        
        Mail::send('admin.bill.sendmailxl',$data,function($msg) use($data){
            $msg->from('laptop24.hn@gmail.com','Laptop24h')->to($data['email'],$data['namekh'])->subject('laptop24.hn@gmail.com');
        });
        $capnhat->save();
        return redirect()->route('admin.bill.getGiaodich')->with('flash_message','Giao dịch đã chuyển sang trạng thái thành chờ !!!');
      }
    public function getTthoanthanh($id){
        $capnhat = Transaction::findOrfail($id);
        $capnhat->security = 2;
        $capnhat->status = 1;

        if($capnhat->save()){
             $dellist = DB::table('chitetdonhangs')->where('transaction_id',$capnhat->id)->get();
            foreach ($dellist as $deltmp) {       
                $del_chitiet = Chitetdonhang::find($deltmp->id);
                $del_chitiet->status = 1;
                $del_chitiet->save();
            }
        }
        $data = [
            'id'     => $capnhat->id,
            'namekh' => $capnhat->namekh,
            'email'  => $capnhat->emailkh
        ];
        
        Mail::send('admin.bill.sendmailcho',$data,function($msg) use($data){
            $msg->from('laptop24h.hn@gmail.com','Laptop24h')->to($data['email'],$data['namekh'])->subject('laptop24h.hn@gmail.com');
        });
        return redirect()->route('admin.bill.getDonhangcho')->with('flash_message','Giao dịch đã thành công !!! ');
    }
    public function getDestroy($id){
        $del = Transaction::find($id);
        $del->security = 3;
        if($del->save())
        {
            $dellist = DB::table('chitetdonhangs')->where('transaction_id',$del->id)->get();
            foreach ($dellist as $deltmp) {       
                $del_chitiet = Chitetdonhang::find($deltmp->id);
                $del_chitiet->status = 2;
                $del_chitiet->save();
            }
        }
        return redirect()->route('admin.bill.getGiaodich')->with('flash_message','Bạn đã hủy đơn hàng thành công ');
    }
   /* public function getSendmailxl(){
        return view('admin.bill.sendmailxl');
    }
    public function getSendmailcho(){
        return view('admin.bill.sendmailxl');
    }*/
}
