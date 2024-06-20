@extends('frontend.layouts.app')
@section('content')
    
<!-- Banner css start  -->

<div class="aboutSection">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="aboutContent">

                  <!-- <h1>Get ahead with exclusive</h1> -->

              </div>

            </div>

        </div>

    </div>

</div>

<!-- Banner css end  -->



<!-- Our Story start css -->



<div class="aboutStory">

    <div class="container">

        <div class="row">

            <div class="col-lg-8 d-flex align-items-center">

                <div class="aboutStoryContent">

                    <h2 class="aboutHeading">Introduction</h2>

                    <p>Dreams can come true with proper planning and execution. Self-owned property can be hard to get when the issue comes down to budget. But now, don't just let those precious dreams slip out of your hands. Money Plant is bringing you closer to your dream property hassle-free.</p>
                    <p>We will cover precisely what Money Plant is and why you should choose us as your ladder to your bigger dream.</p>

                </div>


            </div>

            <div class="col-lg-4 d-flex align-items-center">
                <div class="AboutImgBox">
                      <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/5b1289b3-bdea-4e95-7e4d-b592cc6d1a00/public" class="" alt="about-img">

                </div>


            </div>

        </div>

        <div class="row mt-4">
              <div class="col-lg-4 d-flex align-items-center">
                <div class="AboutImgBox">
                      <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/a4ad611d-2564-4e02-21b7-0b8da553d800/public" class="" alt="about-img">

                </div>


            </div>

            <div class="col-lg-8 d-flex align-items-center">

                 <div class="aboutStoryContent ">

                    <h2 class="aboutHeading">What is Money Plant?</h2>
                    <p>Money Plant Real Estate Brokerage LLC is a unique real estate company in the UAE. We provide comprehensive solutions and unbiased advice for property purchases. With a customer-centric approach, Money Plant prioritises understanding customers' requirements and tailoring their offerings accordingly. They strive to design products that facilitate easy payments and ensure future capital appreciation.</p>

                </div>

            </div>



        </div>

        <div class="row mt-4">

            <div class="col-lg-8 d-flex align-items-center">

                <div class="aboutStoryContent ">

                    <h2 class="aboutHeading">Why choose Money Plant?</h2>
                    <p>Money Plant has a remarkable track record in rental services, currently managing 289 properties. This expertise in property management demonstrates their commitment to providing reliable and efficient rental solutions.</p>
                    <p>By combining their extensive knowledge of the real estate market with a focus on customer satisfaction, Money Plant aims to be a trusted partner for individuals seeking real estate solutions in the UAE.</p>

                </div>

            </div>

            <div class="col-lg-4 d-flex align-items-center">
                <div class="AboutImgBox">
                    <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/5af210e7-2c5f-40be-76be-6128d83d3100/public" class="" alt="about-img">

                </div>


            </div>

        </div>

        <div class="row mt-4">
              <div class="col-lg-4 d-flex align-items-center">

              <div class="AboutImgBox">
                    <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/5ecb27eb-f826-4958-53e2-aaae41953200/public" class="" alt="about-img">

                </div>


            </div>

            <div class="col-lg-8 d-flex align-items-center">

                <div class="aboutStoryContent ">
                    <h2 class="aboutHeading">How do I join Money Plant?</h2>
                    <p>Joining Money Plant is not a hard task. You just need to take a small step, and that is to send us your resume at info@moneyplant.ae. We always welcome talented individuals who are ready to make their dreams come true. Start your success journey with this small step.</p>
                </div>

            </div>



        </div>

         <div class="row mt-4">

            <div class="col-lg-12 d-flex align-items-center">

                <div class="aboutStoryContent ">
                    <h2 class="aboutHeading">Conclusion</h2>
                    <p>Your property dreams are now just a step away from your fingertips. We warmly welcome you on board with us. We will feel blessed to have the opportunity to convert your dreams into reality. Never let your property dreams die. Let them live longer with the assistance of Money Plant.</p>
                </div>

            </div>

            <!-- <div class="col-lg-4">

                <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/5b1289b3-bdea-4e95-7e4d-b592cc6d1a00/public" class="" alt="about-img">

            </div> -->

        </div>

    </div>

