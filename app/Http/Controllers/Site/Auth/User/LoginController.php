<?php

namespace App\Http\Controllers\Site\Auth\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{

    public function form()
    {
        if (Auth::guard('seller')->check()) {

            return redirect()->back();
            
        } else {

            return view('site.login');

        }//end of if

    }//end of form


    public function login(Request $request)
    {
        if (Auth::guard('seller')->check()) {

            return redirect()->back();
            
        } else {

            if (\Auth::guard('seller')->attempt([
                'email' => $request->email, 
                'password' => $request->password])) {

                if (Auth::guard('seller')->user()->seller == '1') {

                    return redirect()->route('store.index');
                    
                }

                return redirect()->route('user.account');

            } else {

                return redirect()->back();
                
            }//end of attempt

        }//end of if auth
        
    }//end of login

    public function seller_logout()
    {
        Auth::guard('seller')->logout();

        return redirect()->route('user.login_form');

    }//end of logout selle

}//end fo controller
