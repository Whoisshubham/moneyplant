@extends('backend.layouts.app')

@section('title', 'Create Testimonial')

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
                    <h2>CREATE FEEDBACK</h2>
                </div>
                <div class="body">
                    <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div style="margin-bottom:10px ">
                            <label for="star">Give Star</label>
                            <select name="star" id="star" class="form-control">
                                <option selected value="">Select One</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group form-float mt-t">
                            <div class="form-line">
                                <input type="text" name="name" class="form-control">
                                <label class="form-label">Name</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-line">
                                <textarea name="message" rows="4" class="form-control no-resize"></textarea>
                                <label class="form-label">FEEDBACK</label>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-indigo btn-lg m-t-15 waves-effect">
                            <i class="material-icons">save</i>
                            <span>SAVE</span>
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')
    <script>
        $(function() {
            function showImage(fileInput, imgID) {
                if (fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $(imgID).attr('src', e.target.result);
                        $(imgID).attr('alt', fileInput.files[0].name);
                    }
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
            $('#testimonial-image-btn').on('click', function() {
                $('#testimonial-image-input').click();
            });
            $('#testimonial-image-input').on('change', function() {
                showImage(this, '#testimonial-imgsrc');
            });
        })
    </script>
@endpush
