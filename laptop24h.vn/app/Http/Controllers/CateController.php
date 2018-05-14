<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cate;
use App\Http\Requests\Caterequest;

class CateController extends Controller
{
   	public function getList(){
   		$data = Cate::select('id','name','parent_id','published','created_at')->get()->toArray();
   		return view('admin.cate.list',compact('data'));
   	}
   	public function getAdd(){
   		$data1 = Cate::select('id','name','parent_id')->get();
   		return view('admin.cate.add',compact('data1'));
   	}
   	public function postAdd(Caterequest $Requests){
          $cate              = new Cate;
          $cate->name        = $Requests->txtname;
          $cate->alias       = changeTitle($Requests->txtname);
          $cate->order       = $Requests->txtorder;
          $cate->parent_id   = $Requests->txtparent;
          $cate->keywords    = $Requests->txtkeywords;
          $cate->description = $Requests->txtdesc;
          $cate->published   = 1;
         $cate->save();
         return redirect()->route('admin.cate.getList')->with('flash_message','Bạn đã thêm thành công !!!');
   	}
      public function getEdit($id){
         $cate = Cate::find($id)->toArray();
         $data2 = Cate::select('id','name','parent_id')->get();
         return view('admin.cate.edit',compact('data2','cate','id'));
      }
      public function postEdit(Request $Request,$id){
         $this->validate($Request,
            ['txtname' => 'required'],
            ['txtname.required' => 'Vui lòng  nhập tên danh mục !!!']
         );
         $cate              = Cate::find($id);
         $cate->name        = $Request->txtname;
         $cate->alias       = changeTitle($Request->txtname);
         $cate->order       = $Request->txtorder;
         $cate->parent_id   = $Request->txtparent;
         $cate->keywords    = $Request->txtkeywords;
         $cate->description = $Request->txtdesc;
         $cate->published   = $Request->txtpublish;
         $cate->save();
          return redirect()->route('admin.cate.getList')->with('flash_message','Bạn đã sửa thành công !!!');
      }
      public function getDelete($id){
         $find = Cate::where('parent_id', $id)->count();
         if($find == 0){
            $cate = Cate::find($id);
            $cate->delete($id);
            return redirect()->route('admin.cate.getList')->with('flash_message','Bạn đã xóa thành công !!!');
         }else{
            echo "<script>
            alert('Bạn không được xóa danh mục này !!!');
            window.location = '";
            echo route('admin.cate.getList');
            echo"'
            </script>";
         }
         
      }
      public function postPublished(Request $Request,$id){
         
         $cate = Cate::find($id);
         $cate->published = 1;
         $cate->save();
          return redirect()->route('admin.cate.getList')->with('flash_message','Cập nhật trạng thái thành công !!!');
      }

      public function postUnPublished(Request $Request,$id){
         
         $cate = Cate::find($id);
         $cate->published = 0;
         $cate->save();
          return redirect()->route('admin.cate.getList')->with('flash_message','Cập nhật trạng thái thành công !!!');
      }
}
