@extends('frontend.layouts.app')
@section('content')
    <Section class="meatTheTEamDetail">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="MeetTeamContentDetailImgG">
                        <figure>
                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/fb7a5f8c-932b-46a6-bb8b-87923568d400/public"
                                class="card-img-top" alt="ImgTeam" />
                        </figure>
                    </div>
                </div>

                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="MeetTeamContentDetailText">
                        <div class="NameDetails mb-4">
                            <h1>Mohit Puri</h1>
                            <p class="positionPara">Managing Director</p>
                        </div>

                        <div class="SocailMediaSection">
                            <div class="EmailBox socailBox">
                                <a href="mailto:" class="">
                                    <i class="bi bi-envelope me-2"></i>
                                    <span>EMAIL</span>
                                </a>
                            </div>
                            <div class="callBox socailBox">
                                <a href="tel:+">
                                    <i class="bi bi-telephone me-2"></i>
                                    <span>CALL</span>
                                </a>
                            </div>
                            <div class="WhatAppBox socailBox">
                                <a href="tel:+">
                                    <i class="bi bi-whatsapp me-2"></i>
                                    <span>WHATSAPP</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="MeetLanguage mt-4">
                        <p class="lang mt-2">
                            <strong>Languages Spoken :</strong>
                            <span class="spanOne">English</span>
                        </p>
                        <p class="lang mt-2">
                            <strong>Active Listings :</strong>
                            <span class="text-danger spanTwo">2 Sale Properties</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </Section>
@endsection
