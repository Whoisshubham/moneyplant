@extends('frontend.layouts.app')
@section('content')
    <style>
        .form-control:focus {
            color: var(--bs-body-color);
            background-color: var(--bs-body-bg);
            /* border-color: #86b7fe; */
            outline: 0;
            box-shadow: none;
        }
    </style>

    <Section class="PropertySearchSection">
        <div class="PropertySearchSectionBorder">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 responBoxOne">
                        <div class="propertySearchContent">
                            <div class="UpdateSection">
                                <div class="AreaInput">
                                    <i class="bi bi-geo-alt"></i>
                                    <input type="text" class="form-control" id=""
                                        placeholder="Area or Community" />
                                </div>
                                <div class="ForSaleSelect">
                                    <select class="form-select form-select-sm" aria-label="Small select example">
                                        <option selected>For Sale</option>
                                        <option value="For-Sale">For Sale</option>
                                        <option value="For-Sale">For rent</option>
                                    </select>
                                </div>
                                <div class="ForSaleSelect">
                                    <select class="form-select form-select-sm" aria-label="Small select example">
                                        <option value="">No Min</option>
                                        <option value="100000.00">AED 100,000</option>
                                        <option value="500000.00">AED 500,000</option>
                                        <option value="600000.00">AED 600,000</option>
                                        <option value="700000.00">AED 700,000</option>
                                        <option value="800000.00">AED 800,000</option>
                                        <option value="900000.00">AED 900,000</option>
                                        <option value="1000000.00">AED 1,000,000</option>
                                        <option value="1250000.00">AED 1,250,000</option>
                                        <option value="1500000.00">AED 1,500,000</option>
                                        <option value="1750000.00">AED 1,750,000</option>
                                        <option value="2000000.00">AED 2,000,000</option>
                                        <option value="2500000.00">AED 2,500,000</option>
                                        <option value="3000000.00">AED 3,000,000</option>
                                        <option value="3500000.00">AED 3,500,000</option>
                                        <option value="4000000.00">AED 4,000,000</option>
                                        <option value="5000000.00">AED 5,000,000</option>
                                        <option value="7500000.00">AED 7,500,000</option>
                                        <option value="10000000.00">AED 10,000,000</option>
                                    </select>
                                </div>
                                <div class="ForSaleSelect">
                                    <select class="form-select form-select-sm" aria-label="Small select example">
                                        <option selected>No Max</option>
                                        <option value="50000000.00">AED 50,000,000</option>
                                        <option value="25000000.00">AED 25,000,000</option>
                                        <option value="15000000.00">AED 15,000,000</option>
                                        <option value="10000000.00">AED 10,000,000</option>
                                        <option value="7500000.00">AED 7,500,000</option>
                                        <option value="5000000.00">AED 5,000,000</option>
                                        <option value="4000000.00">AED 4,000,000</option>
                                        <option value="3500000.00">AED 3,500,000</option>
                                        <option value="3000000.00">AED 3,000,000</option>
                                        <option value="2500000.00">AED 2,500,000</option>
                                        <option value="2000000.00">AED 2,000,000</option>
                                    </select>
                                </div>
                                <div class="ForSaleSelect">
                                    <select class="form-select form-select-sm" aria-label="Small select example">
                                        <option value="">Min Beds</option>
                                        <option value="studio">Studio</option>
                                        <option value="1">1+</option>
                                        <option value="2">2+</option>
                                        <option value="3">3+</option>
                                        <option value="4">4+</option>
                                        <option value="5">5+</option>
                                        <option value="6">6+</option>
                                        <option value="7">7+</option>
                                    </select>
                                </div>
                                <div class="ForSaleSelect">
                                    <select class="form-select form-select-sm" aria-label="Small select example">
                                        <option value="">Type</option>
                                        <option value="Villa">Villas</option>
                                        <option value="Apartment">Apartments</option>
                                        <option value="Townhouse">Townhouses</option>
                                        <option value="Penthouses">Penthouses</option>
                                        <option value="Duplex">Duplex</option>
                                        <option value="Warehouses">Warehouses</option>
                                        <option value="Land">Land</option>
                                    </select>
                                </div>
                                <div class="UpdateBtn">
                                    <div class="GetStartEdBtn">
                                        <a href="#" class="btn btn-customClorTWo">UPDATE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-3 responBoxTwo">
                        <div class="">
                            <div class="">
                                <div class="AreaInput border px-3">
                                    <i class="bi bi-geo-alt"></i>
                                    <input type="text" class="form-control" id=""
                                        placeholder="Area or Community" />
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 mb-3">
                            <div class="col-6">
                                <div class="filterBtn" onclick="toggleDiv()">
                                    <div class="UpdateBtn">
                                        <div class="GetStartEdBtn">
                                            <p class="btn btn-customClorTWo2 mb-0 d-flex align-items-center" id="button1"
                                                onclick="toggleButton(1)">
                                                <i class="bi bi-sliders2-vertical me-2"></i>
                                                FILTER
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="SearchBtn">
                                    <div class="UpdateBtn">
                                        <div class="GetStartEdBtn">
                                            <p class="btn btn-customClorTWo2 mb-0 d-flex align-items-center"
                                                onclick="toggleButton(2)" id="button2">
                                                <i class="bi bi-search me-2"></i>
                                                SEARCH
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="ShowBox">
                            <div class="col-12 mt-2">
                                <div class="ForSaleSelect">
                                    <select class="form-select form-select-sm" aria-label="Small select example">
                                        <option selected>For Sale</option>
                                        <option value="For-Sale">For Sale</option>
                                        <option value="For-Sale">For rent</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="ForSaleSelect">
                                    <select class="form-select form-select-sm" aria-label="Small select example">
                                        <option value="">No Min</option>
                                        <option value="100000.00">AED 100,000</option>
                                        <option value="500000.00">AED 500,000</option>
                                        <option value="600000.00">AED 600,000</option>
                                        <option value="700000.00">AED 700,000</option>
                                        <option value="800000.00">AED 800,000</option>
                                        <option value="900000.00">AED 900,000</option>
                                        <option value="1000000.00">AED 1,000,000</option>
                                        <option value="1250000.00">AED 1,250,000</option>
                                        <option value="1500000.00">AED 1,500,000</option>
                                        <option value="1750000.00">AED 1,750,000</option>
                                        <option value="2000000.00">AED 2,000,000</option>
                                        <option value="2500000.00">AED 2,500,000</option>
                                        <option value="3000000.00">AED 3,000,000</option>
                                        <option value="3500000.00">AED 3,500,000</option>
                                        <option value="4000000.00">AED 4,000,000</option>
                                        <option value="5000000.00">AED 5,000,000</option>
                                        <option value="7500000.00">AED 7,500,000</option>
                                        <option value="10000000.00">AED 10,000,000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="ForSaleSelect">
                                    <select class="form-select form-select-sm" aria-label="Small select example">
                                        <option selected>No Max</option>
                                        <option value="50000000.00">AED 50,000,000</option>
                                        <option value="25000000.00">AED 25,000,000</option>
                                        <option value="15000000.00">AED 15,000,000</option>
                                        <option value="10000000.00">AED 10,000,000</option>
                                        <option value="7500000.00">AED 7,500,000</option>
                                        <option value="5000000.00">AED 5,000,000</option>
                                        <option value="4000000.00">AED 4,000,000</option>
                                        <option value="3500000.00">AED 3,500,000</option>
                                        <option value="3000000.00">AED 3,000,000</option>
                                        <option value="2500000.00">AED 2,500,000</option>
                                        <option value="2000000.00">AED 2,000,000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="ForSaleSelect">
                                    <select class="form-select form-select-sm" aria-label="Small select example">
                                        <option value="">Min Beds</option>
                                        <option value="studio">Studio</option>
                                        <option value="1">1+</option>
                                        <option value="2">2+</option>
                                        <option value="3">3+</option>
                                        <option value="4">4+</option>
                                        <option value="5">5+</option>
                                        <option value="6">6+</option>
                                        <option value="7">7+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="ForSaleSelect">
                                    <select class="form-select form-select-sm" aria-label="Small select example">
                                        <option value="">Type</option>
                                        <option value="Villa">Villas</option>
                                        <option value="Apartment">Apartments</option>
                                        <option value="Townhouse">Townhouses</option>
                                        <option value="Penthouses">Penthouses</option>
                                        <option value="Duplex">Duplex</option>
                                        <option value="Warehouses">Warehouses</option>
                                        <option value="Land">Land</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="UpdateBtn">
                                    <div class="GetStartEdBtn">
                                        <a href="#" class="btn btn-customClorTWo">UPDATE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Section>
    <section class="popularSliderSection mt-3 mb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12">
                    <p class="mb-0 PPara">Popular:</p>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12 mt-3 mt-lg-0">
                    <!-- Swiper -->
                    <div class="swiper mySwiper pt-2 px-3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide popularSwiper">
                                <a href="javascript:;" id="popular_view" class="populer_filter">
                                    <i class="fa-regular fa-eye eye_icon me-2"></i>

                                    Property with a View <span> (983)</span>
                                </a>
                            </div>
                            <div class="swiper-slide popularSwiper">
                                <a href="javascript:;" id="popular_view" class="populer_filter">
                                    <i class="fa-regular fa-eye eye_icon me-2"></i>

                                    Property with a View <span> (983)</span>
                                </a>
                            </div>
                            <div class="swiper-slide popularSwiper">
                                <a href="javascript:;" id="popular_view" class="populer_filter">
                                    <i class="fa-regular fa-eye eye_icon me-2"></i>

                                    Property with a View <span> (983)</span>
                                </a>
                            </div>
                            <div class="swiper-slide popularSwiper">
                                <a href="javascript:;" id="popular_view" class="populer_filter">
                                    <i class="fa-regular fa-eye eye_icon me-2"></i>

                                    Property with a View <span> (983)</span>
                                </a>
                            </div>
                            <div class="swiper-slide popularSwiper">
                                <a href="javascript:;" id="popular_view" class="populer_filter">
                                    <i class="fa-regular fa-eye eye_icon me-2"></i>

                                    Property with a View <span> (983)</span>
                                </a>
                            </div>
                            <div class="swiper-slide popularSwiper">
                                <a href="javascript:;" id="popular_view" class="populer_filter">
                                    <i class="fa-regular fa-eye eye_icon me-2"></i>

                                    Property with a View <span> (983)</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next NextSwiperBtn"></div>
                    <div class="swiper-button-prev PreSwiperBtn"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="PropertySearch">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="PropertySearchHeading">
                        Searching for A Nice Place to Live in? Choose Your Property Here
                    </h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <p class="ParaOne1">
                        Properties for sale in Dubai - <span>984</span>
                    </p>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 ms-auto">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 mt-3 mt-lg-0">
                            <div class="InSoldSection">
                                <div class="form-check form-switch" style="position: relative">
                                    <input class="form-check-input me-2 cursor-pointer" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault" />
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Include Sold
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 mt-3 mt-lg-0">
                            <div class="InSoldSection ms-4">
                                <div class="LisitIcon cursor-pointer">
                                    <i class="fa-solid fa-list me-2"></i>
                                    <span>List</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-12 col-sm-12 mt-3 mt-lg-0 ">
                            <div class="InSoldSection ms-4">
                                <div class="LisitIcon cursor_pointer">
                                    <i class="fa-regular fa-map me-2 cursor_pointer"></i>
                                    <span class="cursor_pointer">Map</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 mt-3 mt-lg-0">
                            <div class="ForSaleSelect cursor-pointer">
                                <select class="form-select form-select-sm cursor-pointer"
                                    aria-label="Small select example ">
                                    <option value="current">Recently added</option>
                                    <option value="highPrice">Highest Price</option>
                                    <option value="lowprice">Lowest Price</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <p class="ParaTwo2">
                        Money Plant can change the direction of your life by a simple
                        choice. Are you anxious or panicky about searching for property
                        yourself? Don't worry we can manage and handle all your property
                        needs.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="ProductSection pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <!-- Swiper -->
                                <div class="swiper mySwiperOne" style="padding: 0px !important">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                    </div>
                                    <div class="swiper-button-next NextPro"></div>
                                    <div class="swiper-button-prev prePro"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="productContact">
                                        <div class="productAlpaHeading">
                                            <h5 class="">
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    5 Bedroom Villa For Sale</a>
                                            </h5>
                                        </div>
                                        <div class="ExcusiveBtn">
                                            <a href="http://" target="_blank" rel="noopener noreferrer">EXCLUSIVE

                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 16 16" fill="none">
                                                    <script xmlns="">
                                                        window._wordtune_extension_installed = true;
                                                    </script>
                                                    <path
                                                        d="M1.10634 5.88156L7.59853 14.3022C7.64571 14.3637 7.70641 14.4135 7.77594 14.4478C7.84546 14.4821 7.92194 14.4999 7.99947 14.4999C8.07699 14.4999 8.15347 14.4821 8.22299 14.4478C8.29252 14.4135 8.35322 14.3637 8.4004 14.3022L14.8926 5.88156C14.9564 5.79845 14.9935 5.69788 14.9988 5.59322C15.0041 5.48856 14.9774 5.38476 14.9223 5.29563L12.7201 1.74094C12.6748 1.66737 12.6114 1.60662 12.5359 1.56445C12.4605 1.52228 12.3756 1.5001 12.2892 1.5H3.70978C3.62337 1.5001 3.53841 1.52228 3.46299 1.56445C3.38757 1.60662 3.32418 1.66737 3.27884 1.74094L1.07665 5.29563C1.02155 5.38476 0.99487 5.48856 1.00017 5.59322C1.00548 5.69788 1.04251 5.79845 1.10634 5.88156V5.88156Z"
                                                        stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M1.5 5.5H14.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M12.5 2L11 5.5L8 1.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M3.5 2L5 5.5L8 1.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M8 14L5 5.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M8 14L11 5.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <ul class="PropertiesListing_dtl">
                                            <li>
                                                <strong>Price:</strong>
                                                <span class="ms-5">AED 9,950,000</span>
                                            </li>
                                            <li>
                                                <strong>Location:</strong><span class="ms-4"> Meadows 2, Meadows,
                                                    Dubai</span>
                                            </li>
                                            <li>
                                                <strong>Bedrooms:</strong><span class="ms-4">5</span>
                                            </li>
                                            <li>
                                                <strong>Size:</strong><span class="ms-5 px-4"> 3970 sqft</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-5">
                                        <ul class="ContactBox">
                                            <li>
                                                <div class="whatsAppBox" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalOneOne">
                                                    <div class="mb-0">
                                                        <div
                                                            class="whtIcon d-flex justify-content-center gap-2 align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <script xmlns="">
                                                                    window._wordtune_extension_installed = true;
                                                                </script>
                                                                <path
                                                                    d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z"
                                                                    stroke="#1A1919" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M22 6L12 13L2 6" stroke="#1A1919"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                            EMAIL
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="whatsAppBox" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalOne">
                                                    <div class="mb-0">
                                                        <div
                                                            class="whtIcon d-flex justify-content-center gap-2 align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <script xmlns="">
                                                                    window._wordtune_extension_installed = true;
                                                                </script>
                                                                <path
                                                                    d="M22.0001 16.9201V19.9201C22.0012 20.1986 21.9441 20.4743 21.8326 20.7294C21.721 20.9846 21.5574 21.2137 21.3521 21.402C21.1469 21.5902 20.9046 21.7336 20.6408 21.8228C20.377 21.912 20.0974 21.9452 19.8201 21.9201C16.7429 21.5857 13.7871 20.5342 11.1901 18.8501C8.77388 17.3148 6.72539 15.2663 5.19006 12.8501C3.50003 10.2413 2.4483 7.27109 2.12006 4.1801C2.09507 3.90356 2.12793 3.62486 2.21656 3.36172C2.30518 3.09859 2.44763 2.85679 2.63482 2.65172C2.82202 2.44665 3.04986 2.28281 3.30385 2.17062C3.55783 2.05843 3.8324 2.00036 4.11006 2.0001H7.11006C7.59536 1.99532 8.06585 2.16718 8.43382 2.48363C8.80179 2.80008 9.04213 3.23954 9.11005 3.7201C9.23668 4.68016 9.47151 5.62282 9.81006 6.5301C9.9446 6.88802 9.97372 7.27701 9.89396 7.65098C9.81421 8.02494 9.62892 8.36821 9.36005 8.6401L8.09006 9.9101C9.51361 12.4136 11.5865 14.4865 14.0901 15.9101L15.3601 14.6401C15.6319 14.3712 15.9752 14.1859 16.3492 14.1062C16.7231 14.0264 17.1121 14.0556 17.4701 14.1901C18.3773 14.5286 19.32 14.7635 20.2801 14.8901C20.7658 14.9586 21.2095 15.2033 21.5266 15.5776C21.8437 15.9519 22.0122 16.4297 22.0001 16.9201Z"
                                                                    stroke="#1A1919" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            CALL
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="whatsAppBox" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <div class="mb-0">
                                                        <div
                                                            class="whtIcon d-flex justify-content-center gap-2 align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 32 32" fill="none">
                                                                <script xmlns="">
                                                                    window._wordtune_extension_installed = true;
                                                                </script>
                                                                <path
                                                                    d="M16.004 0h-.008C7.174 0 0 7.176 0 16c0 3.5 1.128 6.744 3.046 9.378l-1.994 5.944 6.15-1.966C9.732 31.032 12.75 32 16.004 32 24.826 32 32 24.822 32 16S24.826 0 16.004 0z"
                                                                    fill="#4CAF50"></path>
                                                                <path
                                                                    d="M25.314 22.594c-.386 1.09-1.918 1.994-3.14 2.258-.836.178-1.928.32-5.604-1.204-4.702-1.948-7.73-6.726-7.966-7.036-.226-.31-1.9-2.53-1.9-4.826S7.87 8.372 8.34 7.892c.386-.394 1.024-.574 1.636-.574.198 0 .376.01.536.018.47.02.706.048 1.016.79.386.93 1.326 3.226 1.438 3.462.114.236.228.556.068.866-.15.32-.282.462-.518.734-.236.272-.46.48-.696.772-.216.254-.46.526-.188.996.272.46 1.212 1.994 2.596 3.226 1.786 1.59 3.234 2.098 3.752 2.314.386.16.846.122 1.128-.178.358-.386.8-1.026 1.25-1.656.32-.452.724-.508 1.148-.348.432.15 2.718 1.28 3.188 1.514.47.236.78.348.894.546.112.198.112 1.128-.274 2.22z"
                                                                    fill="#FAFAFA"></path>
                                                            </svg>
                                                            WHATSAPP
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mt-1">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <!-- Swiper -->
                                <div class="swiper mySwiperOne" style="padding: 0px !important">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                    </div>
                                    <div class="swiper-button-next NextPro"></div>
                                    <div class="swiper-button-prev prePro"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="productContact">
                                        <div class="productAlpaHeading">
                                            <h5 class="">
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    5 Bedroom Villa For Sale</a>
                                            </h5>
                                        </div>
                                        <div class="ExcusiveBtn">
                                            <a href="http://" target="_blank" rel="noopener noreferrer">EXCLUSIVE

                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 16 16" fill="none">
                                                    <script xmlns="">
                                                        window._wordtune_extension_installed = true;
                                                    </script>
                                                    <path
                                                        d="M1.10634 5.88156L7.59853 14.3022C7.64571 14.3637 7.70641 14.4135 7.77594 14.4478C7.84546 14.4821 7.92194 14.4999 7.99947 14.4999C8.07699 14.4999 8.15347 14.4821 8.22299 14.4478C8.29252 14.4135 8.35322 14.3637 8.4004 14.3022L14.8926 5.88156C14.9564 5.79845 14.9935 5.69788 14.9988 5.59322C15.0041 5.48856 14.9774 5.38476 14.9223 5.29563L12.7201 1.74094C12.6748 1.66737 12.6114 1.60662 12.5359 1.56445C12.4605 1.52228 12.3756 1.5001 12.2892 1.5H3.70978C3.62337 1.5001 3.53841 1.52228 3.46299 1.56445C3.38757 1.60662 3.32418 1.66737 3.27884 1.74094L1.07665 5.29563C1.02155 5.38476 0.99487 5.48856 1.00017 5.59322C1.00548 5.69788 1.04251 5.79845 1.10634 5.88156V5.88156Z"
                                                        stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M1.5 5.5H14.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M12.5 2L11 5.5L8 1.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M3.5 2L5 5.5L8 1.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M8 14L5 5.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M8 14L11 5.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <ul class="PropertiesListing_dtl">
                                            <li>
                                                <strong>Price:</strong>
                                                <span class="ms-5">AED 9,950,000</span>
                                            </li>
                                            <li>
                                                <strong>Location:</strong><span class="ms-4"> Meadows 2, Meadows,
                                                    Dubai</span>
                                            </li>
                                            <li>
                                                <strong>Bedrooms:</strong><span class="ms-4">5</span>
                                            </li>
                                            <li>
                                                <strong>Size:</strong><span class="ms-5 px-4"> 3970 sqft</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-5">
                                        <ul class="ContactBox">
                                            <li>
                                                <div class="whatsAppBox" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalOneOne">
                                                    <div class="mb-0">
                                                        <div
                                                            class="whtIcon d-flex justify-content-center gap-2 align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <script xmlns="">
                                                                    window._wordtune_extension_installed = true;
                                                                </script>
                                                                <path
                                                                    d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z"
                                                                    stroke="#1A1919" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M22 6L12 13L2 6" stroke="#1A1919"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                            EMAIL
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="whatsAppBox" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalOne">
                                                    <div class="mb-0">
                                                        <div
                                                            class="whtIcon d-flex justify-content-center gap-2 align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <script xmlns="">
                                                                    window._wordtune_extension_installed = true;
                                                                </script>
                                                                <path
                                                                    d="M22.0001 16.9201V19.9201C22.0012 20.1986 21.9441 20.4743 21.8326 20.7294C21.721 20.9846 21.5574 21.2137 21.3521 21.402C21.1469 21.5902 20.9046 21.7336 20.6408 21.8228C20.377 21.912 20.0974 21.9452 19.8201 21.9201C16.7429 21.5857 13.7871 20.5342 11.1901 18.8501C8.77388 17.3148 6.72539 15.2663 5.19006 12.8501C3.50003 10.2413 2.4483 7.27109 2.12006 4.1801C2.09507 3.90356 2.12793 3.62486 2.21656 3.36172C2.30518 3.09859 2.44763 2.85679 2.63482 2.65172C2.82202 2.44665 3.04986 2.28281 3.30385 2.17062C3.55783 2.05843 3.8324 2.00036 4.11006 2.0001H7.11006C7.59536 1.99532 8.06585 2.16718 8.43382 2.48363C8.80179 2.80008 9.04213 3.23954 9.11005 3.7201C9.23668 4.68016 9.47151 5.62282 9.81006 6.5301C9.9446 6.88802 9.97372 7.27701 9.89396 7.65098C9.81421 8.02494 9.62892 8.36821 9.36005 8.6401L8.09006 9.9101C9.51361 12.4136 11.5865 14.4865 14.0901 15.9101L15.3601 14.6401C15.6319 14.3712 15.9752 14.1859 16.3492 14.1062C16.7231 14.0264 17.1121 14.0556 17.4701 14.1901C18.3773 14.5286 19.32 14.7635 20.2801 14.8901C20.7658 14.9586 21.2095 15.2033 21.5266 15.5776C21.8437 15.9519 22.0122 16.4297 22.0001 16.9201Z"
                                                                    stroke="#1A1919" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            CALL
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="whatsAppBox" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <div class="mb-0">
                                                        <div
                                                            class="whtIcon d-flex justify-content-center gap-2 align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 32 32" fill="none">
                                                                <script xmlns="">
                                                                    window._wordtune_extension_installed = true;
                                                                </script>
                                                                <path
                                                                    d="M16.004 0h-.008C7.174 0 0 7.176 0 16c0 3.5 1.128 6.744 3.046 9.378l-1.994 5.944 6.15-1.966C9.732 31.032 12.75 32 16.004 32 24.826 32 32 24.822 32 16S24.826 0 16.004 0z"
                                                                    fill="#4CAF50"></path>
                                                                <path
                                                                    d="M25.314 22.594c-.386 1.09-1.918 1.994-3.14 2.258-.836.178-1.928.32-5.604-1.204-4.702-1.948-7.73-6.726-7.966-7.036-.226-.31-1.9-2.53-1.9-4.826S7.87 8.372 8.34 7.892c.386-.394 1.024-.574 1.636-.574.198 0 .376.01.536.018.47.02.706.048 1.016.79.386.93 1.326 3.226 1.438 3.462.114.236.228.556.068.866-.15.32-.282.462-.518.734-.236.272-.46.48-.696.772-.216.254-.46.526-.188.996.272.46 1.212 1.994 2.596 3.226 1.786 1.59 3.234 2.098 3.752 2.314.386.16.846.122 1.128-.178.358-.386.8-1.026 1.25-1.656.32-.452.724-.508 1.148-.348.432.15 2.718 1.28 3.188 1.514.47.236.78.348.894.546.112.198.112 1.128-.274 2.22z"
                                                                    fill="#FAFAFA"></path>
                                                            </svg>
                                                            WHATSAPP
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-1">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <!-- Swiper -->
                                <div class="swiper mySwiperOne" style="padding: 0px !important">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                    </div>
                                    <div class="swiper-button-next NextPro"></div>
                                    <div class="swiper-button-prev prePro"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="productContact">
                                        <div class="productAlpaHeading">
                                            <h5 class="">
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    5 Bedroom Villa For Sale</a>
                                            </h5>
                                        </div>
                                        <div class="ExcusiveBtn">
                                            <a href="http://" target="_blank" rel="noopener noreferrer">EXCLUSIVE

                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 16 16" fill="none">
                                                    <script xmlns="">
                                                        window._wordtune_extension_installed = true;
                                                    </script>
                                                    <path
                                                        d="M1.10634 5.88156L7.59853 14.3022C7.64571 14.3637 7.70641 14.4135 7.77594 14.4478C7.84546 14.4821 7.92194 14.4999 7.99947 14.4999C8.07699 14.4999 8.15347 14.4821 8.22299 14.4478C8.29252 14.4135 8.35322 14.3637 8.4004 14.3022L14.8926 5.88156C14.9564 5.79845 14.9935 5.69788 14.9988 5.59322C15.0041 5.48856 14.9774 5.38476 14.9223 5.29563L12.7201 1.74094C12.6748 1.66737 12.6114 1.60662 12.5359 1.56445C12.4605 1.52228 12.3756 1.5001 12.2892 1.5H3.70978C3.62337 1.5001 3.53841 1.52228 3.46299 1.56445C3.38757 1.60662 3.32418 1.66737 3.27884 1.74094L1.07665 5.29563C1.02155 5.38476 0.99487 5.48856 1.00017 5.59322C1.00548 5.69788 1.04251 5.79845 1.10634 5.88156V5.88156Z"
                                                        stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M1.5 5.5H14.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M12.5 2L11 5.5L8 1.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M3.5 2L5 5.5L8 1.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M8 14L5 5.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M8 14L11 5.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <ul class="PropertiesListing_dtl">
                                            <li>
                                                <strong>Price:</strong>
                                                <span class="ms-5">AED 9,950,000</span>
                                            </li>
                                            <li>
                                                <strong>Location:</strong><span class="ms-4"> Meadows 2, Meadows,
                                                    Dubai</span>
                                            </li>
                                            <li>
                                                <strong>Bedrooms:</strong><span class="ms-4">5</span>
                                            </li>
                                            <li>
                                                <strong>Size:</strong><span class="ms-5 px-4"> 3970 sqft</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-5">
                                        <ul class="ContactBox">
                                            <li>
                                                <div class="whatsAppBox" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalOneOne">
                                                    <div class="mb-0">
                                                        <div
                                                            class="whtIcon d-flex justify-content-center gap-2 align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <script xmlns="">
                                                                    window._wordtune_extension_installed = true;
                                                                </script>
                                                                <path
                                                                    d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z"
                                                                    stroke="#1A1919" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M22 6L12 13L2 6" stroke="#1A1919"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                            EMAIL
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="whatsAppBox" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalOne">
                                                    <div class="mb-0">
                                                        <div
                                                            class="whtIcon d-flex justify-content-center gap-2 align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <script xmlns="">
                                                                    window._wordtune_extension_installed = true;
                                                                </script>
                                                                <path
                                                                    d="M22.0001 16.9201V19.9201C22.0012 20.1986 21.9441 20.4743 21.8326 20.7294C21.721 20.9846 21.5574 21.2137 21.3521 21.402C21.1469 21.5902 20.9046 21.7336 20.6408 21.8228C20.377 21.912 20.0974 21.9452 19.8201 21.9201C16.7429 21.5857 13.7871 20.5342 11.1901 18.8501C8.77388 17.3148 6.72539 15.2663 5.19006 12.8501C3.50003 10.2413 2.4483 7.27109 2.12006 4.1801C2.09507 3.90356 2.12793 3.62486 2.21656 3.36172C2.30518 3.09859 2.44763 2.85679 2.63482 2.65172C2.82202 2.44665 3.04986 2.28281 3.30385 2.17062C3.55783 2.05843 3.8324 2.00036 4.11006 2.0001H7.11006C7.59536 1.99532 8.06585 2.16718 8.43382 2.48363C8.80179 2.80008 9.04213 3.23954 9.11005 3.7201C9.23668 4.68016 9.47151 5.62282 9.81006 6.5301C9.9446 6.88802 9.97372 7.27701 9.89396 7.65098C9.81421 8.02494 9.62892 8.36821 9.36005 8.6401L8.09006 9.9101C9.51361 12.4136 11.5865 14.4865 14.0901 15.9101L15.3601 14.6401C15.6319 14.3712 15.9752 14.1859 16.3492 14.1062C16.7231 14.0264 17.1121 14.0556 17.4701 14.1901C18.3773 14.5286 19.32 14.7635 20.2801 14.8901C20.7658 14.9586 21.2095 15.2033 21.5266 15.5776C21.8437 15.9519 22.0122 16.4297 22.0001 16.9201Z"
                                                                    stroke="#1A1919" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            CALL
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="whatsAppBox" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <div class="mb-0">
                                                        <div
                                                            class="whtIcon d-flex justify-content-center gap-2 align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 32 32" fill="none">
                                                                <script xmlns="">
                                                                    window._wordtune_extension_installed = true;
                                                                </script>
                                                                <path
                                                                    d="M16.004 0h-.008C7.174 0 0 7.176 0 16c0 3.5 1.128 6.744 3.046 9.378l-1.994 5.944 6.15-1.966C9.732 31.032 12.75 32 16.004 32 24.826 32 32 24.822 32 16S24.826 0 16.004 0z"
                                                                    fill="#4CAF50"></path>
                                                                <path
                                                                    d="M25.314 22.594c-.386 1.09-1.918 1.994-3.14 2.258-.836.178-1.928.32-5.604-1.204-4.702-1.948-7.73-6.726-7.966-7.036-.226-.31-1.9-2.53-1.9-4.826S7.87 8.372 8.34 7.892c.386-.394 1.024-.574 1.636-.574.198 0 .376.01.536.018.47.02.706.048 1.016.79.386.93 1.326 3.226 1.438 3.462.114.236.228.556.068.866-.15.32-.282.462-.518.734-.236.272-.46.48-.696.772-.216.254-.46.526-.188.996.272.46 1.212 1.994 2.596 3.226 1.786 1.59 3.234 2.098 3.752 2.314.386.16.846.122 1.128-.178.358-.386.8-1.026 1.25-1.656.32-.452.724-.508 1.148-.348.432.15 2.718 1.28 3.188 1.514.47.236.78.348.894.546.112.198.112 1.128-.274 2.22z"
                                                                    fill="#FAFAFA"></path>
                                                            </svg>
                                                            WHATSAPP
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-1">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <!-- Swiper -->
                                <div class="swiper mySwiperOne" style="padding: 0px !important">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                    </div>
                                    <div class="swiper-button-next NextPro"></div>
                                    <div class="swiper-button-prev prePro"></div>
                                    <div class="swiper-pagination pagiBox"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="productContact">
                                        <div class="productAlpaHeading">
                                            <h5 class="">
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    5 Bedroom Villa For Sale</a>
                                            </h5>
                                        </div>
                                        <div class="ExcusiveBtn">
                                            <a href="http://" target="_blank" rel="noopener noreferrer">EXCLUSIVE

                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 16 16" fill="none">
                                                    <script xmlns="">
                                                        window._wordtune_extension_installed = true;
                                                    </script>
                                                    <path
                                                        d="M1.10634 5.88156L7.59853 14.3022C7.64571 14.3637 7.70641 14.4135 7.77594 14.4478C7.84546 14.4821 7.92194 14.4999 7.99947 14.4999C8.07699 14.4999 8.15347 14.4821 8.22299 14.4478C8.29252 14.4135 8.35322 14.3637 8.4004 14.3022L14.8926 5.88156C14.9564 5.79845 14.9935 5.69788 14.9988 5.59322C15.0041 5.48856 14.9774 5.38476 14.9223 5.29563L12.7201 1.74094C12.6748 1.66737 12.6114 1.60662 12.5359 1.56445C12.4605 1.52228 12.3756 1.5001 12.2892 1.5H3.70978C3.62337 1.5001 3.53841 1.52228 3.46299 1.56445C3.38757 1.60662 3.32418 1.66737 3.27884 1.74094L1.07665 5.29563C1.02155 5.38476 0.99487 5.48856 1.00017 5.59322C1.00548 5.69788 1.04251 5.79845 1.10634 5.88156V5.88156Z"
                                                        stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M1.5 5.5H14.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M12.5 2L11 5.5L8 1.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M3.5 2L5 5.5L8 1.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M8 14L5 5.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M8 14L11 5.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <ul class="PropertiesListing_dtl">
                                            <li>
                                                <strong>Price:</strong>
                                                <span class="ms-5">AED 9,950,000</span>
                                            </li>
                                            <li>
                                                <strong>Location:</strong><span class="ms-4"> Meadows 2, Meadows,
                                                    Dubai</span>
                                            </li>
                                            <li>
                                                <strong>Bedrooms:</strong><span class="ms-4">5</span>
                                            </li>
                                            <li>
                                                <strong>Size:</strong><span class="ms-5 px-4"> 3970 sqft</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-5">
                                        <ul class="ContactBox">
                                            <li>
                                                <div class="whatsAppBox" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalOneOne">
                                                    <div class="mb-0">
                                                        <div
                                                            class="whtIcon d-flex justify-content-center gap-2 align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <script xmlns="">
                                                                    window._wordtune_extension_installed = true;
                                                                </script>
                                                                <path
                                                                    d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z"
                                                                    stroke="#1A1919" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M22 6L12 13L2 6" stroke="#1A1919"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                            EMAIL
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="whatsAppBox" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalOne">
                                                    <div class="mb-0">
                                                        <div
                                                            class="whtIcon d-flex justify-content-center gap-2 align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <script xmlns="">
                                                                    window._wordtune_extension_installed = true;
                                                                </script>
                                                                <path
                                                                    d="M22.0001 16.9201V19.9201C22.0012 20.1986 21.9441 20.4743 21.8326 20.7294C21.721 20.9846 21.5574 21.2137 21.3521 21.402C21.1469 21.5902 20.9046 21.7336 20.6408 21.8228C20.377 21.912 20.0974 21.9452 19.8201 21.9201C16.7429 21.5857 13.7871 20.5342 11.1901 18.8501C8.77388 17.3148 6.72539 15.2663 5.19006 12.8501C3.50003 10.2413 2.4483 7.27109 2.12006 4.1801C2.09507 3.90356 2.12793 3.62486 2.21656 3.36172C2.30518 3.09859 2.44763 2.85679 2.63482 2.65172C2.82202 2.44665 3.04986 2.28281 3.30385 2.17062C3.55783 2.05843 3.8324 2.00036 4.11006 2.0001H7.11006C7.59536 1.99532 8.06585 2.16718 8.43382 2.48363C8.80179 2.80008 9.04213 3.23954 9.11005 3.7201C9.23668 4.68016 9.47151 5.62282 9.81006 6.5301C9.9446 6.88802 9.97372 7.27701 9.89396 7.65098C9.81421 8.02494 9.62892 8.36821 9.36005 8.6401L8.09006 9.9101C9.51361 12.4136 11.5865 14.4865 14.0901 15.9101L15.3601 14.6401C15.6319 14.3712 15.9752 14.1859 16.3492 14.1062C16.7231 14.0264 17.1121 14.0556 17.4701 14.1901C18.3773 14.5286 19.32 14.7635 20.2801 14.8901C20.7658 14.9586 21.2095 15.2033 21.5266 15.5776C21.8437 15.9519 22.0122 16.4297 22.0001 16.9201Z"
                                                                    stroke="#1A1919" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            CALL
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="whatsAppBox" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <div class="mb-0">
                                                        <div
                                                            class="whtIcon d-flex justify-content-center gap-2 align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 32 32" fill="none">
                                                                <script xmlns="">
                                                                    window._wordtune_extension_installed = true;
                                                                </script>
                                                                <path
                                                                    d="M16.004 0h-.008C7.174 0 0 7.176 0 16c0 3.5 1.128 6.744 3.046 9.378l-1.994 5.944 6.15-1.966C9.732 31.032 12.75 32 16.004 32 24.826 32 32 24.822 32 16S24.826 0 16.004 0z"
                                                                    fill="#4CAF50"></path>
                                                                <path
                                                                    d="M25.314 22.594c-.386 1.09-1.918 1.994-3.14 2.258-.836.178-1.928.32-5.604-1.204-4.702-1.948-7.73-6.726-7.966-7.036-.226-.31-1.9-2.53-1.9-4.826S7.87 8.372 8.34 7.892c.386-.394 1.024-.574 1.636-.574.198 0 .376.01.536.018.47.02.706.048 1.016.79.386.93 1.326 3.226 1.438 3.462.114.236.228.556.068.866-.15.32-.282.462-.518.734-.236.272-.46.48-.696.772-.216.254-.46.526-.188.996.272.46 1.212 1.994 2.596 3.226 1.786 1.59 3.234 2.098 3.752 2.314.386.16.846.122 1.128-.178.358-.386.8-1.026 1.25-1.656.32-.452.724-.508 1.148-.348.432.15 2.718 1.28 3.188 1.514.47.236.78.348.894.546.112.198.112 1.128-.274 2.22z"
                                                                    fill="#FAFAFA"></path>
                                                            </svg>
                                                            WHATSAPP
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-1">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <!-- Swiper -->
                                <div class="swiper mySwiperOne" style="padding: 0px !important">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                    </div>
                                    <div class="swiper-button-next NextPro"></div>
                                    <div class="swiper-button-prev prePro"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="productContact">
                                        <div class="productAlpaHeading">
                                            <h5 class="">
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    5 Bedroom Villa For Sale</a>
                                            </h5>
                                        </div>
                                        <div class="ExcusiveBtn">
                                            <a href="http://" target="_blank" rel="noopener noreferrer">EXCLUSIVE

                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 16 16" fill="none">
                                                    <script xmlns="">
                                                        window._wordtune_extension_installed = true;
                                                    </script>
                                                    <path
                                                        d="M1.10634 5.88156L7.59853 14.3022C7.64571 14.3637 7.70641 14.4135 7.77594 14.4478C7.84546 14.4821 7.92194 14.4999 7.99947 14.4999C8.07699 14.4999 8.15347 14.4821 8.22299 14.4478C8.29252 14.4135 8.35322 14.3637 8.4004 14.3022L14.8926 5.88156C14.9564 5.79845 14.9935 5.69788 14.9988 5.59322C15.0041 5.48856 14.9774 5.38476 14.9223 5.29563L12.7201 1.74094C12.6748 1.66737 12.6114 1.60662 12.5359 1.56445C12.4605 1.52228 12.3756 1.5001 12.2892 1.5H3.70978C3.62337 1.5001 3.53841 1.52228 3.46299 1.56445C3.38757 1.60662 3.32418 1.66737 3.27884 1.74094L1.07665 5.29563C1.02155 5.38476 0.99487 5.48856 1.00017 5.59322C1.00548 5.69788 1.04251 5.79845 1.10634 5.88156V5.88156Z"
                                                        stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M1.5 5.5H14.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M12.5 2L11 5.5L8 1.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M3.5 2L5 5.5L8 1.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M8 14L5 5.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M8 14L11 5.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <ul class="PropertiesListing_dtl">
                                            <li>
                                                <strong>Price:</strong>
                                                <span class="ms-5">AED 9,950,000</span>
                                            </li>
                                            <li>
                                                <strong>Location:</strong><span class="ms-4"> Meadows 2, Meadows,
                                                    Dubai</span>
                                            </li>
                                            <li>
                                                <strong>Bedrooms:</strong><span class="ms-4">5</span>
                                            </li>
                                            <li>
                                                <strong>Size:</strong><span class="ms-5 px-4"> 3970 sqft</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-5">
                                        <ul class="ContactBox">
                                            <li>
                                                <div class="whatsAppBox" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalOneOne">
                                                    <div class="mb-0">
                                                        <div
                                                            class="whtIcon d-flex justify-content-center gap-2 align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <script xmlns="">
                                                                    window._wordtune_extension_installed = true;
                                                                </script>
                                                                <path
                                                                    d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z"
                                                                    stroke="#1A1919" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M22 6L12 13L2 6" stroke="#1A1919"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                            EMAIL
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="whatsAppBox" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalOne">
                                                    <div class="mb-0">
                                                        <div
                                                            class="whtIcon d-flex justify-content-center gap-2 align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <script xmlns="">
                                                                    window._wordtune_extension_installed = true;
                                                                </script>
                                                                <path
                                                                    d="M22.0001 16.9201V19.9201C22.0012 20.1986 21.9441 20.4743 21.8326 20.7294C21.721 20.9846 21.5574 21.2137 21.3521 21.402C21.1469 21.5902 20.9046 21.7336 20.6408 21.8228C20.377 21.912 20.0974 21.9452 19.8201 21.9201C16.7429 21.5857 13.7871 20.5342 11.1901 18.8501C8.77388 17.3148 6.72539 15.2663 5.19006 12.8501C3.50003 10.2413 2.4483 7.27109 2.12006 4.1801C2.09507 3.90356 2.12793 3.62486 2.21656 3.36172C2.30518 3.09859 2.44763 2.85679 2.63482 2.65172C2.82202 2.44665 3.04986 2.28281 3.30385 2.17062C3.55783 2.05843 3.8324 2.00036 4.11006 2.0001H7.11006C7.59536 1.99532 8.06585 2.16718 8.43382 2.48363C8.80179 2.80008 9.04213 3.23954 9.11005 3.7201C9.23668 4.68016 9.47151 5.62282 9.81006 6.5301C9.9446 6.88802 9.97372 7.27701 9.89396 7.65098C9.81421 8.02494 9.62892 8.36821 9.36005 8.6401L8.09006 9.9101C9.51361 12.4136 11.5865 14.4865 14.0901 15.9101L15.3601 14.6401C15.6319 14.3712 15.9752 14.1859 16.3492 14.1062C16.7231 14.0264 17.1121 14.0556 17.4701 14.1901C18.3773 14.5286 19.32 14.7635 20.2801 14.8901C20.7658 14.9586 21.2095 15.2033 21.5266 15.5776C21.8437 15.9519 22.0122 16.4297 22.0001 16.9201Z"
                                                                    stroke="#1A1919" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            CALL
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="whatsAppBox" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <div class="mb-0">
                                                        <div
                                                            class="whtIcon d-flex justify-content-center gap-2 align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 32 32" fill="none">
                                                                <script xmlns="">
                                                                    window._wordtune_extension_installed = true;
                                                                </script>
                                                                <path
                                                                    d="M16.004 0h-.008C7.174 0 0 7.176 0 16c0 3.5 1.128 6.744 3.046 9.378l-1.994 5.944 6.15-1.966C9.732 31.032 12.75 32 16.004 32 24.826 32 32 24.822 32 16S24.826 0 16.004 0z"
                                                                    fill="#4CAF50"></path>
                                                                <path
                                                                    d="M25.314 22.594c-.386 1.09-1.918 1.994-3.14 2.258-.836.178-1.928.32-5.604-1.204-4.702-1.948-7.73-6.726-7.966-7.036-.226-.31-1.9-2.53-1.9-4.826S7.87 8.372 8.34 7.892c.386-.394 1.024-.574 1.636-.574.198 0 .376.01.536.018.47.02.706.048 1.016.79.386.93 1.326 3.226 1.438 3.462.114.236.228.556.068.866-.15.32-.282.462-.518.734-.236.272-.46.48-.696.772-.216.254-.46.526-.188.996.272.46 1.212 1.994 2.596 3.226 1.786 1.59 3.234 2.098 3.752 2.314.386.16.846.122 1.128-.178.358-.386.8-1.026 1.25-1.656.32-.452.724-.508 1.148-.348.432.15 2.718 1.28 3.188 1.514.47.236.78.348.894.546.112.198.112 1.128-.274 2.22z"
                                                                    fill="#FAFAFA"></path>
                                                            </svg>
                                                            WHATSAPP
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-1">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <!-- Swiper -->
                                <div class="swiper mySwiperOne" style="padding: 0px !important">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                        <div class="swiper-slide ProductSideOne">
                                            <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/b3437e53-ee29-45c6-9bdf-2a093190ee00/public"
                                                class="img-fluid" alt="SliderProduct" />
                                        </div>
                                    </div>
                                    <div class="swiper-button-next NextPro"></div>
                                    <div class="swiper-button-prev prePro"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="productContact">
                                        <div class="productAlpaHeading">
                                            <h5 class="">
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    5 Bedroom Villa For Sale</a>
                                            </h5>
                                        </div>
                                        <div class="ExcusiveBtn">
                                            <a href="http://" target="_blank" rel="noopener noreferrer">EXCLUSIVE

                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 16 16" fill="none">
                                                    <script xmlns="">
                                                        window._wordtune_extension_installed = true;
                                                    </script>
                                                    <path
                                                        d="M1.10634 5.88156L7.59853 14.3022C7.64571 14.3637 7.70641 14.4135 7.77594 14.4478C7.84546 14.4821 7.92194 14.4999 7.99947 14.4999C8.07699 14.4999 8.15347 14.4821 8.22299 14.4478C8.29252 14.4135 8.35322 14.3637 8.4004 14.3022L14.8926 5.88156C14.9564 5.79845 14.9935 5.69788 14.9988 5.59322C15.0041 5.48856 14.9774 5.38476 14.9223 5.29563L12.7201 1.74094C12.6748 1.66737 12.6114 1.60662 12.5359 1.56445C12.4605 1.52228 12.3756 1.5001 12.2892 1.5H3.70978C3.62337 1.5001 3.53841 1.52228 3.46299 1.56445C3.38757 1.60662 3.32418 1.66737 3.27884 1.74094L1.07665 5.29563C1.02155 5.38476 0.99487 5.48856 1.00017 5.59322C1.00548 5.69788 1.04251 5.79845 1.10634 5.88156V5.88156Z"
                                                        stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M1.5 5.5H14.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M12.5 2L11 5.5L8 1.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M3.5 2L5 5.5L8 1.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M8 14L5 5.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M8 14L11 5.5" stroke="#1f663a" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <ul class="PropertiesListing_dtl">
                                            <li>
                                                <strong>Price:</strong>
                                                <span class="ms-5">AED 9,950,000</span>
                                            </li>
                                            <li>
                                                <strong>Location:</strong><span class="ms-4"> Meadows 2, Meadows,
                                                    Dubai</span>
                                            </li>
                                            <li>
                                                <strong>Bedrooms:</strong><span class="ms-4">5</span>
                                            </li>
                                            <li>
                                                <strong>Size:</strong><span class="ms-5 px-4"> 3970 sqft</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-5">
                                        <ul class="ContactBox">
                                            <li>
                                                <div class="whatsAppBox" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalOneOne">
                                                    <div class="mb-0">
                                                        <div
                                                            class="whtIcon d-flex justify-content-center gap-2 align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <script xmlns="">
                                                                    window._wordtune_extension_installed = true;
                                                                </script>
                                                                <path
                                                                    d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z"
                                                                    stroke="#1A1919" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M22 6L12 13L2 6" stroke="#1A1919"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                            EMAIL
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="whatsAppBox" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalOne">
                                                    <div class="mb-0">
                                                        <div
                                                            class="whtIcon d-flex justify-content-center gap-2 align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <script xmlns="">
                                                                    window._wordtune_extension_installed = true;
                                                                </script>
                                                                <path
                                                                    d="M22.0001 16.9201V19.9201C22.0012 20.1986 21.9441 20.4743 21.8326 20.7294C21.721 20.9846 21.5574 21.2137 21.3521 21.402C21.1469 21.5902 20.9046 21.7336 20.6408 21.8228C20.377 21.912 20.0974 21.9452 19.8201 21.9201C16.7429 21.5857 13.7871 20.5342 11.1901 18.8501C8.77388 17.3148 6.72539 15.2663 5.19006 12.8501C3.50003 10.2413 2.4483 7.27109 2.12006 4.1801C2.09507 3.90356 2.12793 3.62486 2.21656 3.36172C2.30518 3.09859 2.44763 2.85679 2.63482 2.65172C2.82202 2.44665 3.04986 2.28281 3.30385 2.17062C3.55783 2.05843 3.8324 2.00036 4.11006 2.0001H7.11006C7.59536 1.99532 8.06585 2.16718 8.43382 2.48363C8.80179 2.80008 9.04213 3.23954 9.11005 3.7201C9.23668 4.68016 9.47151 5.62282 9.81006 6.5301C9.9446 6.88802 9.97372 7.27701 9.89396 7.65098C9.81421 8.02494 9.62892 8.36821 9.36005 8.6401L8.09006 9.9101C9.51361 12.4136 11.5865 14.4865 14.0901 15.9101L15.3601 14.6401C15.6319 14.3712 15.9752 14.1859 16.3492 14.1062C16.7231 14.0264 17.1121 14.0556 17.4701 14.1901C18.3773 14.5286 19.32 14.7635 20.2801 14.8901C20.7658 14.9586 21.2095 15.2033 21.5266 15.5776C21.8437 15.9519 22.0122 16.4297 22.0001 16.9201Z"
                                                                    stroke="#1A1919" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            CALL
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="whatsAppBox" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <div class="mb-0">
                                                        <div
                                                            class="whtIcon d-flex justify-content-center gap-2 align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 32 32" fill="none">
                                                                <script xmlns="">
                                                                    window._wordtune_extension_installed = true;
                                                                </script>
                                                                <path
                                                                    d="M16.004 0h-.008C7.174 0 0 7.176 0 16c0 3.5 1.128 6.744 3.046 9.378l-1.994 5.944 6.15-1.966C9.732 31.032 12.75 32 16.004 32 24.826 32 32 24.822 32 16S24.826 0 16.004 0z"
                                                                    fill="#4CAF50"></path>
                                                                <path
                                                                    d="M25.314 22.594c-.386 1.09-1.918 1.994-3.14 2.258-.836.178-1.928.32-5.604-1.204-4.702-1.948-7.73-6.726-7.966-7.036-.226-.31-1.9-2.53-1.9-4.826S7.87 8.372 8.34 7.892c.386-.394 1.024-.574 1.636-.574.198 0 .376.01.536.018.47.02.706.048 1.016.79.386.93 1.326 3.226 1.438 3.462.114.236.228.556.068.866-.15.32-.282.462-.518.734-.236.272-.46.48-.696.772-.216.254-.46.526-.188.996.272.46 1.212 1.994 2.596 3.226 1.786 1.59 3.234 2.098 3.752 2.314.386.16.846.122 1.128-.178.358-.386.8-1.026 1.25-1.656.32-.452.724-.508 1.148-.348.432.15 2.718 1.28 3.188 1.514.47.236.78.348.894.546.112.198.112 1.128-.274 2.22z"
                                                                    fill="#FAFAFA"></path>
                                                            </svg>
                                                            WHATSAPP
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="UpdateBtn text-center">
                    <div class="GetStartEdBtn">
                        <a href="#" class="btn btn-customClorTWo">SHOW MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
