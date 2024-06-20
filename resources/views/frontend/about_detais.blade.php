@extends('frontend.layouts.app')
@section('content')
    <!-- Banner css start  -->

    <div class="teamSection">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="teamContent">

                        <!--<h1>Employee Profile</h1>-->

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Banner css end  -->



    <!-- team details start -->

    <div class="aboutStory">

        <div class="container">

            <div class="row">

                <div class="col-lg-8">

                    <div class="aboutStoryContent contentStyle">

                        <h2>{{ $teamList->name ?? null }}</h2>

                        <h5 class="teamHeading"><i>{{ $teamList->designation ?? null }}</i> </h5>
                        {!! $teamList->description ?? null !!}

                    </div>

                    <div class="allButton">

                        <div class="GetStartEdBtn mt-4">

                            <a href="mailto:{{ $teamList->email ?? null }}" class="btn btn-customClor addStyle"><span
                                    class="iconButton"><i class="fa fa-envelope"></i></span> MAIL </a>

                        </div>

                        <div class="GetStartEdBtn mt-4">

                            <a href="{{ $teamList->linkedin ?? null }}" class="btn btn-customClor addStyle space"><span
                                    class="iconButton"><i class="fa fa-linkedin"></i></span> LINKEDIN </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 mt-4">

                    <div class="teamImage">

                        <img src="{{ asset($teamList->image ?? null) }}" class="img-fluid" alt="about-img">

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- team details end -->
@endsection
