<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Seller;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function password_index()
    {
        return view('store.chang_password');
    }

    public function password_update(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        Seller::find(auth()->guard('seller')->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        return response()->json(['success'=> true]);

    }//end of password_update


    public function profile_store(Request $request)
    {

        $request->validate([
            'name'     => ['required','max:20'],
            'email'    => ['required','max:20'],
            'phone'    => ['required','max:12'],
        ]);

        try {

            $id = Seller::find(\Auth::guard('seller')->user()->id);

            $request_data = $request->except(['image']);

            if ($request->image) {

                Storage::disk('public_uploads')->delete($request->image);
                
                $request_data['image']  = $request->file('image')->store('seller_images',['disk' => 'public_uploads']);

            }       

            $id->update($request_data);

            return response()->json(['success'=> true]);

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }//end try

    }//end of store

}//end of controller
