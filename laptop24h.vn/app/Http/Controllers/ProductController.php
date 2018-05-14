<?php

namespace App\Http\Controllers;


use Request;
use File;
use App\Product;
use App\Cate;
use App\Pro_image;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Auth;
use storeAs;

class ProductController extends Controller
{
    public function getList(){
    	$data = Product::select('id','name','masp','price','tinhtrang','published','cate_id','created_at','image','stt')->orderBy('id','DESC')->get();
    	return view('admin.product.list',compact('data'));
    }
    public function getUnpublished($id){
    	$product = Product::find($id);
    	$product->published = 0;
    	$product->save();
    	return redirect()->route('admin.product.getList')->with('flash_message','Trạng thái cập nhật thành công ');
    }
    public function getPublished($id){
    	$product = Product::find($id);
    	$product->published = 1;
    	$product->save();
    	return redirect()->route('admin.product.getList')->with('flash_message','Trạng thái cập nhật thành công ');
    }
    public function getAdd(){
    	$parent = Cate::select('id','name','parent_id')->get();
    	return view('admin.product.add',compact('parent'));
    }
    public function postAdd(ProductRequest $Request){
    	$file_image = $Request->file('txtimage');
		$product              = new Product();
		$product->name        = $Request->txtname;
		$product->alias       = changeTitle($Request->txtname);
		$product->masp        = $Request->txtmasp;
		$product->price       = $Request->txtprice;
		$product->price_new   = $Request->txtprice_new;
		$product->color       = $Request->txtcolor;
		$product->tinhtrang   = $Request->txttinhtrang?$Request->txttinhtrang:'';
		$product->intro       = $Request->txtgioithieu?$Request->txtgioithieu:'';
		$product->content     = $Request->txtcontent;
        
        $product->kichthuoc    = $Request->txtkichthuoc?$Request->txtkichthuoc:'';
        $product->trongluong   = $Request->txttrongluong?$Request->txttrongluong:'';
        $product->manhinh      = $Request->txtmanhinh?$Request->txtmanhinh:'';
        $product->dophangiai   = $Request->txtdophangiai?$Request->txtdophangiai:'';
        $product->pin          = $Request->txtpin?$Request->txtpin:'';
        $product->ram          = $Request->txtram?$Request->txtram:'Null';
        $product->cpu          = $Request->txtcpu?$Request->txtcpu:'';
        $product->ocung        = $Request->txtocung?$Request->txtocung:'';
        $product->cacdohoa     = $Request->txtcacdohoa?$Request->txtcacdohoa:'';
        $product->diaquang     = $Request->txtdiaquang?$Request->txtdiaquang:'';
        $product->conggiaotiep = $Request->txtconggiaotiep?$Request->txtconggiaotiep:'';
        $product->webcam       = $Request->txtwebcam?$Request->txtwebcam:'';
        $product->hedieuhanh   = $Request->txthedieuhanh?$Request->txthedieuhanh:'';
        $product->baohanh      = $Request->txtbaohanh?$Request->txtbaohanh:'';
		//upload ảnh
		if(strlen($file_image) > 0){
            $file_name      = time().'.'.$file_image->getClientOriginalName();
            $des            = 'resources/uploads/';
            $file_image->move($des,$file_name);
            $product->image = $file_name; 
		}
		//
        $product->description = $Request->txtdescription;
		$product->published   = 1;
        $product->stt     = $Request->txtstt;
		$product->user_id     = Auth::guard('admin')->user()->id;
		$product->cate_id     = $Request->txtcate;
		$product->keywords    = $Request->txtkeywords?$Request->txtkeywords:'';
    	$product->save();
        //upload nhiều ảnh
        $product_id = $product->id;
        if($Request->hasFile('Detail_Image')){
            foreach ($Request->file('Detail_Image') as $file) {
                $product_image = new Pro_image();
                if(strlen($file) > 0){  
                    $product_image->product_id = $product_id;
                    //
                    $file_name1                = time().'.'.$file->getClientOriginalName();
                    $des1                      = 'resources/uploads/detail';
                    $file->move($des1,$file_name1);
                    $product_image->image      = $file_name1;
                    //
                    $product_image->save();

                    //
                }
            }
        }
    	return redirect()->route('admin.product.getList')->with('flash_message','Thêm thành công ');
    }
    public function getEdit($id){
        $data          = Cate::select('id','parent_id','name')->get();
        $product       = Product::find($id)->toArray();
        $product_image = Product::find($id)->Pro_images;
        return view('admin.product.edit',compact('data','product','product_image'));
    }
    public function postEdit(Request $Request,$id){
        $product = Product::find($id);
        $product->name        = Request::input('txtname');
        $product->alias       = changeTitle(Request::input('txtname'));
        $product->masp        = Request::input('txtmasp');
        $product->price       = Request::input('txtprice');
        $product->price_new   = Request::input('txtprice_new');
        $product->color       = Request::input('txtcolor');
        $product->tinhtrang   = Request::input('txttinhtrang')?Request::input('txttinhtrang'):'';
        $product->intro       = Request::input('txtgioithieu');
        $product->content     = Request::input('txtcontent')?Request::input('txtcontent'):'';
        $product->kichthuoc    = Request::input('txtkichthuoc')?Request::input('txtkichthuoc'):'';
        $product->trongluong   = Request::input('txttrongluong')?Request::input('txttrongluong'):'';
        $product->manhinh      = Request::input('txtmanhinh')?Request::input('txtmanhinh'):'';
        $product->dophangiai   = Request::input('txtdophangiai')?Request::input('txtdophangiai'):'';
        $product->pin          = Request::input('txtpin')?Request::input('txtpin'):'';
        $product->ram          = Request::input('txtram')?Request::input('txtram'):'';
        $product->cpu          = Request::input('txtcpu')?Request::input('txtcpu'):'';
        $product->ocung        = Request::input('txtocung')?Request::input('txtocung'):'';
        $product->cacdohoa     = Request::input('txtcacdohoa')?Request::input('txtcacdohoa'):'';
        $product->diaquang     = Request::input('txtdiaquang')?Request::input('txtdiaquang'):'';
        $product->conggiaotiep = Request::input('txtconggiaotiep')?Request::input('txtconggiaotiep'):'';
        $product->webcam       = Request::input('txtwebcam')?Request::input('txtwebcam'):'';
        $product->hedieuhanh   = Request::input('txthedieuhanh')?Request::input('txthedieuhanh'):'';
        $product->baohanh      = Request::input('txtbaohanh')?Request::input('txtbaohanh'):'';
        $product->description = Request::input('txtdescription');
        $product->published   = Request::input('txtpublish');
        $product->user_id     = Auth::guard('admin')->user()->id;
        $product->cate_id     = Request::input('txtcate');
        $product->keywords    = Request::input('txtkeywords')?Request::input('txtkeywords'):'';
        $product->stt         = Request::input('txtstt');
        //sửa ảnh
        $img_c = 'resources/uploads/'.Request::input('img_c');
        if(!empty(Request::file('Image'))){
            $file_name      = Request::file('Image')->getClientOriginalName();
            $product->image = $file_name;
            Request::file('Image')->move('resources/uploads/',$file_name);
            if(File::exists($img_c)){
            File::delete($img_c);
            }
        }else{
            echo "ko co file !!!";
        }
        $product->save();
        //sửa nhiều ảnh
        if(!empty(Request::file('Detail_Image'))){
            foreach (Request::file('Detail_Image') as $file) {
                $product_image = new Pro_image();
                if(strlen($file) > 0){              
                    $product_image->product_id = $id;
                    $file_name1                = time().'.'.$file->getClientOriginalName();
                    $des1                      = 'resources/uploads/detail';
                    $file->move($des1,$file_name1);
                    $product_image->image      = $file_name1;
                    $product_image->save();
                }
            }
        }
        //
        return redirect()->route('admin.product.getList')->with('flash_message','Bạn đã sửa thành công ');
    }
    public function getDelete($id){
        $product_detail = Product::find($id)->Pro_images->toArray();
        foreach ($product_detail as $value) {
            File::delete('resources/uploads/detail/'.$value["image"]);
        }
        $product = Product::find($id);
        File::delete('resources/uploads/'.$product->image);
        $product->delete($id);
        return redirect()->route('admin.product.getList')->with('flash_message','Bạn đã xóa thành công ');

    }
    public function getDelete_img($id){
        if(Request::ajax()){
            $idhinh = (int)Request::get('idhinh');
            $image_detail = Pro_image::find($idhinh);
            if(!empty($image_detail)){
                $img = 'resources/uploads/detail/'.$image_detail->image;
                if(File::exists($img)){
                    File::delete($img);
                }
                $image_detail->delete();
            }
            return "ok";
        }
    }
}
