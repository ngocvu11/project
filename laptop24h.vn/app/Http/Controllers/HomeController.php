<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,Mail;
Use App\Cate;
Use App\Product;
Use App\District;
Use App\City;
Use App\Logo;
Use App\User;
Use App\Pro_image;
Use App\Slide;
Use App\Tintuc;
Use App\Transaction;
Use App\Chitetdonhang;
use Illuminate\Support\Facades\View;
use Breadcrumbs;
use Auth;
use Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth');*/
        $menu1 = DB::table('cates')->where('parent_id',0)->get();
        $menu2 = DB::table('cates')->where('parent_id','<>',0)->get();
        Breadcrumbs::addCrumb('Trang chủ', '/');
        Breadcrumbs::setDivider('»');

        $bc = Breadcrumbs::render();

        view::share('menu1', $menu1);
        view::share('menu2', $menu2);
        view::share('bc', $bc);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cate = DB::table('cates')->get();
        
        $slide = Slide::select('name','image','link','published')->get();
        $tintuc = DB::table('tintucs')->orderBy('id','DESC')->get();
        //$laptophot = DB::table('products')->orderBy('stt','DESC')->take(8)->get()->toArray();
        //$laptopnew = DB::table('products')->orderBy('created_at','DESC')->take(8)->get()->toArray();

        //$spbc = DB::table('chitetdonhangs')->orderBy('soluong','DESC')->take(10)->get()->toArray();
         $spbc = DB::table('products')
                    ->join('chitetdonhangs', 'chitetdonhangs.product_id','=', 'products.id')
                    ->select('products.*', 'products.id', 'chitetdonhangs.product_id')
                    ->orderBy('soluong','ASC')
                    ->take(10)
                    ->get();
                    //var_dump($spbc);
                    //die;
        $laptop = DB::table('products')
                    ->join('cates', 'products.cate_id','=', 'cates.id')
                    ->where('cates.parent_id',1)->orwhere('cates.id',1)
                    ->select('products.*')
                    ->take(10)
                    ->get();

        $laptophot = DB::table('products')
                    ->join('cates', 'products.cate_id','=', 'cates.id')
                    ->where('cates.parent_id',1)->orwhere('cates.id',1)
                    ->select('products.*')
                    ->orderBy('stt','ASC')
                    ->take(10)
                    ->get();
       
        $laptopsale = DB::table('products')
                    ->join('cates', 'products.cate_id','=', 'cates.id')
                    ->where('cates.parent_id',1)
                    ->where('products.price_new','>',0)
                    ->select('products.*')
                    ->take(10)
                    ->get();

        $phukien = DB::table('products')
                    ->join('cates', 'products.cate_id','=', 'cates.id')
                    ->where('cates.parent_id',2)->orwhere('cates.id',2)
                    ->select('products.*')
                    ->take(10)
                    ->get();
                   
        $logo = DB::table('logos')->get();
        return view('frontend.page.home',compact('menu1','menu2','slide','laptopsale','laptophot','spbc','laptop','tintuc','phukien','logo'));
    }
    public function news(){
        $data = DB::table('tintucs')->get();
        Breadcrumbs::addCrumb('tin tức', '');
        $bc = Breadcrumbs::render();
        return view('frontend.page.news',compact('data','bc'));
    }
    public function chitiettintuc($id){
        $tintuc_cont = DB::table('tintucs')->where('id',$id)->get()->toArray();
        $tintuc_cont1 = DB::table('tintucs')->where('id',$id)->first();
       //var_dump($tintuc_cont);
       //die;
        Breadcrumbs::addCrumb('tin tức', '');
        Breadcrumbs::setDivider('»');
        Breadcrumbs::addCrumb($tintuc_cont1->name, '');
        $bc = Breadcrumbs::render();
        return view('frontend.page.tintuc',compact('tintuc_cont','bc'));
    }
    public function getLienhe(){
        return view('frontend.page.lienhe');
    }
    public function postLienhe(Request $Request){
       $data = [
            'name'        => $Request->name,
            'email'      => $Request->email,
            'contact'     => $Request->contact
        ];
        
        Mail::send('frontend.block.emaillienhe',$data,function($msg) use($data){
            $msg->from($data['email'],$data['name']);
            $msg->to('laptop24h.hn@gmail.com','Thắng')->subject('laptop24h.hn@gmail.com');
        });
        return redirect()->route('getLienhe')->with('flash_message','Cảm ơn bạn đã gửi thông tin góp ý với chúng tôi.');
    }
    public function chitietsanpham($id){

       $chitietsp = DB::table('products')->where('id',$id)->get();
       $chitietsp1 = DB::table('products')->where('id',$id)->first();
       $image_detail = DB::table('pro_images')->where('product_id',$chitietsp1->id)->get();
       Breadcrumbs::addCrumb('Chi tiết sản phẩm', '/');
       Breadcrumbs::setDivider('»');
       Breadcrumbs::addCrumb($chitietsp1->name, '');
       $bc = Breadcrumbs::render();
       return view('frontend.page.chitietsanpham',compact('chitietsp','id','image_detail','bc'));
    }
    public function thongtinthanhtoan(){
        $tinhtp = DB::table('cities')->orderBy('name','ASC')->get();
        
        return view('frontend.page.thongtinthanhtoan',compact('tinhtp'));
    }
    public function district(Request $Request){
         if ($Request->ajax()) {
            $cities = District::where('citi_id',$Request->citi_id)->select('id', 'name')->orderBy('name','ASC')->get();
            return response()->json($cities);
        }
    }
    public function dathangthanhcong(){
        return view('frontend.page.dathangthanhcong');
    }
    public function postThanhtoan(Request $Request){
        $this->validate($Request,
            [
                'txtsdt' => 'regex:/^(0[1,9])(\d{8,9})$/u',
                'txtemail' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'tp' => 'required',
                'qh' => 'required'
            ],
            [
               'txtsdt.regex' => 'Không đúng định dạng số điện thoại !!!',
                'txtemail.regex' => 'Không đúng không phải định dạng email !!!',
                'tp.required' => 'Vui lòng chọn Tỉnh/TP',
                'qh.required' => 'Vui lòng chọn Quận/Huyện'
            ]   
        );
        $thongtin               = new Transaction();
        if(Auth::guest()){
             $thongtin->userdk_id = 0; 
        }else{
            $thongtin->userdk_id    = Auth::user()->id;
        }
        $thongtin->namekh       = $Request->txthoten;
        $thongtin->emailkh      = $Request->txtemail;
        $thongtin->phonekh      = $Request->txtsdt;
        $thongtin->city         = $Request->tp;
        $listchitietdh = json_decode($Request->listchitietdonhang);
         foreach ($listchitietdh as $item) {
            $thongtin->total     += $item->price*$item->qty;
           
         }

        $thongtin->district     = $Request->qh;
        $thongtin->address      = $Request->txtaddress;
        $thongtin->payment      = $Request->txtpayment;
        $thongtin->ghichu       = $Request->txtghichu?$Request->txtghichu:'';
        $thongtin->payment_info = 0;
        $thongtin->security     = 0;
        $thongtin->status       = 0;
        $s = $thongtin->save();
        if($s){
                
            foreach($listchitietdh as $item) {
                $chitietdh                 = new Chitetdonhang();
                $chitietdh->transaction_id = $thongtin->id;
                $chitietdh->product_id     = $item->id;
                $chitietdh->product_image  = $item->image;
                $chitietdh->product_name   = $item->name;
                $chitietdh->soluong        = $item->qty;
                $chitietdh->total          = $item->qty*$item->price;
                $chitietdh->status         = 0;
                //$total += $$item->qty*$item->price;
                $chitietdh->save();
                
            }
        }
        
        //
         $data = [
             'id'       => $thongtin->id,
             'name'     => $Request->txthoten,
             'email'    => $Request->txtemail,
             'sdt'      => $Request->txtsdt,
             'city'     => $Request->tp,
             'district' => $Request->qh,
             'address'  => $Request->txtaddress,
             'ghichu'   => $Request->txtghichu,
             'payment'  => $Request->txtpayment,
             'listctdh' => json_decode($Request->listchitietdonhang),
             'tongtien' =>  $thongtin->total,
        ];
        //var_dump($data);
       
        Mail::send('frontend.block.emailxacnhandh',$data,function($msg) use($data){
            $msg->from('laptop24h.hn@gmail.com','Laptop24h');
            $msg->to($data['email'],$data['name'])->subject('laptop24h.hn@gmail.com');
        });
       return redirect()->route('dathangthanhcong');
    }
    public function loaisp($id){
        $loaisp = DB::table('products')
                    ->join('cates', 'products.cate_id','=', 'cates.id')
                    ->where('cates.parent_id',$id)->orwhere('cates.id',$id)
                    ->select('products.*')
                    ->get();
        $cate = DB::table('cates')->where('parent_id',0)->where('id',$id)->first();
         Breadcrumbs::addCrumb($cate->name, '/');
         $bc = Breadcrumbs::render();
        return view('frontend.page.loaisp',compact('loaisp','bc'));
    }
    public function loaisanpham($id){
       
        $loaisp = DB::table('products')->where('cate_id',$id)->paginate(10);
        $cate = DB::table('cates')->where('id',$id)->first();
        Breadcrumbs::addCrumb($cate->name, '/');
         $bc = Breadcrumbs::render();
        return view('frontend.page.loaisanpham',compact('loaisp','bc'));
    }
    public function locsanpham($id){
        if($id == 1){
            $locsp = DB::table('products')->where('price','>=','5000000')->where('price','<=','10000000')->get();
        }elseif($id == 2){
            $locsp = DB::table('products')->where('price','>','10000000')->where('price','<=','15000000')->get();
        }elseif($id == 3){
            $locsp = DB::table('products')->where('price','>','15000000')->where('price','<=','20000000')->get();
        }elseif($id == 4){
            $locsp = DB::table('products')->where('price','>','20000000')->where('price','<=','25000000')->get();
        }else{
            $locsp = DB::table('products')->where('price','>','25000000')->get();
        }

        Breadcrumbs::addCrumb('Laptop', '');
        $bc = Breadcrumbs::render();
        return view('frontend.page.locsanpham',compact('locsp','bc'));
    }

     public function locsanphamtheoram($id){
       
        if($id == 1){
            $ram = DB::table('products')
                    ->join('cates', 'products.cate_id','=', 'cates.id')
                    ->where('cates.parent_id',1)->where('ram','<','4')->orwhere('cates.id',1)
                    ->select('products.*')
                    ->get();
        }elseif($id == 2){
            $ram = DB::table('products')->where('ram','4')->get();
        }elseif($id == 3){
            $ram = DB::table('products')->where('ram','6')->get();
        }elseif($id == 4){
            $ram = DB::table('products')->where('ram','8')->get();
        }else{
            $ram = DB::table('products')->where('ram','16')->get();
        }

        Breadcrumbs::addCrumb('Laptop', '');
        $bc = Breadcrumbs::render();
        return view('frontend.page.locsanphamtheoram',compact('ram','bc'));
    }
     public function locsanphamtheomh($id){
        if($id == 1){
            $ram = DB::table('products')->where('manhinh','>=','12')->where('manhinh','<','13')->get();
        }elseif($id == 2){
            $ram = DB::table('products')->where('manhinh','>=','13')->where('manhinh','<','14')->get();
        }elseif($id == 3){
            $ram = DB::table('products')->where('manhinh','>=','14')->where('manhinh','<','15')->get();
        }else{
            $ram = DB::table('products')->where('manhinh','>=','15')->where('manhinh','<','16')->get();
        }

        Breadcrumbs::addCrumb('Laptop', '');
        $bc = Breadcrumbs::render();
        return view('frontend.page.locsanphamtheoram',compact('ram','bc'));
    }
    public function dangnhap(){
        return view('frontend.page.dangnhap');
    }
    public function logindk(Request $Request){
            $login = array(
                'email' => $Request->email,
                'password' => $Request->pass,
            );
            if(Auth::guard('web')->attempt($login)){
                return redirect('/');
            }else{
                 return redirect()->back();
            }
    }
    public function dangky(){
        return view('frontend.page.dangky');
    }
    public function postdangky(Request $Request){
        $this->validate($Request,
            [
                'username' => 'required',
                'email' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix|unique:users,email',
                'password' => 'required',
                'repassword' => 'required|same:password'
            ],
            [
               'username.required' => 'Tên đăng nhập không được để trống !!!',
                'email.unique' => 'email đã tồn tại!!!',
                'email.regex' => 'Không đúng không phải định dạng email !!!',
                'password.required' => 'Vui lòng nhập password',
                'repassword.required' => 'Vui lòng nhập lại password',
                'repassword.same' => 'Password ko trùng nhau'
            ]   
        );
        $data = new User();
        $data->username = $Request->username; 
        $data->email = $Request->email; 
        $data->password = Hash::make($Request->password); 
        $data->remember_token = $Request->_token; 
        $data->image = 1 ; 
        $data->save();
        return redirect()->route('dangnhap')->with('flash_message','Bạn đã đăng ký thành công');
    }
    public function timkiem(Request $Request){
       $timkiem = Product::where('name','like','%'.$Request->key.'%')
                          ->orWhere('price',$Request->key)
                          ->get();
        Breadcrumbs::addCrumb('Tìm kiếm', '');
        Breadcrumbs::setDivider('»');
        Breadcrumbs::addCrumb($Request->key, '');
        $bc = Breadcrumbs::render();  

        return view('frontend.page.timkiem',compact('timkiem','bc'));
    }
    public function autotimkiem(Request $Request){
        $term = $Request->term;
        $autosearch = Product::where('name','LIKE','%'.$term.'%')->take(10)->get();
        $results = array();
        foreach ($autosearch as $key => $value) {
            $results[] = ['label'=>$value->name,'id'=>$value->id,'value'=>$value->name]; 
        }
         return response()->json($results);
    }
    public function sosanh(Request $Request){
       
        Breadcrumbs::addCrumb('So sánh sản phẩm', '');
        $bc = Breadcrumbs::render();
        return view('frontend.page.sosanh',compact('bc'));
    }
    public function getlistproduct(Request $Request){
        
        if($Request->input('p1') || $Request->input('p2')){
            $data = DB::table('products')->orwhere('id',$Request->input('p1'))->orwhere('id',$Request->input('p2'))->get();
        }
            
            return response()->json($data);
       
    }
}
