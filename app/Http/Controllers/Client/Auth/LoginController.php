<?php

namespace App\Http\Controllers\Client\Auth;

use App\Models\Accounts;
use App\Http\Requests\ClientsRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use App\Namespace\To\; 
class LoginController extends Controller
{
    public function login()
    {
        return view('auth_custom.auth.login');
    }

    public function postLogin(ClientsRequest $request)
    {
        $data = $request->except(['_token']);
        // dd($data);
        function isActive($email)
{
$Accounts= Accounts::where('email', $email)->where('is_active',1)->count();
if($Accounts>0)
{
return true;
}
return false;
}
        $result = isActive($request->email);

      
        if($result){
            $checklogin = Auth::guard('account')->attempt($data);
            if ($checklogin) {
             
             
               
                return redirect(RouteServiceProvider::CLIENTS);
            } else {
                return back()->with('message', 'Login failed');
            }
        }

    }
    public function logout(){
        Auth::guard('account')->logout();
        return redirect(RouteServiceProvider::CLIENTS);

    }
}

