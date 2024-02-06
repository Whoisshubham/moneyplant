<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Team;
use App\TeamCategories;
use Illuminate\Http\Request;
use Storage;
use Auth;
use Toastr;
use Carbon\Carbon;

class OurTeamController extends Controller
{
    public function index()
    {
        $teamList = Team::with(['teamCategorie'])->get();
        return view('admin.ourteam.index', compact('teamList'));
    }
    public function create()
    {
        $teamCategorieList = TeamCategories::get();
        return view('admin.ourteam.create', compact('teamCategorieList'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            "team" => "required",
            'designation' => 'required',
            'email' => 'required|email',
            'linked' => 'required|url',
            'description' => 'required'
        ]);
        $currentDate = Carbon::now()->toDateString();
        $image = $request->file('image');
        $imagename = $request->name . '-admin-' . Auth::id() . '-' . $currentDate . '.' . $image->getClientOriginalExtension();
        $image->move('team', $imagename);
        $store = new Team;
        $store->categorie_id = $request->team;
        $store->name = $request->name;
        $store->image = "team/" . $imagename;
        $store->designation = $request->designation;
        $store->call = $request->call;
        $store->language = $request->language;
        $store->listing_properties = $request->listing_properties;
        $store->whatsapp = $request->whatsapp;
        $store->description = $request->description;
        $store->email = $request->email;
        $store->linkedin = $request->linked;
        $store->save();
        Toastr::success('message', 'Team Added successfully.');
        return redirect()->route('admin.team.index');
    }

    public function edit($id)
    {
        $team = Team::with(['teamCategorie'])->find($id);
        $teamCategorieList = TeamCategories::get();
        return view('admin.ourteam.edit', compact('team','teamCategorieList'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            "team" => "required",
            'designation' => 'required',
            'email' => 'required|email',
            'linked' => 'required|url',
            'description' => 'required|'
        ]);
        $store =Team::find($id);
       if($request->hasFile('image')){
        $image = $request->file('image');
        $currentDate = Carbon::now()->toDateString();
        $imagename = $request->name . '-admin-' . Auth::id() . '-' . $currentDate . '.' . $image->getClientOriginalExtension();
        $image->move('team', $imagename);
        $imageName="team/" . $imagename;
       }else{
        $imageName=$store->image;
       }
        
       
        $store->categorie_id = $request->team;
        $store->name = $request->name;
        $store->image = $imageName;
        $store->designation = $request->designation;
        $store->call = $request->call;
        $store->language = $request->language;
        $store->listing_properties = $request->listing_properties;
        $store->whatsapp = $request->whatsapp;
        $store->description = $request->description;
        $store->email = $request->email;
        $store->linkedin = $request->linked;
        $store->save();

        Toastr::success('message', 'Team Update updated successfully.');
        return redirect()->route('admin.team.index');
    }


    public function destroy($id)
    {
        $testimonial = Team::find($id);


        $testimonial->delete();

        Toastr::success('message', 'Testimonial deleted successfully.');
        return back();
    }
}
