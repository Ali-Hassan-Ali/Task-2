<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;
use Auth;

class SellerController extends Controller
{

    public function index()
    {
        if (Auth::guard('seller')->check()) {

            return redirect()->back();
            
        } else {

            return view('site.seller_registration');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (Auth::guard('seller')->check()) {

            return redirect()->back();
            
        } else {

            $request->validate([
                'email'         => ['required','unique:sellers'],
                'name'          => ['required'],
                'phone'         => ['required'],
                'about_yourself'=> ['required'],
                'password'      => ['required','confirmed'],
            ]);
            
            $request_data             = $request->except(['password_confirmation']);
            $request_data['password'] = bcrypt($request->password);
            $request_data['seller']   = '1';

            $seller = Seller::create($request_data);

            if (auth()->guard('seller')->attempt([
                'email'    => $request->email, 
                'password' => $request->password])) {
                //return response(['success' => true]);
                return redirect()->route('store.index');

            } else {
                
                return redirect()->back();
                
            }//end of attempt
            
        }//end of if auth

    }//end of store

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Seller $seller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seller $seller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $seller)
    {
        //
    }
}
