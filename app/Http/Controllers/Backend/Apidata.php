<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Alldata;

class Apidata extends Controller
{
    public function alldata(){
        return view("apiUser.add");
    }
    public function alldataStore(Request $request){
       
        $apiuser = new Alldata;
        $apiuser->name = $request->name;
        $apiuser->email = $request->email;
        $apiuser->phone = $request->phone;
        $apiuser->address = $request->address;
        $apiuser->save();
        return redirect()->route('profile',$apiuser->id);
    }
    public function profile($id){
        $userInfo = Alldata::find($id);
        return view("apiUser.profile", compact("userInfo"));
    }
    public function updateApi( Request $request, $id){
        $user = Alldata::find($id);
        $clientid = md5($user->email);
        $user->clientid = $clientid; 
        $token = md5($user->phone);
        $user->token = $token;
        $user->appname = $request->appname;
        $user->description = $request->description;
        $user->url = $request->url;
        $user->update();
        return back(); 
    }
    public function apiCode($id){
        $alldata = Alldata::find($id);
        return response()->JSON([
            "alldata"=>$alldata
        ]);
    }
}
