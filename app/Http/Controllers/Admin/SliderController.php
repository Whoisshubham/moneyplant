<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use App\Slider;
use Carbon\Carbon;
use Toastr;
use File;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();

        return view('admin.sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.sliders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:sliders|max:255',
            'video' => 'required|mimes:mp4,avi,webm'
        ]);


        $slider = Slider::first();
        if ($slider) {
            Toastr::success('message', 'Slider created successfully.');
        } else {

            $slug = str_slug($request->title);

            if ($request->hasFile('video')) {
                $currentDate = Carbon::now()->toDateString();
                $image = $request->file('video');
                $imagename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/slider/image');
                $image->move($destinationPath, $imagename);
                $slider = "/slider/image" . "/" . $imagename;

            } else {
                $slider = null;
            }
            Slider::create([
                'title' => $request->title,
                "description" => $request->description,
                "video" => $slider
            ]);

            Toastr::success('message', 'Slider created successfully.');
        }

        return redirect()->route('admin.sliders.index');
    }


    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.sliders.edit', compact('slider'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'mimes:jpeg,jpg,png'
        ]);

        $image = $request->file('video');
        $slug = str_slug($request->title);
        $slider = Slider::find($id);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

        } else {
            $imagename = $slider->video;
        }

        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->video = $imagename;
        $slider->save();

        Toastr::success('message', 'Slider updated successfully.');
        return redirect()->route('admin.sliders.index');
    }


    public function destroy($id)
    {
        $slider = Slider::find($id);

        if (File::exists($slider->video)) {
            File::delete($slider->video);
        }

        $slider->delete();

        Toastr::success('message', 'Slider deleted successfully.');
        return back();
    }
}
