<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use  App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
class SocialLogin extends Controller
{
    public function gotoGoogle(){
        return Socialite::driver('google')->redirect(); 
    }
    public function googlestore(){
        $socialuser = Socialite::driver('google')->user();
        $myuser = User::where("email",$socialuser->email)->first();
        if( $myuser){
            Auth::login($myuser);   
            return redirect(RouteServiceProvider::HOME);
        }
        else{
            $newuser = new User;
            $newuser->name = $socialuser->name;
            $newuser->email = $socialuser->email;
            $email = $newuser->email;
            $newuser->save();
            return view("backend.newPass",compact("email"));   
        }         
    }
    public function updatepass(Request $request, $email){
        $finduser = User::where("email",$email)->first();
        if($finduser->password == NULL){
            $finduser->password = Hash::make($request->password);
            $finduser->update();
            Auth::login($finduser);
            return redirect('/');
        }
    }
   
} 
 