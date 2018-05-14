<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function getLogin(){
         return view('admin.login');
    }
    public function postLogin(Request $Request){
        $login = array(
            'username' => $Request->username,
            'password' => $Request->password,
            'level' => 1,
            'published' => 1
        );
        if(Auth::guard('admin')->attempt($login)){
            return redirect()->route('admin.getIndex');            
        }else{
            return redirect()->back();
        }
    }
    
}
