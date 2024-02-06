<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Property;
use App\Feature;
use App\PropertyImageGallery;
use App\Comment;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Toastr;
use Auth;
use File;

class PropertyController extends Controller
{

    public function index()
    {
        $properties = Property::latest()->withCount('comments')->get();

        return view('admin.properties.index', compact('properties'));
    }


    public function create()
    {
        $features = Feature::all();

        return view('admin.properties.create', compact('features'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:properties|max:255',
            'price' => 'required',
            'purpose' => 'required',
            'type' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'city' => 'required',
            'address' => 'required',
            'area' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,avif',
            'floor_plan' => 'mimes:jpeg,jpg,png,avif',
            'description' => 'required',
            'location_latitude' => 'required',
            'location_longitude' => 'required',
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->title);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (request()->hasFile('image')) {
                $file = request()->file('image');
                $fileName = $imagename;
                $file->move('property', $fileName);
            }

        }

        $floor_plan = $request->file('floor_plan');
        if (isset($floor_plan)) {
            $currentDate = Carbon::now()->toDateString();
            $imagefloorplan = 'floor-plan-' . $currentDate . '-' . uniqid() . '.' . $floor_plan->getClientOriginalExtension();

            if (request()->hasFile('floor_plan')) {
                $floor_plan = request()->file('floor_plan');
                $fileName2 = $imagefloorplan;
                $floor_plan->move('property', $fileName2);
            }

        } else {
            $imagefloorplan = 'default.png';
        }

        $property = new Property();
        $property->title = $request->title;
        $property->slug = $slug;
        $property->price = $request->price;
        $property->purpose = $request->purpose;
        $property->type = $request->type;
        $property->image = "property/" . $imagename;
        $property->bedroom = $request->bedroom;
        $property->bathroom = $request->bathroom;
        $property->city = $request->city;
        $property->city_slug = str_slug($request->city);
        $property->address = $request->address;
        $property->area = $request->area;

        if (isset($request->featured)) {
            $property->featured = true;
        }
        $property->agent_id = Auth::id();
        $property->description = $request->description;
        $property->video = $request->video;
        $property->floor_plan = "property/" . $imagefloorplan;
        $property->location_latitude = $request->location_latitude;
        $property->location_longitude = $request->location_longitude;
        $property->nearby = $request->nearby;
        $property->save();

        $property->features()->attach($request->features);


        $gallary = $request->file('gallaryimage');

        if ($gallary) {
            foreach ($gallary as $images) {
                $currentDate = Carbon::now()->toDateString();
                $name = 'gallary-' . $currentDate . '-' . uniqid() . '.' . $images->getClientOriginalExtension();
                $galimage['name'] = 'property/gallery/' . 'gallary-' . $currentDate . '-' . uniqid() . '.' . $images->getClientOriginalExtension();
                $galimage['size'] = null;
                $galimage['property_id'] = $property->id;
                $images->move('property/gallery/', $name);

                $property->gallery()->create($galimage);
            }
        }

        Toastr::success('message', 'Property created successfully.');
        return redirect()->route('admin.properties.index');
    }


    public function show(Property $property)
    {
        $property = Property::withCount('comments')->find($property->id);

        $videoembed = $this->convertYoutube($property->video, 560, 315);

        return view('admin.properties.show', compact('property', 'videoembed'));
    }


    public function edit(Property $property)
    {
        $features = Feature::all();
        $property = Property::find($property->id);

        $videoembed = $this->convertYoutube($property->video);

        return view('admin.properties.edit', compact('property', 'features', 'videoembed'));
    }


