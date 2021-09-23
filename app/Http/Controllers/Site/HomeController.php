<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Category;
use App\Models\Page;
use App\Models\About;
use App\Models\Message;
use App\Models\Store;
use App\Models\SellerProduct;
use Validator;
use Mailchimp;
use App\Http\Requests\Site\Messages\StoreMessageRequest;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::where('active' , 1)->latest()->get();
        return view('site.index' , compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $about = About::first();
        return view('site.about' , compact('about'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function page(Page $page)
    {

        return view('site.page' , compact('page'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('site.contact');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact_us(StoreMessageRequest $request)
    {
        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->phone = $request->phone;
        $message->save();

        return back()->with('success' , 'Message Sent Succussfully  , we will contact you soon');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'email' => 'required|email'
        ]);

        if($validator->fails()) {
            return response()->json( [
                'status' => 'error' , 
                'message' => $validator->errors()->first()  , 
            ] , 200);
        }

        Mailchimp::subscribe('9f2c4c59e7' , $request->email);

        return response()->json( [
            'status' => 'success' , 
            'message' => 'You Have Been subscribed in the newsletter Succussfully...please confirm'  , 
        ] , 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function store_details($id)
    {
        $store = Store::find($id);
        
        $products = SellerProduct::where('store_id', $store->id)->get();

        return view('site.store',compact('store','products'));

    }//end of store

    public function product_details($id)
    {
        $product = SellerProduct::find($id);

        $products = SellerProduct::inRandomOrder()->get();

        return view('site.product',compact('product','products'));

    }//end of store

}//end pf controller
