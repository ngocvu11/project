<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\Http\Requests\UserRequest;
use Hash;
use Auth;
use DB;

class UserController extends Controller
{
     public function getList(){
     	$data = Admin::select('id','level','username','fullname','published','created_at')->get();
     	return view('admin.user.list',compact('data'));
     }
      public function getListkh(){
      $data = User::select('id','username','email','image','created_at')->get();
      $chitietkh = DB::table('socails')->get()->toArray();
      return view('admin.user.listkh',compact('data','chitietkh'));
     }
     public function getAdd(){
      $config = array(
        'Danh mục SP' => array('getList','postEdit','getDelete' ),
        'Sản phẩm'    => array('getList','postEdit','getDelete' ),
        'Slide show'  => array('getList','postEdit','getDelete' ), 
        'Logo'        => array('getList','postEdit','getDelete' ),
        'Tin tức'     => array('getList','postEdit','getDelete' ),   
      );
      //var_dump($config);
      //die;
     	return view('admin.user.add',compact('config'));
     }
     public function postAdd(UserRequest $Request){
          $user                 = new Admin();
          $user->username       = $Request->username;
          $user->fullname       = $Request->fullname;
          $user->password       = Hash::make($Request->password);
          $user->email          = $Request->email;
          $user->level          = $Request->level;
          $user->remember_token = $Request->_token;
          $user->published      = 1;
          $user->permissions    = $Request->permissions;
          var_dump($user->permissions);
          die;
          //$data['permissions']  = json_encode($user->permissions);
          $user->save();
          return redirect()->route('admin.user.getList')->with('flash_message','Thêm người dùng thành công');
     }
     public function getEdit($id){
           $data = Admin::findOrfail($id);
          if((Auth::guard('admin')->user()->id != 1) && ($id == 1 || ($data['level'] == 1 && Auth::guard('admin')->user()->id != $id))){
            return redirect()->route('admin.user.getList')->with('flash_message','Bạn không được sửa user này !!!');
        }
     	return view('admin.user.edit',compact('data','id'));
     }
     public function postEdit(Request $Request,$id){
          $user = Admin::findOrfail($id);
          $user->email          = $Request->email;
          $user->fullname       = $Request->fullname;
          $user->password       = Hash::make($Request->password);
          $user->level          = $Request->level?$Request->level:'1';
          $user->remember_token = $Request->_token;
          $user->published      = $Request->txtpublish?$Request->txtpublish:'1';
          $user->save();
         return redirect()->route('admin.user.getList')->with('flash_message','Sửa người dùng thành công');
     }
     public function getUnpublished($id){
          $user = Admin::find($id);
          $user->published = 0;
          $user->save(); 
          return redirect()->route('admin.user.getList')->with('flash_message','Trạng thái cập nhật thành công');
     }
     public function getPublished($id){
     	$user = Admin::find($id);
          $user->published = 1;
          $user->save(); 
          return redirect()->route('admin.user.getList')->with('flash_message','Trạng thái cập nhật thành công');
     }
     public function getDelete($id){
        //nguoi dung hien tai
     $user_current_login = Auth::guard('admin')->user()->id;
        $user = Admin::find($id);
        if(($id == 1) || ($user_current_login != 1 && $user['level'] == 1)){
            return redirect()->route('admin.user.getList')->with('flash_message','Bạn không được phép xóa !!!');
        }else{
            $user->delete($id);
            return redirect()->route('admin.user.getList')->with('flash_message','Bạn đã xóa thành công !!!');
        }
    }
}