    public function update(Request $request, $property)
    {
        $request->validate([
            'title' => 'required|max:255',
            'price' => 'required',
            'purpose' => 'required',
            'type' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'city' => 'required',
            'address' => 'required',
            'area' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png',
            'floor_plan' => 'image|mimes:jpeg,jpg,png',
            'description' => 'required',
            'location_latitude' => 'required',
            'location_longitude' => 'required'
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->title);

        $property = Property::find($property->id);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename1 = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (File::exists(public_path($request->image))) {
                File::delete(public_path($request->image));
            }
            if (request()->hasFile('image')) {
                $file = request()->file('image');
                $fileName = $imagename1;
                $file->move('property', $fileName);
            }

        } else {
            $imagename = $property->image;
        }

        $floor_plan = $request->file('floor_plan');
        if (isset($floor_plan)) {
            $currentDate = Carbon::now()->toDateString();
            $imagefloorplan = 'floor-plan-' . $currentDate . '-' . uniqid() . '.' . $floor_plan->getClientOriginalExtension();



            if (File::exists(public_path('uploads/csv/img.png'))) {
                File::delete(public_path('uploads/csv/img.png'));
            }
            if (request()->hasFile('floor_plan')) {
                $floor_plan = request()->file('floor_plan');
                $fileName2 = $imagefloorplan;
                $floor_plan->move('property', $fileName2);
            }

        } else {
            $imagefloorplan = $property->floor_plan;
        }

        $property->title = $request->title;
        $property->slug = $slug;
        $property->price = $request->price;
        $property->purpose = $request->purpose;
        $property->type = $request->type;
        $property->image = $imagename;
        $property->bedroom = $request->bedroom;
        $property->bathroom = $request->bathroom;
        $property->city = $request->city;
        $property->city_slug = str_slug($request->city);
        $property->address = $request->address;
        $property->area = $request->area;

        if (isset($request->featured)) {
            $property->featured = true;
        } else {
            $property->featured = false;
        }

        $property->description = $request->description;
        $property->video = $request->video;
        $property->floor_plan = $imagefloorplan;
        $property->location_latitude = $request->location_latitude;
        $property->location_longitude = $request->location_longitude;
        $property->nearby = $request->nearby;
        $property->save();

        $property->features()->sync($request->features);

        $gallary = $request->file('gallaryimage');
        if ($gallary) {
            foreach ($gallary as $images) {
                if (isset($images)) {
                    $currentDate = Carbon::now()->toDateString();
                    $name= 'gallary-' . $currentDate . '-' . uniqid() . '.' . $images->getClientOriginalExtension();
                    $galimage['name'] = 'gallary-' . $currentDate . '-' . uniqid() . '.' . $images->getClientOriginalExtension();
                    $galimage['size'] = null;
                    $galimage['property_id'] = $property->id;

                    $images->move('property/gallery/', $name);
                    $property->gallery()->create($galimage);
                }
            }
        }

        Toastr::success('message', 'Property updated successfully.');
        return redirect()->route('admin.properties.index');
    }


    public function destroy(Property $property)
    {
        $property = Property::find($property->id);

        if (File::exists(public_path($property->floor_plan))) {
            File::delete(public_path($property->floor_plan));
        }

        $property->delete();

        $galleries = $property->gallery;
        if ($galleries) {
            foreach ($galleries as $key => $gallery) {
                if (File::exists(public_path($gallery->name))) {
                    File::delete(public_path($gallery->name));
                }
                PropertyImageGallery::destroy($gallery->id);
            }
        }

        $property->features()->detach();
        $property->comments()->delete();

        Toastr::success('message', 'Property deleted successfully.');
        return back();
    }


    public function galleryImageDelete(Request $request)
    {

        $gallaryimg = PropertyImageGallery::find($request->id)->delete();

        if (Storage::disk('public')->exists('property/gallery/' . $request->image)) {
            Storage::disk('public')->delete('property/gallery/' . $request->image);
        }
        if (File::exists(public_path($request->image))) {
            File::delete(public_path($request->image));
        }

        if ($request->ajax()) {

            return response()->json(['msg' => $gallaryimg]);
        }
    }

    // YOUTUBE LINK TO EMBED CODE
    private function convertYoutube($youtubelink, $w = 250, $h = 140)
    {
        return preg_replace(
            "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
            "<iframe width=\"$w\" height=\"$h\" src=\"//www.youtube.com/embed/$2\" frameborder=\"0\" allowfullscreen></iframe>",
            $youtubelink
        );
    }
}
