<?php

namespace App\Http\Controllers\Seller;
use App\Http\Controllers\Controller;

use App\Models\Order;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function dashboard(){
        $orders=Order::orderBy('id','DESC')->get();
        return view('seller.index',compact('orders'));
    }
}
