<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Carbon\Carbon;
class IndexController extends Controller
{
    public function __construct(){
        $this->middleware('admin',['except' => 'getLogout']);
    }
    public function getIndex(){
    	/*if(!Auth::check()){
    	
    		//return view('admin.login');
    		  return redirect()->route('admin.getLogin');         
        }*/
        //$timestamp = strtotime($items['created_at']);
        $from = new Carbon('last week'); 
        $to = new Carbon('now'); 
        //$date = Carbon::now(); 
        $countuser  = DB::table('users')->count();
        $countadmin = DB::table('admins')->count();
		$countsale  = DB::table('slides')->count();
        $countgd    = DB::table('transactions')->where('security',0)->count();
        $countgdc    = DB::table('transactions')->where('security',1)->count();
        $countgdtc    = DB::table('transactions')->where('security',2)->count();
        $countgdh    = DB::table('transactions')->where('security',3)->count();
		$counttt    = DB::table('tintucs')->count();
        $counttotal = DB::table('transactions')->where('security',2)->sum('total');

      /*  $countsl1 = DB::table('chitetdonhangs')->where('created_at',$date)->sum('soluong');
        //echo $date;
        var_dump($countsl1);
        die();*/
        $countsl    = DB::table('chitetdonhangs')->whereBetween('created_at', array($from->toDateTimeString(), $to->toDateTimeString()))->sum('soluong');
        
        $countslsp    = DB::table('products')->count();
		$countsldm   = DB::table('cates')->count();
        
    	return view('admin.home.index',compact('countuser','countsale','countgd','counttotal','countadmin','countsl','countslsp','countsldm','countgdc','countgdtc','countgdh','counttt'));
        
    	
    }
    public function getLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.getLogin');
    }
}
