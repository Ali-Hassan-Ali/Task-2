<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerProductColor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function SellerProduct()
    {
        $this->belongsTo(SellerProductColor::class,'seller_products_id');
    }//ebd of swller color product

    public function store()
    {
        return $this->belongsTo(Store::class,'store_id');
    }//end of product

}//end of model
