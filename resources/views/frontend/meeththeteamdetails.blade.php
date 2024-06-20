@extends('frontend.layouts.app')
@section('content')
 <Section class="meatTheTEamDetail">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="MeetTeamContentDetailImgG">
                        <figure>
                            <img src="{{url($teamdata->image ?? null)}}"
                                class="card-img-top" alt="ImgTeam" />
                        </figure>
                    </div>
                </div>

                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="MeetTeamContentDetailText">
                        <div class="NameDetails mb-4">
                            <h1>{{$teamdata->name ?? null}}</h1>
                            <p class="positionPara">{{$teamdata->designation ?? null}}</p>
                        </div>

                        <div class="SocailMediaSection">
                            <div class="EmailBox socailBox">
                                <a href="mailto:{{$teamdata->email ?? null}}" class="">
                                    <i class="bi bi-envelope me-2"></i>
                                    <span>EMAIL</span>
                                </a>
                            </div>
                            <div class="callBox socailBox">
                                <a href="tel:{{$teamdata->call ?? null}}">
                                    <i class="bi bi-telephone me-2"></i>
                                    <span>CALL</span>
                                </a>
                            </div>
                            <div class="WhatAppBox socailBox">
                                <a href="tel:+{{$teamdata->whatsapp ?? null}}">
                                    <i class="bi bi-whatsapp me-2"></i>
                                    <span>WHATSAPP</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="MeetLanguage mt-4">
                        <p class="lang mt-2">
                            <strong>Languages Spoken :</strong>
                            <span class="spanOne">{{$teamdata->language ?? null}}</span>
                        </p>
                        <p class="lang mt-2">
                            <strong>Active Listings :</strong>
                            <span class="text-danger spanTwo">{{$teamdata->listing_properties ?? null}} Sale Properties</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </Section>
@endsection
