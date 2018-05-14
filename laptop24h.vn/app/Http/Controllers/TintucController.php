<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tintuc;
use File;

class TintucController extends Controller
{
    public function getList(){
    	$data =Tintuc::select('id','name','image','published','created_at')->orderBy('id','DESC')->get();
    	return view('admin.tintuc.list',compact('data'));
    }
    public function getUnpublished($id){
    	$tintuc = Tintuc::find($id);
    	$tintuc->published = 0;
    	$tintuc->save();
    	return redirect()->route('admin.tintuc.getList')->with('flash_message','Trạng thái cập nhật thành công ');
    }
    public function getPublished($id){
    	$tintuc = Tintuc::find($id);
    	$tintuc->published = 1;
    	$tintuc->save();
    	return redirect()->route('admin.tintuc.getList')->with('flash_message','Trạng thái cập nhật thành công ');
    }
     public function getAdd(){
    	return view('admin.tintuc.add');
    }
     public function postAdd(Request $Request){
    	$file_image = $Request->file('txtimage');
		$tintuc              = new Tintuc();
		$tintuc->name        = $Request->txtname;
		$tintuc->alias       = changeTitle($Request->txtname);
		$tintuc->intro       = $Request->txtgioithieu;
		$tintuc->content     = $Request->txtcontent;
		//upload ảnh
		if(strlen($file_image) > 0){
            $file_name      = time().'.'.$file_image->getClientOriginalName();
            $des            = 'resources/uploads/tintuc';
            $file_image->move($des,$file_name);
            $tintuc->image = $file_name; 
		}
		//
        $tintuc->description = $Request->txtdescription;
		$tintuc->published   = 1;
    	$tintuc->save();
    	return redirect()->route('admin.tintuc.getList')->with('flash_message','Thêm thành công ');
    }
     public function getDelete($id){
        $tintuc = Tintuc::find($id);
        File::delete('resources/uploads/tintuc/'.$tintuc->image);
        $tintuc->delete($id);
        return redirect()->route('admin.tintuc.getList')->with('flash_message','Bạn đã xóa thành công ');

    }
     public function getEdit($id){
        $tintuc       = Tintuc::find($id)->toArray();     
        return view('admin.tintuc.edit',compact('tintuc'));
    }
    public function postEdit(Request $Request,$id){
        $tintuc = Tintuc::find($id);
        $tintuc->name        = $Request->txtname;
        $tintuc->alias       = changeTitle($Request->txtname);
        $tintuc->intro       = $Request->txtgioithieu;
        $tintuc->content     = $Request->txtcontent;
        $tintuc->description = $Request->txtdescription;
        $tintuc->published   = $Request->txtpublish;
        //sửa ảnh
        if(!empty($Request->Image)){
            $file_name      = $Request->Image->getClientOriginalName();
            $tintuc->image = $file_name;
            $Request->Image->move('resources/uploads/tintuc',$file_name);
        }else{
            echo "ko co file !!!";
        }
        $tintuc->save();
        return redirect()->route('admin.tintuc.getList')->with('flash_message','Bạn đã sửa thành công ');
    }
}
