<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function buy(){
        return view('frontend.buy');
    }
    public function sell(){
        return view('frontend.sell');
    }
}
