<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use File;

class SlideController extends Controller
{
    public function getList(){
    	$data = Slide::select('id','name','image','link','created_at','published')->orderBy('id','DESC')->get();
    	return view('admin.slide.list',compact('data'));
    }
    public function getAdd(){
    	return view('admin.slide.add');
	}
	public function postAdd(Request $Request){
		$this->validate($Request,
    		[
    			'txtname' => 'required',
    			'txtimage' => 'required'
    		],
    		[
    			'txtname.required' => 'Vui lòng nhập tên Slide',
    			'txtimage.required' => 'Vui lòng chọn ảnh'
    		]	
    	);
    	$file_image = $Request->file('txtimage');
    	$slide = new Slide();
    	$slide->name = $Request->txtname;
        $slide->link = $Request->txtlink;
    	if(strlen($file_image) > 0){
            $file_name      = time().'.'.$file_image->getClientOriginalName();
            $des            = 'resources/uploads/slide';
            $file_image->move($des,$file_name);
            $slide->image = $file_name; 
		}
		$slide->published = 1;
		$slide->save();
		return redirect()->route('admin.slide.getList')->with('flash_message','Bạn đã thêm thành công');
	}
	public function getEdit($id){
		$data = Slide::find($id);
		return view('admin.slide.edit',compact('data'));
	}
	public function postEdit(Request $Request,$id){
		$this->validate($Request,
    		[
    			'txtname' => 'required'
    		],
    		[
    			'txtname.required' => 'Vui lòng nhập tên Slide'
    		]	
    	);
    	$slide = Slide::find($id);
    	$slide->name = $Request->txtname;
        $slide->link = $Request->txtlink;
    	$slide->published = $Request->txtpublish;
    	if(!empty($Request->Image)){
            $file_name      = $Request->Image->getClientOriginalName();
            $slide->image = $file_name;
            $Request->Image->move('resources/uploads/slide',$file_name);
        }else{
            echo "ko co file !!!";
        }
        $slide->save();
        return redirect()->route('admin.slide.getList')->with('flash_message','Bạn đã sửa thành công');
	}
	public function getUnpublished(Request $Request,$id){
         
         $slide = Slide::find($id);
         $slide->published = 0;
         $slide->save();
          return redirect()->route('admin.slide.getList')->with('flash_message','Cập nhật trạng thái thành công !!!');
      }
	public function getPublished(Request $Request,$id){
		$slide = Slide::findOrfail($id);
		$slide->published = 1;
		$slide->save();
		return redirect()->route('admin.slide.getList')->with('flash_message','Trạng thái cập nhật thành công ');
	}
	public function getDelete($id){
		$slide = Slide::findOrfail($id);
        File::delete('resources/uploads/slide/'.$slide->image);
		$slide->delete($id);
		return redirect()->route('admin.slide.getList')->with('flash_message','Bạn đã xóa thành công ');
	}
}
