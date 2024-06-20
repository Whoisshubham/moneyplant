@extends('backend.layouts.app')

@section('title', 'Create Team')

@push('styles')
@endpush
@section('content')
    <div class="block-header">
        <a href="{{ route('admin.team.index') }}" class="waves-effect waves-light btn btn-danger right m-b-15">
            <i class="material-icons left">arrow_back</i>
            <span>BACK</span>
        </a>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-indigo">
                    <h2>CREATE TEAM</h2>
                </div>
                <div class="body">
                    <form action="{{route('admin.team.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div style="margin-bottom:10px ">
                            <label for="star">Team Group</label>
                            <select name="team" id="team" class="form-control">
                                <option selected value="">Select Team</option>
                                @foreach ($teamCategorieList as $item)
                                    <option value="{{ $item->id ?? null }}">{{ $item->name ?? null }}</option>
                                @endforeach 
                            </select>
                        </div>
                        <div class="form-group form-float mt-t">
                            <div class="form-line">
                                <input type="text" name="name" class="form-control">
                                <label class="form-label">Name <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="card">
                            <div class="body">
                                <label class="form-label">Image<span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input id="testimonial-image-input" type="file" name="image">
                                    <img src="" id="testimonial-imgsrc" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-float mt-t">
                            <div class="form-line">
                                <input type="text" name="designation" class="form-control">
                                <label class="form-label">Designation <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                
                                    <label for="tinymce">Description <span class="text-danger">*</span></label>
                                    <textarea name="description" id="tinymce">{{old('description')}}</textarea>
                                
                           </div>
                        </div>
                        <div class="form-group form-float mt-t">
                            <div class="form-line">
                                <input type="text" name="email" class="form-control">
                                <label class="form-label">Mail <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group form-float mt-t">
                            <div class="form-line">
                                <input type="number" name="call" class="form-control">
                                <label class="form-label">Call <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group form-float mt-t">
                            <div class="form-line">
                                <input type="number" name="whatsapp" class="form-control">
                                <label class="form-label">Whats App <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group form-float mt-t">
                            <div class="form-line">
                                <input type="text" name="language" class="form-control">
                                <label class="form-label">Languages <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group form-float mt-t">
                            <div class="form-line">
                                <input type="number" name="listing_properties" class="form-control">
                                <label class="form-label">Listing Properties <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group form-float mt-t">
                            <div class="form-line">
                                <input type="text" name="linked" class="form-control">
                                <label class="form-label">Linked In URL <span class="text-danger">*</span></label>
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

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js"></script>

    <script src="{{asset('backend/plugins/tinymce/tinymce.js')}}"></script>
    <script>
        $(function () {
            $("#input-id").fileinput();
        });

        $(function () {
            tinymce.init({
                selector: "textarea#tinymce",
                theme: "modern",
                height: 300,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons',
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{asset('backend/plugins/tinymce')}}';
        });

        $(function () {
            tinymce.init({
                selector: "textarea#tinymce-nearby",
                theme: "modern",
                height: 300,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: '',
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{asset('backend/plugins/tinymce')}}';
        });
 

        </script>

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
