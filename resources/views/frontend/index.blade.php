@extends('frontend.layouts.app')
@section('content')
    @if ($sliders !== null)
        <section class="video_section">
            <div class="main-banner" id="top">

                <video autoplay="" loop="" id="bg-video" muted="" playsinline="">
                    <source src="{{ $sliders->video ?? null }}" type="video/mp4">
                </video>
                <div class="banner-with-text">
                    <h1 class="banner-heading">{{ $sliders->title ?? null }}</h1>
                    <h3 class="banner-text">{{ $sliders->description ?? null }}</h3>
                    <div class="GetStartEdBtn mt-4">
                        <a href="./test.php" class="btn btn-customClor">Get Started Now</a>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <section class="BuyAgentsSection">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="value-prop_container text-center">
                        <div data-w-id="531d8581-15c0-c8e3-2068-0ff98f490e5a">

                            <div class="cta-heading_wrapper mt-4">
                                <h2 class="dub-h2-title">Our Buying Agents</h2>
                            </div>
                            <div class="cta-heading_wrapper text-center">
                                <p class="value-prop-paragraph">Provide you with expert and impartial advice to secure
                                    the best property for the best terms
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="Recent_homesSection">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="">
                        <h2 class="dub-h2-title">Recent homes we’ve helped clients buy</h2>
                    </div>
                </div>
            </div>
            @if (count($properties) > 0)
                <div class="row mt-5">
                    @foreach ($properties as $iteams)      
                        <div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="3000">
                            <div class="card">
                                <div class="FeatureIMg">
                                    <img src="{{asset($iteams->image)}}"
                                        class="card-img-top" alt="...">
                                    <div class="priceBox">
                                        <p>{{$iteams->price ?? null}}</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="rentDiv">
                                        <h5>{{$iteams->title ?? null}}</h5>
                                        <p>{{$iteams->address ?? null}},{{$iteams->city ?? null}}</p>
                                    </div>
                                    <div class="Cardfeature">
                                        <div class="badIcon IconColorOne">
                                            <!-- <i class="fa-solid fa-bed"></i> -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23"
                                                viewBox="0 0 22 23" fill="none">
                                                <script xmlns="">
                                                    window._wordtune_extension_installed = true;
                                                </script>
                                                <g clip-path="url(#clip0_1171_883)">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M17.6734 9.12021V3.25H16.5V5.08333H4.84001V3.25H3.66668V9.12028L3.50274 9.21575C2.50655 9.79584 1.83334 10.8597 1.83334 12.0867V15.7534C1.83334 16.0778 2.09605 16.34 2.42001 16.34H3.66668V20.0067H4.84001V16.34H16.5V20.0067H17.6734V16.34H18.92C19.2447 16.34 19.5067 16.078 19.5067 15.7534V12.0867C19.5067 10.8599 18.8327 9.79594 17.8372 9.21569L17.6734 9.12021ZM16.5 6.25667V8.75H11.2567V6.25667H16.5ZM4.84001 6.25667H10.0833V8.75H4.84001V6.25667ZM18.3334 15.1667H3.00668V12.0867C3.00668 10.8934 3.97667 9.92335 5.17001 9.92335H16.17C17.3634 9.92335 18.3334 10.8934 18.3334 12.0867V15.1667Z"
                                                        fill="#1f663a" stroke="#1f663a" stroke-width="0.5" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1171_883">
                                                        <rect width="22" height="22" fill="white"
                                                            transform="translate(0 0.5)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span>{{$iteams->bedroom ?? null}} Bedroom</span>
                                        </div>
                                        <div class="bathIcon IconColorOne">
                                            <!-- <i class="fa-solid fa-bath"></i> -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                viewBox="0 0 22 22" fill="none">
                                                <script xmlns="">
                                                    window._wordtune_extension_installed = true;
                                                </script>
                                                <g clip-path="url(#clip0_1171_879)">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M5.77386 9.12693V6.18599C5.77386 5.04654 6.70689 4.12035 7.85477 4.12035C8.89473 4.12035 9.75835 4.88059 9.91154 5.87089H11.0487C10.8889 4.26143 9.51748 3 7.85477 3C6.08495 3 4.64523 4.42916 4.64523 6.18599V9.12693H2.56431C2.25202 9.12693 2 9.37708 2 9.6871V11.4376C2 13.5801 3.38646 15.4051 5.31588 16.086L5.52697 16.1605V19H6.6556V16.3742H14.3444V19H15.473V16.1605L15.6841 16.086C17.6135 15.4051 19 13.5801 19 11.4376V9.6871C19 9.37708 18.748 9.12693 18.4357 9.12693H5.77386ZM3.12863 10.2473H17.8714V11.4376C17.8714 13.5425 16.1474 15.2538 14.027 15.2538H6.97303C4.85259 15.2538 3.12863 13.5425 3.12863 11.4376V10.2473Z"
                                                        fill="#1f663a" stroke="#1f663a" stroke-width="0.5" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1171_879">
                                                        <rect width="22" height="22" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span>{{$iteams->bathroom ?? null}} Bathroom</span>
                                        </div>
                                        <div class="SqfeetIcon IconColorOne">
                                            <!-- <i class="fa-solid fa-house"></i> -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23"
                                                viewBox="0 0 22 23" fill="none">
                                                <script xmlns="">
                                                    window._wordtune_extension_installed = true;
                                                </script>
                                                <g clip-path="url(#clip0_1171_875)">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M17.6685 18.6667H4.17333V5.17333H17.6666L17.6685 18.6667ZM3 5.50333V18.3367C3 19.1655 3.6745 19.84 4.50333 19.84H17.3367C18.1655 19.84 18.84 19.1655 18.84 18.3367V5.50333C18.84 4.6745 18.1655 4 17.3367 4H4.50333C3.6745 4 3 4.6745 3 5.50333Z"
                                                        fill="#1f663a" stroke="#1f663a" stroke-width="0.5" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M13.9986 8.8402V11.5902H15.1719V7.66687H11.2486V8.8402H13.9986ZM7.83856 15.0002V12.2502H6.66522V16.1735H10.5886V15.0002H7.83856Z"
                                                        fill="#1f663a" stroke="#1f663a" stroke-width="0.5" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1171_875">
                                                        <rect width="22" height="22" fill="white"
                                                            transform="matrix(-1 0 0 1 22 0.5)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span>{{$iteams->area ?? null}} Sq ft.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
    <section class="marketPropertiesSection">
        <div class="container">
            <div class="row  overflow-hidden">
                <div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-right">
                    <div class="ImgBoxOne">
                        <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/7b2de532-f501-42d5-a77d-8b6ce1a9f000/public"
                            alt="imgpro" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 paddingLeft" data-aos="fade-left">
                    <div class="marketingProContent">
                        <div class="contentHeading">
                            <h2 class="dub-h2-title text-start">
                                Gain An Advantage by Obtaining Privileges on Off-Market Properties
                            </h2>
                        </div>
                        <div class="contentPara mt-4">
                            <p>Your buying agent possesses connections with seller agents who can provide access to
                                properties that are not publicly listed.
                            </p>
                        </div>
                        <div class="GetStartEdBtn mt-4">
                            <a href="./test.php" class="btn btn-customClor">Get Started Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="marketPropertiesSection">
        <div class="container">
            <div class="row overflow-hidden">
                <div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-right">
                    <div class="marketingProContent">
                        <div class="contentHeading">
                            <h2 class="dub-h2-title text-start">
                                Your Dedicated Property Specialist
                            </h2>
                        </div>
                        <div class="contentPara mt-4">
                            <p>Unlike other agents, your buying agent exclusively focuses on assisting buyers. This
                                means you have a trusted advisor who's solely dedicated to your interests.
                            </p>
                        </div>
                        <div class="lisitBox mt-5">
                            <ul>
                                <li> <i class="fa-solid fa-location-dot"></i> Get properties from across the market</li>
                                <li> <i class="fa-solid fa-arrows-to-eye"></i>Property evaluation and appraisal</li>
                                <li> <i class="fa-solid fa-money-bill-wave"></i>Negotiate a favourable price for your
                                </li>
                            </ul>
                        </div>
                        <div class="GetStartEdBtn mt-5">
                            <a href="./test.php" class="btn btn-customClor">Get Started Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 resposMarginTop" data-aos="fade-left">
                    <div class="ImgBoxOne">
                        <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/507e97d1-dc0c-4b9a-3334-4ce6cbeb5200/public"
                            alt="imgpro" />
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="marketPropertiesSection">
        <div class="container">
            <div class="row overflow-hidden">
                <div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-right">
                    <div class="ImgBoxOne">
                        <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/309ffad6-381b-4b6c-5d05-1da0318f7b00/public"
                            alt="imgpro" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 paddingLeft" data-aos="fade-left">
                    <div class="marketingProContent">
                        <div class="contentHeading">
                            <h2 class="dub-h2-title text-start">
                                Get Concierge Service from Start to Finish
                            </h2>
                        </div>
                        <div class="contentPara mt-4">
                            <p>Buying a home in Dubai itself is a challenging task, and we understand this. So to make
                                your journey smooth, our buying agent stays with you until you get the keys to your
                                place.
                            </p>
                        </div>
                        <div class="lisitBox mt-5">
                            <ul>
                                <li> <i class="bi bi-asterisk"></i>Your interaction is only a single point of contact
                                </li>
                                <li> <i class="bi bi-calendar"></i> On your behalf, schedule all the views</li>
                                <li> <i class="bi bi-chat-left-fill"></i> Provide the best guidance and advice</li>
                            </ul>
                        </div>
                        <div class="GetStartEdBtn mt-5">
                            <a href="./test.php" class="btn btn-customClor">Get Started Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="TeamSection banner-section-text " style="position: relative;">
        <div class=" over-layer-color"></div>
        <div class="container" style="z-index: 99;">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-9" data-aos="zoom-in">
                    <div class="banner-content">
                        <p>Who’s behind Money Plant?</p>
                        <h2>We work hard to take our clients on a hassle-free and successful property journey.</h2>
                        <div class="GetStartEdBtn mt-5">
                            <a href="./about.php" class="btn btn-customClor">Meet the team</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonilaSection">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="value-prop_container text-center">
                        <div data-w-id="531d8581-15c0-c8e3-2068-0ff98f490e5a">

                            <div class="cta-heading_wrapper mt-4">
                                <h2 class="dub-h2-title">Feedback from Our clients </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-5" style="position: relative;">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($feedbacks as $feedback)
                                <div class="swiper-slide">
                                    <div class="tesContent">
                                        <p>{{ $feedback->message ?? null }}
                                        </p>
                                    </div>
                                    <div class="profileContant  d-flex  justify-content-between">
                                        <div class="name">
                                            <p>{{ $feedback->name ?? null }}</p>
                                        </div>
                                        <div class="startIconBox   d-inline-flex justify-content-lg-between ">
                                            @switch($feedback->star)
                                                @case($feedback->star == 1)
                                                    <i class="bi bi-star-fill me-2"></i>
                                                @break

                                                @case($feedback->star == 2)
                                                    <i class="bi bi-star-fill me-2"></i>
                                                    <i class="bi bi-star-fill me-2"></i>
                                                @break

                                                @case($feedback->star == 3)
                                                    <i class="bi bi-star-fill me-2"></i>
                                                    <i class="bi bi-star-fill me-2"></i>
                                                    <i class="bi bi-star-fill me-2"></i>
                                                @break

                                                @case($feedback->star == 4)
                                                    <i class="bi bi-star-fill me-2"></i>
                                                    <i class="bi bi-star-fill me-2"></i>
                                                    <i class="bi bi-star-fill me-2"></i>
                                                    <i class="bi bi-star-fill me-2"></i>
                                                @break

                                                @case($feedback->star == 5)
                                                    <i class="bi bi-star-fill me-2"></i>
                                                    <i class="bi bi-star-fill me-2"></i>
                                                    <i class="bi bi-star-fill me-2"></i>
                                                    <i class="bi bi-star-fill me-2"></i>
                                                    <i class="bi bi-star-fill me-2"></i>
                                                @break
                                            @endswitch


                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                    <div class="nextBtn">
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="prevBtn">
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--map start-->
    {{-- <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB9CZVWWp0GbxrqhelPp-IWWjSW-Bce9Dk">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">
</script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
</script> --}}
    {{-- <script type="text/javascript">
   var map;
   var Markers = {};
   var infowindow;
   var locations = [
   
       [
           'AMC Service',
           '<a href="https://maps.app.goo.gl/1DCEhzzZDB4kR8Bh8">Price AED 3000</a><p>Money Plant</p>',
           25.100533,
           55.311179,
           0
       ],
       [
           'AMC Service',
           '<p><a href="https://maps.app.goo.gl/1DCEhzzZDB4kR8Bh8">Price AED 9000</a></p>',
           24.93378,
           55.17660,
           0
       ],
       [
           'AMC Service',
           '<p><a href="https://maps.app.goo.gl/1DCEhzzZDB4kR8Bh8">Price AED 4000</a></p>',
           25.08437,
           55.60506,
           0
       ],
       [
           'AMC Service',
           '<p><a href="https://maps.app.goo.gl/1DCEhzzZDB4kR8Bh8">Price AED 7000</a></p>',
           24.91510,
           55.28783,
           0
       ],
       [
           'AMC Service',
           '<p><a href="https://maps.app.goo.gl/1DCEhzzZDB4kR8Bh8">Price AED 5000</a></p>',
           24.92755,
           55.14089,
           0
       ],
   ];
   var origin = new google.maps.LatLng(locations[0][2], locations[0][3]);
   
   function initialize() {
       var mapOptions = {
           zoom: 9,
           center: origin
       };
   
       map = new google.maps.Map(document.getElementById('mapView'), mapOptions);
   
       infowindow = new google.maps.InfoWindow();
   
       for (i = 0; i < locations.length; i++) {
           var position = new google.maps.LatLng(locations[i][2], locations[i][3]);
           var marker = new google.maps.Marker({
               position: position,
               map: map,
           });
           google.maps.event.addListener(marker, 'click', (function(marker, i) {
               return function() {
                   infowindow.setContent(locations[i][1]);
                   infowindow.setOptions({
                       maxWidth: 200
                   });
                   infowindow.open(map, marker);
               }
           })(marker, i));
           Markers[locations[i][4]] = marker;
       }
   
       locate(0);
   
   }
   
   function locate(marker_id) {
       var myMarker = Markers[marker_id];
       var markerPosition = myMarker.getPosition();
       map.setCenter(markerPosition);
       google.maps.event.trigger(myMarker, 'click');
   }
   
   google.maps.event.addDomListener(window, 'load', initialize);
</script>  --}}
    {{-- 
<div class="container mb-4" style="width: 100%"><iframe width="100%" height="450px" loading="lazy" frameborder="0"
   scrolling="no" marginheight="0" marginwidth="0"
   src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
   href="https://www.maps.ie/population/">Find Population on Map</a></iframe></div>
--}}
    <!--{{-- End map loading --}}-->{{-- 
<section class="mapsSection">
   <div class="mapsBox">
      <div style="height:550px;" id="mapView">
      </div>
   </div>
</section>
--}}
@endsection
