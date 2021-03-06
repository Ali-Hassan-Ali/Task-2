<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Models\SellerProduct;
use App\Models\Coupon;

class CartController extends Controller
{

    public function cart_index()
    {
        return view('site.cart');
    }

    public function add_cart(Request $request,$product)
    {

        try {

            if (request()->ajax()) {

                $product_model = SellerProduct::FindOrFail($product);

                $product = Cart::add($product_model->id, $product_model->product->name, 1 , $product_model->price,)
                    ->associate('App\Models\SellerProduct');

                $total   = Cart::subtotal();
                $count   = Cart::count();
                $local   = app()->getLocale();

                return response()->json(['product' => $product, 'product_model' => $product_model, 'total' => $total, 'local' => $local, 'count' => $count]);

            }//end of if ajax

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }//end try

    }//end of function

    public function update_cart(Request $request, $id)
    {   
        try {

            if (request()->ajax()) {

                $cart  = Cart::update($request->row_id, $request->quantity);
                $count = Cart::count();
                $app   = app()->getLocale();

                if ($coupon = session()->has('coupon_value') == '') {

                    $coupon = '0';
                    
                } else {

                    $coupon = session()->get('coupon_value'); 

                }//end of if

                return response()->json(['cart' => $cart, 'count' => $count, 'app' => $app, 'coupon' => $coupon]);

            }//end of ajax

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }//end try

    }//end of function

    public function destroy_cart($id)
    {
        try {

            if (request()->ajax()) {

                $cart  = Cart::content()->where('rowId', $id)->first();
                $count = Cart::count();
                Cart::remove($id);
                return response()->json(['count' => $count]);

            }//end of ajax

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }//end try
    
    }//end of function

    public function add_coupon_cart(Request $request)
    {
        
        try {

            if (request()->ajax()) {    

                $coupon = Coupon::where('name', $request->coupon)->first();


                if ($coupon == null || $coupon->end <= date('Y-m-d')) {
              
                    return response()->json('error');
                }

                session()->put(['coupon_value' => $coupon->value,'coupon_name' => $coupon->name,'end' => $coupon->end]);
              
                return response()->json(['success' => true]);

            }//end of ajax


        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }//end try

    }//end of store

    public function destroy_coupon_cart()
    {
        try {

            if (request()->ajax()) {
                
                session()->forget(['coupon_value','coupon_name','end']);

                $app   = app()->getLocale();
                
                return response()->json(['success' => true, 'app' => $app]);

            }//end of ajax

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }//end try

    }//end of destroy

}//end of controller