</div>

<!-- Our Story end css -->



<!-- Our Mission start -->

<div class="aboutOurMission">

    <div class="container">

        <div class="row">

            <div class="col-lg-6">
               <div class="card">
                <div class="aboutMissionBox">

                    <h4>Mission</h4>

                    <p>At Money Plant, our mission is to provide reliable solutions to purchase property. Our team of experts is committed to providing the best possible services to our clients, and they work hard to ensure that all our clients are satisfied with our services. We look forward to helping you make your dream a reality.</p>

                </div>
              </div>

            </div>

            <div class="col-lg-6">
              <div class="card">
                <div class="aboutMissionBox aboutVisionBox">

                    <h4>Vision</h4>

                    <p>Our aim is to establish standards and bring a revolution in the real estate industry. We want to introduce perspectives, industry-leading approaches, and transformative solutions to the company. We strive to make an environment where everyone is empowered to create meaningful impact. We are committed to creating a better future for everyone.</p>

                </div>
              </div>

            </div>

        </div>

    </div>

</div>



<!-- Our Mission end -->



<!-- Our Team Section Start -->



<div class="aboutSectionTeam">

    <div class="container">

        <div class="row">

            @if (count($teamList)>0)
                
           @foreach ($teamList as $team)
               
          
             <!-- Team  -->

                <div class="col-md-4 col-sm-6 team-wrap">

                    <div class="team-member text-center">

                        <div class="team-img leaders">

                            <img src="{{asset($team->image ?? null)}}" width="100%" alt="">

                            <div class="overlay">

                                <div class="team-details text-center">

                                    <h5 class="team-detail-h"></h5>

                                    <div class="socials mt-20">

                                        <a href="mailto:{{$team->email ?? null}}"><i class="fa fa-envelope"></i></a>

                                        <a href="{{$team->linkedin ?? null}}"><i class="fa fa-linkedin"></i></a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <a href="#"><h6 class="team-title">{{$team->name ?? null}}</h6></a>

                        <span class="team-designation">{{$team->designation ?? null}} </span>

                    </div>

                    <a href="{{url('about',[$team->slug])}}" class="team-btn">View More</a>

                </div>

             <!-- Team  -->
             @endforeach
             @endif

             {{-- <!-- Team 2 -->

             <div class="col-md-4 col-sm-6 team-wrap">

                <div class="team-member text-center">

                    <div class="team-img leaders">

                        <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/fb7a5f8c-932b-46a6-bb8b-87923568d400/public" width="100%" alt="">

                        <div class="overlay">

                            <div class="team-details text-center">

                                <h5 class="team-detail-h"></h5>

                                <div class="socials mt-20">

                                    <a href="#"><i class="fa fa-envelope"></i></a>

                                    <a href="https://www.linkedin.com/in/mohit-puri-27354321/"><i class="fa fa-linkedin"></i></a>

                                </div>

                            </div>

                        </div>

                    </div>

                    <a href="#"><h6 class="team-title">Mohit Puri</h6></a>

                    <span class="team-designation">Founder And Managing Partner</span>

                </div>

                <a href="./team02.php" class="team-btn">View More</a>

            </div>

         <!-- Team 2 -->



         <!-- Team 3 -->

         <div class="col-md-4 col-sm-6 team-wrap">

            <div class="team-member text-center">

                <div class="team-img leaders">

                    <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/cb3d42b0-c92a-4c10-4089-7f5bc9b32b00/public" width="100%" alt="">

                    <div class="overlay">

                        <div class="team-details text-center">

                            <h5 class="team-detail-h"></h5>

                            <div class="socials mt-20">

                                <a href="#"><i class="fa fa-envelope"></i></a>

                                <a href="https://www.linkedin.com/in/akshay-nagdev-11464523b/"><i class="fa fa-linkedin"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <a href="#"><h6 class="team-title">Akshay Nagdev</h6></a>

                <span class="team-designation">Founder And Managing Partner</span>

            </div>

            <a href="./team03.php" class="team-btn">View More</a>

        </div>

        <!-- Team 3 --> --}}



        </div>

    </div>

</div>




@endsection