@extends('backend.layouts.app')

@section('title', 'Edit Testimonial')

@push('styles')
@endpush


@section('content')

    <div class="block-header">
        <a href="{{ route('admin.testimonials.index') }}" class="waves-effect waves-light btn btn-danger right m-b-15">
            <i class="material-icons left">arrow_back</i>
            <span>BACK</span>
        </a>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-indigo">
                    <h2>EDIT TESTIMONIAL</h2>
                </div>
                <div class="body">
                    <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div style="margin-bottom:10px ">
                            <label for="star">Give Star</label>
                            <select name="star" id="star" class="form-control">
                                <option {{ $testimonial->star == "1" ? 'selected' : " " }} value="1">1</option>
                                <option {{ $testimonial->star == "2" ? 'selected' : " " }} value="2">2</option>
                                <option {{ $testimonial->star == "3" ? 'selected' : " " }} value="3">3</option>
                                <option {{ $testimonial->star == "4" ? 'selected' : " " }} value="4">4</option>
                                <option {{ $testimonial->star == "5" ? 'selected' : " " }} value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group form-float">
                            <label class="form-label">Name</label>
                            <div class="form-line">
                                <input type="text" name="name" class="form-control" value="{{ $testimonial->name }}">
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="form-label">Message</label>
                            <div class="form-line">
                                <textarea name="message" rows="4" class="form-control no-resize">{{ $testimonial->message }}</textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-indigo btn-lg m-t-15 waves-effect">
                            <i class="material-icons">update</i>
                            <span>Update</span>
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
