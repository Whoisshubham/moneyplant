<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
   public function index(){
    return view('frontend.property_discription');
   }
   public function careers(){
    return view('frontend.blog.index');
   }
   public function reviews(){
    return view('frontend.blog.index');
   }
}
