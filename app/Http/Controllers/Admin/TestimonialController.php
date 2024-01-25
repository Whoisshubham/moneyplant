<?php

namespace App\Http\Controllers\Admin;

use App\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class TestimonialController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::orderBy('id',"DESC")->get();
        return view('admin.testimonials.index', compact('feedbacks'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'star' => 'required',
            'message' => 'required|max:2000'
        ]);

        $image = $request->file('image');

        $testimonial = new Feedback();
        $testimonial->name = $request->name;
        $testimonial->message = (string)$request->message;
        $testimonial->star = $request->star;
        $testimonial->save();

        Toastr::success('message', 'Testimonial created successfully.');
        return redirect()->route('admin.testimonials.index');
    }


    public function edit($id)
    {
        $testimonial = Feedback::find($id);

        return view('admin.testimonials.edit', compact('testimonial'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'star' => 'required',
            'message' => 'required|max:2000'
        ]);

        $image = $request->file('image'); 
        $slug  = str_slug($request->title);
        $testimonial = Feedback::find($id);

        

        $testimonial->name = $request->name;
        $testimonial->message = $request->message;
        $testimonial->star = $request->star;
        $testimonial->save();

        Toastr::success('message', 'Testimonial updated successfully.');
        return redirect()->route('admin.testimonials.index');
    }


    public function destroy($id)
    {
        $testimonial = Feedback::find($id);


        $testimonial->delete();

        Toastr::success('message', 'Testimonial deleted successfully.');
        return back();
    }
}
