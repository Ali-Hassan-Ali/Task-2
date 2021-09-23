<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerProduct extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['logo_path'];

    public function getLogoPathAttribute()
    {
        return asset('uploads/' . $this->logo);

    }//end of get logo path

    public function SellerColorProduct()
    {
        return $this->hasMany(SellerProductColor::class,'seller_products_id');
    }//ebd of swller color product

    public function product()
    {
        return $this->belongsTo(Product::class);
    }//ebd of swller color product

    public function store()
    {
        return $this->belongsTo(Store::class,'store_id');
    }//ebd of swller color product

}//end fo model
