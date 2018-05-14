<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\Socail;
use App\User;
use Auth;



class SocialController extends Controller
{
    /**
     * Redirect the user to the facebook authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback(Request $Request)
    {
        
        $user = Socialite::driver('facebook')->user();
        if($user->email == ''){
            return redirect('dangnhap')->with('flash_message','Xin lỗi chúng tôi không thể tìm thấy email của bạn!');
        }
        else{
        //dd($user);
        $socail = Socail::where('provider_user_id',$user->id)->where('provider','facebook')->first();
        if($socail){
            $login = User::where('email',$user->email)->first();
            Auth::guard('web')->login($login);
            return redirect('/');
           
        }else{
            $temp = new Socail();
            $temp->provider_user_id = $user->id;
            $temp->provider = 'facebook';
            $lg = User::where('email',$user->email)->first();
            if(!$lg){
                $lg = User::create([
                    'username' => $user->name,
                    'email' => $user->email,
                    'password' => bcrypt(123456),
                   /* 'fullname' => $user->name,
                    'level' => 2,
                    'published' => 1,*/
                    'image' => $user->avatar
                ]);
            }
            $temp->user_id = $lg->id;
            $temp->save();
            Auth::guard('web')->login($lg);
            return redirect('/');
           }
           }
    }
     public function getLogout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }

     public function googleredirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function googlehandleProviderCallback()
    {
        $google = Socialite::driver('google')->user();
        //dd($google);
        $socail1 = Socail::where('provider_user_id',$google->id)->where('provider','google')->first();
        if($socail1){
            $login = User::where('email',$google->email)->first();
            Auth::guard('web')->login($login);
            return redirect('/');
           
        }else{
            $temp = new Socail();
            $temp->provider_user_id = $google->id;
            $temp->provider = 'google';
            $lg = User::where('email',$google->email)->where('remember_token',$google->token)->first();
            if(!$lg){
                $lg = User::create([
                    'username' => $google->name,
                    'email' => $google->email,
                    'password' => bcrypt(123456),
                    /*'fullname' => $google->name,
                    'level' => 2,
                    'published' => 1,*/
                    'image' => $google->avatar
                ]);
            }
            $temp->user_id = $lg->id;
            $temp->save();
            Auth::guard('web')->login($lg);
            return redirect('/');
           }
    }
    
}
