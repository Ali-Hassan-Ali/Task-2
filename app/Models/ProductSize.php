<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;

    protected $fillable = ['product_id' , 'product_color_id' , 'quantity' , 'size_id'];



    public function size()
    {
        return $this->belongsTo(Size::class , 'size_id');
    }
}
