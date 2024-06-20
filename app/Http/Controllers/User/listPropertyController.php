<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class listPropertyController extends Controller
{
    public function index(){
        return view('frontend.list_my_property');
    }
    public function buyerGuid(){
        return view('frontend.buyerGuid');
    }
    public function sellerGuid(){
        return view('frontend.sellerGuid');
    }
    public function whyBuymoneyplant(){
        return view('frontend.whyBuymoneyplant');
    }
    public function whySellmoneyplant(){
        return view('frontend.whySellmoneyplant');
    }
    public function valuation(){
        return view('frontend.property_valuation');
    }
    public function knowledgeCenterCalculator(){
        return view('frontend.knowledgeCenterCalculator');
    }
    public function knowledgeCenter(){
        return view('frontend.knowledgecenter');
    }
    public function areaGuid(){
        return view('frontend.areaGuid');
    }
    public function terminology(){
        return view('frontend.terminology');
    }
}
