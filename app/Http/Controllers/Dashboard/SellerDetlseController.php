<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;

class SellerDetlseController extends Controller
{
    public function prfile()
    {
        $sellers = Seller::all();

        return view('dashboard.sellers.profile',compact('sellers'));
    }
}
