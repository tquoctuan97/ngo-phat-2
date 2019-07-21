<?php

namespace App\Http\Controllers;
use App\Order;

use Illuminate\Http\Request;
class OrderController extends Controller
{      
public function getOrder(){
 
    $order = Order::all();
    return view('page.order',compact('order'));
 
    }
    
}