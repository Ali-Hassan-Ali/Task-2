<?php

namespace App\Http\Controllers\Site\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Auth;
use Hash;
use App\Models\Seller;

class ProfileController extends Controller
{
    public function account()
    {
        if (Auth::guard('seller')->check()) {

            $user = Auth::guard('seller')->user();

            return view('site.myaccount' , compact('user'));

        } else {

            return redirect()->route('welcome.index');

        }//end of if

    }//end of function


    public function update(Request $request)
    {   

        $id = Seller::find(\Auth::guard('seller')->user()->id);

        $request->validate([
            'email'   => ['required', Rule::unique('sellers')->ignore($id)],
            'name'    => ['required'],
            'phone'   => ['required'],
        ]);

        $request_data = $request->except(['image']);

        if ($request->image) {

            Storage::disk('public_uploads')->delete($request->image);
            
            $request_data['image']  = $request->file('image')->store('seller_images',['disk' => 'public_uploads']);

        }       

        $id->update($request_data);

        return response()->json(['success'=> true]);
    }


    public function logout()
    {
        Auth::guard('seller')->logout();

        return redirect('/');

    }//end of logout
   
}//end of controller
