<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Seller extends Authenticatable
{

    use HasFactory, Notifiable;

    use HasFactory;

    protected $guarded = [];

    protected $guard = 'seller';

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('uploads/' . $this->image);

    }//end of get image path
    
}//enf of mode
