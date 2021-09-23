<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SellerProduct;
use App\Models\ProductColor;
use Illuminate\Support\Facades\Storage;

class SellerProductController extends Controller
{

    public function products_index()
    {
        $seller_product = SellerProduct::with('product')->get();

        return view('store.products.index',compact('seller_product'));
    }//end of products_index

    public function product($id)
    {
        $products = Product::where('category_id', $id)->get();

        return response()->json($products);

    }//end of product

    public function show_product(Request $request)
    {
        $product = Product::where('id', $request->id)->first();

        $colors  = ProductColor::where('product_id', $product->id)->get();

        return response()->json(['product' => $product,'colors'=>$colors]);

    }//end of show_product

    public function sellers_store_product(Request $request)
    {
        
        // $request->validate([
        //     'title'        => ['required','max:40'],
        //     'tag'          => ['required','max:100'],
        //     'description'  => ['required','max:300'],
        //     'price'        => ['required','max:6'],
        // ]);
        
        // try {
            return dd($request->all());
            $request_data         = $request->except(['addImage','colorSelectorBrushes','logo']);
            $request_data['logo'] = $request->file('logo')->store('seller_products_image',['disk' => 'public_uploads']);


            
            return SellerProduct::create($request_data);
             


            //return redirect()->route('sellers.store.product');

            return response()->json(['success' => true]);

        // } catch (\Exception $e) {

            // return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        // }//end try

    }//enf of store product
    

    public function products_edit($id)
    {
        $seller_product = SellerProduct::with('product')->get();

        return view('store.products.index',compact('seller_product'));
    }//end of products_index

    public function destroy($id)
    {
        try {

            $seller_product  = SellerProduct::where('id' ,$id)->first();

            Storage::disk('public_uploads')->delete($seller_product->logo);

            $seller_product->delete();
            session()->flash('success', __('dashboard.deleted_successfully'));
            return redirect()->back();

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }//end try

    }//end of destroy

}//end fo controller
