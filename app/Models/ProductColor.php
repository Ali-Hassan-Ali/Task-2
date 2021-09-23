<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected $fillable = ['product_id' , 'color' , 'back_image' , 'front_image'];

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('uploads/product_image/' . $this->image);

    }

    public function product()
    {
        return $this->belongsTo(Product::class , 'product_id');
    }


    public function sizes()
    {
        return $this->hasMany(ProductSize::class , 'product_color_id');
    }

}
