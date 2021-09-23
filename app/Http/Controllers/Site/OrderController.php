<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\Purchase;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.order');
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
        $request->validate([
            'full_name'  => 'required',
            'addres'     => 'required',
            'phone'      => 'required',
            'additional' => 'required',
        ]);

        try {

            $request_data                = $request->except(['total_price','image']);
            $request_data['total_price'] = preg_replace('/,/', '', Cart::subtotal());


            $orders = Order::create($request_data);

            if (Cart::count() < 0) {

                return redirect()->back()->with('no data');
                
            } else {
                
                foreach (Cart::content() as $products) {

                    Purchase::create([
                        'seller_products_id' => $products->id,
                        'quantity'   => $products->qty,
                        'price'      => number_format($products->model->price,2),
                        'order_id'   => $orders->id,
                    ]);
                    
                }//endo of foreach

                Cart::destroy();

            }//end fo  if


            return redirect()->route('welcome.index');

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }//end try

    }//end of store

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
