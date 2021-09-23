<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $col = ['#d82a2a','#2a59d8','#46d82a','#fd8a14','#e320f2','#f2208d'];

        foreach ($col as $index=>$value) {
            
            \App\Models\ProductColor::create([
                'color'      => $value,
                'product_id' => $index++
            ]);
            
        }//end of foreach

    }//end of run

}//end of classs
