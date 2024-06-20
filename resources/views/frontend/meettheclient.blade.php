@extends('frontend.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('frontend/assests/css/meet-the-team.css') }}">
    <style>
        .form-control:focus {
            color: var(--bs-body-color);
            background-color: var(--bs-body-bg);
            /* border-color: #86b7fe; */
            outline: 0;
            box-shadow: none;
        }

        .GridSection {
            display: grid;
            grid-template-columns: auto auto auto auto;
            gap: 20px;
            overflow: hidden;
        }

        .profileSectionBox {
            display: grid;
            grid-template-columns: auto auto auto auto;
            gap: 20px;
        }

        .profileSectionBoxOne {
            display: flex;
            gap: 20px;
            justify-content: start;
        }

        .profileSectionBoxTwo {
            display: grid;
            grid-template-columns: auto auto auto auto;
            gap: 20px;
        }

        .SameGrid {
            display: contents;
        }
    </style>

    <Section class="MeetTeamSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="MeetTeamContent">
                        <!-- <h1>Get ahead with exclusive</h1> -->
                    </div>
                </div>
            </div>
        </div>
    </Section>
    <Section class="MeetPropertySection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="meetingheading">
                        <h1>Meet Your Property Experts</h1>
                    </div>
                    <div class="meetThePara">
                        <p>
                            We value honesty, transparency, and clarity in our approach with
                            clients, developers, and everyone else that we work with because
                            we are passionate about offering a service that takes away all
                            the hassle from our clients and helps them enjoy the incredible
                            lifestyle that Dubai has to offer. Come and meet the team.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </Section>
    <section class="MeetTheTeamTabSection">
        <div class="container">
            <div class="row pb-4 CusTumBorder mb-5">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <form action="#">
                        <div class="SearchBar">
                            <i class="bi bi-search"></i>
                            <input type="text" id="combinedSearch" class="search-input form-control"
                                placeholder="Search by Name or Position" onkeyup="performSearch()" />
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        @foreach ($teamCategorieList as $key => $categorie)
                            <li class="nav-item tabItem" role="presentation">
                                <button class="nav-link btn Btns @if ($key == 0) active @endif "
                                    id="pills-home-{{ $key }}" data-bs-toggle="pill"
                                    data-bs-target="#pills-home{{ $key }}" type="button" role="tab"
                                    aria-controls="pills-home{{ $key }}" aria-selected="true">
                                    {{ $categorie->name }}
                                </button>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="pills-tabContent">
                        @foreach ($teamCategorieList as $key => $categorie)
                            <div class="tab-pane fade @if ($key == 0) show active @endif"
                                id="pills-home{{ $key }}" role="tabpanel"
                                aria-labelledby="pills-home-{{ $key }}" tabindex="{{ $key }}">
                                <div class="profileSectionBoxOne">
                                    @foreach ($categorie->teamList as $teams)
                                        <div class="filterOneDiv directors" data-position="{{ $categorie->name }}">
                                            <div class="cardTeam teamImg">
                                                <a href="{{ url('meet-the-team-details', [$teams->slug]) }}"
                                                    class="TeamHoverImg" target="_blank" rel="noopener noreferrer">
                                                    <img src="{{ $teams->image }}" class="img-fluid" alt="ImgTeam" />
                                                </a>
                                                <div class="card-body teamCard_body">
                                                    <a href="{{ url('meet-the-team-details', [$teams->slug]) }}"
                                                        target="_blank" rel="noopener noreferrer"
                                                        class="text-decoration-none">
                                                        <h5 class="card-title">{{ $teams->name ?? null }}</h5>
                                                    </a>
                                                    <a href="{{ url('meet-the-team-details', [$teams->slug]) }}"
                                                        target="_blank" rel="noopener noreferrer"
                                                        class="text-decoration-none">
                                                        <p class="card-text fs-sm-6">{{ $teams->designation ?? null }}</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection
