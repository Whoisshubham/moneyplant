<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TeamCategories;
use Illuminate\Http\Request;
use Toastr;
class TeamCategoriesController extends Controller
{
    public function index(){
        $teamList=TeamCategories::get();
        return view('admin.categories_team.index',compact('teamList'));
    }
    public function create(){
        return view('admin.categories_team.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:team_categories,name',
        ]);

        $store=new TeamCategories;
        $store->name=$request->name;
        $store->save();
        Toastr::success('message', 'Team Categories created successfully.');
        return redirect()->route('admin.team-categories.index');
    }
    public function edit($id){
        $category=TeamCategories::find($id)->first();
        return view('admin.categories_team.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:team_categories,name,'.$id
        ]);

       
        $testimonial = TeamCategories::find($id);

        

        $testimonial->name = $request->name;
        $testimonial->save();

        Toastr::success('message', 'Team Categories updated successfully.');
        return redirect()->route('admin.team-categories.index');
    }


    public function destroy($id)
    {
        $testimonial = TeamCategories::find($id);


        $testimonial->delete();

        Toastr::success('message', 'Team Categories deleted successfully.');
        return back();
    }
}
