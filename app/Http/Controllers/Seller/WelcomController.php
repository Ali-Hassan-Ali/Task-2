<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class WelcomController extends Controller
{
    public function index()
    {

        if (Auth::guard('seller')->user()->seller == '1') {

            return view('store.index');
            
        } else {

            return redirect()->route('user.account');
        }

    }//end of index

    public function darkmode(Request $request)
    {
        return $request;
        if (session()->get('darkmode') == 'dark') {
            
            session()->put('darkmode', 'nodark');

        } else {

            session()->put('darkmode', 'dark');

        }//end of if

    }//end of darkmode
    
}//end fo class
