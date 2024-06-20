<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Team;
use App\TeamCategories;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $teamCatrgorie=TeamCategories::whereName('Directors')->first();
        $teamList=Team::where('categorie_id',$teamCatrgorie->id)->get();
        return view('frontend.about',compact('teamList'));
    }

    public function overview($slug){
        $teamList=Team::whereSlug($slug)->first();
        return view('frontend.about_detais',compact('teamList'));
    }
    public function meetTheTeam(){
        $teamCategorieList=TeamCategories::with(['teamList'])->orderBy('id','DESC')->get();
        return view('frontend.meettheclient',compact('teamCategorieList'));
    }
    public function meetTheTeamDetails($slug){
        return view('frontend.meettheclient');
    }
    public function meeetTheDetails($slug){
        $teamdata=Team::whereSlug($slug)->first();
        return view('frontend.meeththeteamdetails',compact('teamdata'));
    }
}
