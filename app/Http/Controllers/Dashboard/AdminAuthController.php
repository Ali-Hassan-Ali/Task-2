<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use validator;

class AdminAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login_form()
    {
        if (Auth::guard('admin')->check()) {

            return redirect()->back();
            
        } else {

            return view('dashboard.login');

        }//end of if

    }//end of login form


    public function login(Request $request)
    {
        $validated = $this->validate($request, [
            'username' => 'required' , 
            'password' => 'required' , 
        ]);

        $credentials = $request->only('username'  , 'password' );

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('Dashboard');
        }      
    }



    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect(route('Dashboard'));
    }

  
}
