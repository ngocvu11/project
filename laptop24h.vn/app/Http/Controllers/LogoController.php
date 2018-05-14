<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;
use File;

class LogoController extends Controller
{
    public function getList(){
    	$data = Logo::select('id','name','image','link','created_at','published')->orderBy('id','DESC')->get();
    	return view('admin.logo.list',compact('data'));
    }
    public function getAdd(){
    	return view('admin.logo.add');
	}
	public function postAdd(Request $Request){
		$this->validate($Request,
    		[
    			'txtname' => 'required',
    			'txtimage' => 'required'
    		],
    		[
    			'txtname.required' => 'Vui lòng nhập tên logo',
    			'txtimage.required' => 'Vui lòng chọn ảnh'
    		]	
    	);
    	$file_image = $Request->file('txtimage');
    	$logo = new Logo();
    	$logo->name = $Request->txtname;
    	$logo->link = $Request->txtlink;
    	if(strlen($file_image) > 0){
            $file_name      = time().'.'.$file_image->getClientOriginalName();
            $des            = 'resources/uploads/logo';
            $file_image->move($des,$file_name);
            $logo->image = $file_name; 
		}
		$logo->published = 1;
		$logo->save();
		return redirect()->route('admin.logo.getList')->with('flash_message','Bạn đã thêm thành công');
	}
	public function getEdit($id){
		$data = Logo::find($id);
		return view('admin.logo.edit',compact('data'));
	}
	public function postEdit(Request $Request,$id){
		$this->validate($Request,
    		[
    			'txtname' => 'required',
    			'txtlink' => 'required'
    		],
    		[
    			'txtname.required' => 'Vui lòng nhập tên logo',
    			'txtlink.required' => 'Vui lòng nhập link logo',
    		]	
    	);
    	$logo = Logo::find($id);
    	$logo->name = $Request->txtname;
    	$logo->link = $Request->txtlink;
    	$logo->published = $Request->txtpublish;
    	if(!empty($Request->Image)){
            $file_name      = $Request->Image->getClientOriginalName();
            $logo->image = $file_name;
            $Request->Image->move('resources/uploads/logo',$file_name);
        }else{
            echo "ko co file !!!";
        }
        $logo->save();
        return redirect()->route('admin.logo.getList')->with('flash_message','Bạn đã sửa thành công');
	}
	public function getUnpublished(Request $Request,$id){
         $logo = Logo::find($id);
         $logo->published = 0;
         $logo->save();
          return redirect()->route('admin.logo.getList')->with('flash_message','Cập nhật trạng thái thành công !!!');
      }
	public function getPublished(Request $Request,$id){
		$logo = Logo::findOrfail($id);
		$logo->published = 1;
		$logo->save();
		return redirect()->route('admin.logo.getList')->with('flash_message','Trạng thái cập nhật thành công ');
	}
	public function getDelete($id){
		$logo = Logo::findOrfail($id);
        File::delete('resources/uploads/logo/'.$logo->image);
		$logo->delete($id);
		return redirect()->route('admin.logo.getList')->with('flash_message','Bạn đã xóa thành công ');
	}
}
