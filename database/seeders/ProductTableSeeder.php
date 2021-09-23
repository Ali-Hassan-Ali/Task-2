<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = ['product one','product tow','product three'];

        foreach ($products as $index=>$product) {
            
            \App\Models\Product::create([
                'name_en'     => $product,
                'name_ar'     => $product,
                'category_id' => $index++,
                'admin_id'    => 1,
                'price'       => 120,
            ]);
            
        }//end of foreach

    }//end of run
    
}//endf of class
