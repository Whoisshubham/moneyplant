@extends('frontend.layouts.app')
@section('content')
<link
rel="stylesheet"
href="{{asset('frontend/assests/css/why-buy-through-moneyplant.css')}}"
/>
<Section class="whyBuyThroughSection">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="WhyBuyHeading">
            <h2 class="fs-1">
            Key Benefits of Selling Your Property with Moneyplant’s Expertise
            </h2>
          </div>
          <div class="WhyBuyPara">
            <p>
            Sell your property with Money Plant’s expertise to get the best value from the market. Open a wide range of dynamic selling horizons to get the best return. 

            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="ProFindBtnBox">
            <div class="ProFindBtn">
              <a
                href="properties-for-sale.php"
                target="_blank"
                rel="noopener noreferrer"
                >FIND A PROPERTY</a
              >
            </div>

            <div class="ProFindBtn">
              <a href="contact.php" target="_blank" rel="noopener noreferrer"
                >CONTACT US</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </Section>
  <section class="WhyBuyBannerSection">
    <div class="container">
      <div class="WhyBuyBannerImg">
        <img
          src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/2a960333-0804-44e0-736e-738955f62100/public"
          alt=""
          srcset=""
        />
      </div>
    </div>
  </section>
  <section class="contactSection">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-md-12 paddingRight mt-4 mb-4">
          <div class="contactBox">
            <div class="d-flex agent-desc">
              <div class="circleImg">
                <img
                  src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/9ed34182-1ed4-4424-7038-a868931af500/public"
                  alt=""
                  srcset=""
                />
              </div>
              <div class="d-flex flex-column cText align-items-start ms-4 ">
                <P class="mb-0">Contact Us</P>
                <a class="mt-2" href="tel:+">+971-509683657</a>
              </div>
            </div>
          </div>
          <div class="agent-desc">
            <div
              class="whatsAppBox mt-4"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
            >
              <div class="mb-0">
                <div
                  class="whtIcon d-flex justify-content-center gap-2 align-items-center"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="30"
                    height="30"
                    viewBox="0 0 32 32"
                    fill="none"
                  >
                    <script xmlns="">
                      window._wordtune_extension_installed = true;
                    </script>
                    <path
                      d="M16.004 0h-.008C7.174 0 0 7.176 0 16c0 3.5 1.128 6.744 3.046 9.378l-1.994 5.944 6.15-1.966C9.732 31.032 12.75 32 16.004 32 24.826 32 32 24.822 32 16S24.826 0 16.004 0z"
                      fill="#4CAF50"
                    />
                    <path
                      d="M25.314 22.594c-.386 1.09-1.918 1.994-3.14 2.258-.836.178-1.928.32-5.604-1.204-4.702-1.948-7.73-6.726-7.966-7.036-.226-.31-1.9-2.53-1.9-4.826S7.87 8.372 8.34 7.892c.386-.394 1.024-.574 1.636-.574.198 0 .376.01.536.018.47.02.706.048 1.016.79.386.93 1.326 3.226 1.438 3.462.114.236.228.556.068.866-.15.32-.282.462-.518.734-.236.272-.46.48-.696.772-.216.254-.46.526-.188.996.272.46 1.212 1.994 2.596 3.226 1.786 1.59 3.234 2.098 3.752 2.314.386.16.846.122 1.128-.178.358-.386.8-1.026 1.25-1.656.32-.452.724-.508 1.148-.348.432.15 2.718 1.28 3.188 1.514.47.236.78.348.894.546.112.198.112 1.128-.274 2.22z"
                      fill="#FAFAFA"
                    />
                  </svg>
                  WHATSAPP
                </div>
              </div>
            </div>
          </div>

          <div class="mt-5 agent-desc">
            <p class="SharePara">Share:</p>
            <ul class="socialIconsList">
              <li class="iconItem">
                <a href="http://" target="_blank" rel="noopener noreferrer"
                  ><i class="fa-brands fa-x-twitter"></i
                ></a>
              </li>
              <li class="iconItem">
                <a href="http://" target="_blank" rel="noopener noreferrer"
                  ><i class="fa-brands fa-facebook"></i
                ></a>
              </li>
              <li class="iconItem">
                <a href="http://" target="_blank" rel="noopener noreferrer"
                  ><i class="fa-brands fa-linkedin"></i
                ></a>
              </li>
              <li class="iconItem">
                <a href="http://" target="_blank" rel="noopener noreferrer"
                  ><i class="fa-solid fa-link"></i
                ></a>
              </li>
            </ul>
          </div>
          <div class="mt-4">
            <p>Do you need a property valuation?</p>
          </div>
          <div
            class="whatsAppBox mt-4"
            data-bs-toggle="modal"
            data-bs-target="#exampleModalOneOne"
          >
            <p class="mb-0">SPEAK WITH US</p>
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12">
          <div class="salesText mt-4">
            <div class="SaleHeading">
              <h5>We Acquire Experience And Expertise In This Field</h5>
            </div>
            <div class="salePara">
              <p>
              Our teams of consultants and agents are local experts who know everything about Dubai inside and out. They are here to provide valuable insight, relevant knowledge and expertise that Internet research cannot provide. <br/>
              We stay up to date on market trends so that we can advise you on any related data and pricing that may change your decision-making strategy. We can also explain the entire selling process in Dubai with a team of real estate experts so that you, as a seller, can be fully prepared before listing your home.
              </p>
            </div>

            <div class="SaleHeading">
              <h5>We Implement Data-Driven Strategy To Get The Best Value Out Of Your Property</h5>
            </div>
            <div class="salePara">
              <p>
                Each house has its own perspective and uniqueness. You can easily rely on us once you list your property with Money Plant. Our professional property managers will highlight its best features, negotiate the best price, and market it to many potential real estate buyers. We consider the most recent market data, customer purchasing behaviour, and any other analysis that will inform our marketing strategy to ensure a quick and high-quality sale.
              </p>
            </div>

            <div class="SaleHeading">
              <h5>We Offer Professional And Tailored Services For Client Satisfaction</h5>
            </div>
            <div class="salePara">
              <p>
                While attempting to balance everything else in your life, selling your home can be an intense and stressful experience. Allow us to take care of the details and make this a simple process for you. We will do the legwork and keep you updated once we understand the property you want to sell, your target sale price, and any other terms of negotiations.

              </p>
            </div>

           
            <div class="">
              <p>
                
                 Contact Us </span> Today to Get Started
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section
    class="whoIsMoneyPlantSection banner-section-text"
    style="position: relative"
  >
    <div class="over-layer-color"></div>

    <div class="container" style="z-index: 99">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-9">
          <div class="banner-content">
            <p>Money Plant’s Expert Team</p>

            <h2>
              Sell, buy, and rent your property without any hassle & make your
              journey smooth with us.
            </h2>

            <div class="GetStartEdBtn mt-5">
              <a href="meet-the-team.php" class="btn btn-customClor"
                >Meet the team</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="proSlider">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="SliderTextHeading">
            <h5>You may also like</h5>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="viewMore">
            <a href="#">View all</a>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Swiper -->
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="SliderImg">
                <img
                  src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/f48c843b-271b-4c65-e21a-b1717ff52200/public"
                  alt="SliderOne"
                />
              </div>
              <div class="mt-4 sliderFullContact p-sm-2 p-lg-1">
                <div class="SliderTextContent ">
                  <h5>3 bedroom Villa for Sale</h5>
                  <p>Zulal 1, Lakes, Dubai</p>

                  <div class="">
                    <ul class="d-flex gap-4 SliderList">
                      <li class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <script xmlns="">
                            window._wordtune_extension_installed = true;
                          </script>
                          <path
                            d="M16.1999 3.59998C16.9616 3.59986 17.6948 3.88945 18.2508 4.41002C18.8068 4.93059 19.1439 5.64315 19.1939 6.40317L19.1999 6.59997V9.65997C19.8429 9.79148 20.4251 10.1301 20.8572 10.6241C21.2894 11.118 21.5478 11.74 21.5927 12.3948L21.5999 12.6V19.8C21.6002 19.9499 21.5443 20.0945 21.4433 20.2053C21.3423 20.3161 21.2034 20.3851 21.0541 20.3986C20.9048 20.4122 20.7558 20.3693 20.6365 20.2785C20.5172 20.1877 20.4362 20.0555 20.4095 19.908L20.3999 19.8V16.8H3.5999V19.8C3.60018 19.9499 3.54431 20.0945 3.44329 20.2053C3.34228 20.3161 3.20344 20.3851 3.05412 20.3986C2.90479 20.4122 2.75581 20.3693 2.6365 20.2785C2.5172 20.1877 2.43621 20.0555 2.4095 19.908L2.3999 19.8V12.6C2.39976 11.9084 2.63857 11.238 3.07592 10.7022C3.51327 10.1665 4.12228 9.79829 4.7999 9.65997V6.59997C4.79979 5.83831 5.08938 5.10512 5.60995 4.54912C6.13052 3.99312 6.84308 3.65594 7.6031 3.60598L7.7999 3.59998H16.1999ZM18.5999 10.8H5.3999C4.95263 10.8 4.52138 10.9665 4.19017 11.2671C3.85897 11.5677 3.65154 11.9808 3.6083 12.426L3.5999 12.6V15.6H20.3999V12.6C20.3999 12.1527 20.2334 11.7214 19.9328 11.3902C19.6322 11.059 19.2191 10.8516 18.7739 10.8084L18.5999 10.8ZM16.1999 4.79998H7.7999C7.35244 4.8 6.92103 4.96668 6.5898 5.26752C6.25857 5.56836 6.05126 5.98178 6.0083 6.42717L5.9999 6.59997V9.59997H7.1999V8.99997C7.1999 8.84084 7.26312 8.68823 7.37564 8.57571C7.48816 8.46319 7.64077 8.39997 7.7999 8.39997H10.7999C10.959 8.39997 11.1116 8.46319 11.2242 8.57571C11.3367 8.68823 11.3999 8.84084 11.3999 8.99997V9.59997H12.5999V8.99997C12.5999 8.84084 12.6631 8.68823 12.7756 8.57571C12.8882 8.46319 13.0408 8.39997 13.1999 8.39997H16.1999C16.359 8.39997 16.5116 8.46319 16.6242 8.57571C16.7367 8.68823 16.7999 8.84084 16.7999 8.99997V9.59997H17.9999V6.59997C17.9999 6.1527 17.8334 5.72145 17.5328 5.39025C17.2322 5.05904 16.8191 4.85161 16.3739 4.80838L16.1999 4.79998Z"
                            fill="#1A1919"
                          />
                        </svg>
                        <span> 3 bedroom</span>
                      </li>
                      <li class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="22"
                          height="23"
                          viewBox="0 0 22 23"
                          fill="none"
                        >
                          <script xmlns="">
                            window._wordtune_extension_installed = true;
                          </script>
                          <g clip-path="url(#clip0_1171_875)">
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M17.6685 18.6667H4.17333V5.17333H17.6666L17.6685 18.6667ZM3 5.50333V18.3367C3 19.1655 3.6745 19.84 4.50333 19.84H17.3367C18.1655 19.84 18.84 19.1655 18.84 18.3367V5.50333C18.84 4.6745 18.1655 4 17.3367 4H4.50333C3.6745 4 3 4.6745 3 5.50333Z"
                              fill="#000"
                              stroke="#000"
                              stroke-width="0.5"
                            ></path>
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M13.9986 8.8402V11.5902H15.1719V7.66687H11.2486V8.8402H13.9986ZM7.83856 15.0002V12.2502H6.66522V16.1735H10.5886V15.0002H7.83856Z"
                              fill="#000"
                              stroke="#000"
                              stroke-width="0.5"
                            ></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_1171_875">
                              <rect
                                width="22"
                                height="22"
                                fill="white"
                                transform="matrix(-1 0 0 1 22 0.5)"
                              ></rect>
                            </clipPath>
                          </defs>
                        </svg>
                        <span> 2766 sqft.</span>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="priceBoxOne">
                  <p class="card-price">
                    For Sale <strong>AED 4,900,000</strong>
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="SliderImg">
                <img
                  src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/f48c843b-271b-4c65-e21a-b1717ff52200/public"
                  alt="SliderOne"
                />
              </div>
              <div class="mt-4 sliderFullContact">
                <div class="SliderTextContent">
                  <h5>3 bedroom Villa for Sale</h5>
                  <p>Zulal 1, Lakes, Dubai</p>

                  <div class="">
                    <ul class="d-flex gap-4 SliderList">
                      <li class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <script xmlns="">
                            window._wordtune_extension_installed = true;
                          </script>
                          <path
                            d="M16.1999 3.59998C16.9616 3.59986 17.6948 3.88945 18.2508 4.41002C18.8068 4.93059 19.1439 5.64315 19.1939 6.40317L19.1999 6.59997V9.65997C19.8429 9.79148 20.4251 10.1301 20.8572 10.6241C21.2894 11.118 21.5478 11.74 21.5927 12.3948L21.5999 12.6V19.8C21.6002 19.9499 21.5443 20.0945 21.4433 20.2053C21.3423 20.3161 21.2034 20.3851 21.0541 20.3986C20.9048 20.4122 20.7558 20.3693 20.6365 20.2785C20.5172 20.1877 20.4362 20.0555 20.4095 19.908L20.3999 19.8V16.8H3.5999V19.8C3.60018 19.9499 3.54431 20.0945 3.44329 20.2053C3.34228 20.3161 3.20344 20.3851 3.05412 20.3986C2.90479 20.4122 2.75581 20.3693 2.6365 20.2785C2.5172 20.1877 2.43621 20.0555 2.4095 19.908L2.3999 19.8V12.6C2.39976 11.9084 2.63857 11.238 3.07592 10.7022C3.51327 10.1665 4.12228 9.79829 4.7999 9.65997V6.59997C4.79979 5.83831 5.08938 5.10512 5.60995 4.54912C6.13052 3.99312 6.84308 3.65594 7.6031 3.60598L7.7999 3.59998H16.1999ZM18.5999 10.8H5.3999C4.95263 10.8 4.52138 10.9665 4.19017 11.2671C3.85897 11.5677 3.65154 11.9808 3.6083 12.426L3.5999 12.6V15.6H20.3999V12.6C20.3999 12.1527 20.2334 11.7214 19.9328 11.3902C19.6322 11.059 19.2191 10.8516 18.7739 10.8084L18.5999 10.8ZM16.1999 4.79998H7.7999C7.35244 4.8 6.92103 4.96668 6.5898 5.26752C6.25857 5.56836 6.05126 5.98178 6.0083 6.42717L5.9999 6.59997V9.59997H7.1999V8.99997C7.1999 8.84084 7.26312 8.68823 7.37564 8.57571C7.48816 8.46319 7.64077 8.39997 7.7999 8.39997H10.7999C10.959 8.39997 11.1116 8.46319 11.2242 8.57571C11.3367 8.68823 11.3999 8.84084 11.3999 8.99997V9.59997H12.5999V8.99997C12.5999 8.84084 12.6631 8.68823 12.7756 8.57571C12.8882 8.46319 13.0408 8.39997 13.1999 8.39997H16.1999C16.359 8.39997 16.5116 8.46319 16.6242 8.57571C16.7367 8.68823 16.7999 8.84084 16.7999 8.99997V9.59997H17.9999V6.59997C17.9999 6.1527 17.8334 5.72145 17.5328 5.39025C17.2322 5.05904 16.8191 4.85161 16.3739 4.80838L16.1999 4.79998Z"
                            fill="#1A1919"
                          />
                        </svg>
                        <span> 3 bedroom</span>
                      </li>
                      <li class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="22"
                          height="23"
                          viewBox="0 0 22 23"
                          fill="none"
                        >
                          <script xmlns="">
                            window._wordtune_extension_installed = true;
                          </script>
                          <g clip-path="url(#clip0_1171_875)">
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M17.6685 18.6667H4.17333V5.17333H17.6666L17.6685 18.6667ZM3 5.50333V18.3367C3 19.1655 3.6745 19.84 4.50333 19.84H17.3367C18.1655 19.84 18.84 19.1655 18.84 18.3367V5.50333C18.84 4.6745 18.1655 4 17.3367 4H4.50333C3.6745 4 3 4.6745 3 5.50333Z"
                              fill="#000"
                              stroke="#000"
                              stroke-width="0.5"
                            ></path>
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M13.9986 8.8402V11.5902H15.1719V7.66687H11.2486V8.8402H13.9986ZM7.83856 15.0002V12.2502H6.66522V16.1735H10.5886V15.0002H7.83856Z"
                              fill="#000"
                              stroke="#000"
                              stroke-width="0.5"
                            ></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_1171_875">
                              <rect
                                width="22"
                                height="22"
                                fill="white"
                                transform="matrix(-1 0 0 1 22 0.5)"
                              ></rect>
                            </clipPath>
                          </defs>
                        </svg>
                        <span> 2766 sqft.</span>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="priceBoxOne">
                  <p class="card-price">
                    For Sale <strong>AED 4,900,000</strong>
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="SliderImg">
                <img
                  src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/f48c843b-271b-4c65-e21a-b1717ff52200/public"
                  alt="SliderOne"
                />
              </div>
              <div class="mt-4 sliderFullContact">
                <div class="SliderTextContent">
                  <h5>3 bedroom Villa for Sale</h5>
                  <p>Zulal 1, Lakes, Dubai</p>

                  <div class="">
                    <ul class="d-flex gap-4 SliderList">
                      <li class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <script xmlns="">
                            window._wordtune_extension_installed = true;
                          </script>
                          <path
                            d="M16.1999 3.59998C16.9616 3.59986 17.6948 3.88945 18.2508 4.41002C18.8068 4.93059 19.1439 5.64315 19.1939 6.40317L19.1999 6.59997V9.65997C19.8429 9.79148 20.4251 10.1301 20.8572 10.6241C21.2894 11.118 21.5478 11.74 21.5927 12.3948L21.5999 12.6V19.8C21.6002 19.9499 21.5443 20.0945 21.4433 20.2053C21.3423 20.3161 21.2034 20.3851 21.0541 20.3986C20.9048 20.4122 20.7558 20.3693 20.6365 20.2785C20.5172 20.1877 20.4362 20.0555 20.4095 19.908L20.3999 19.8V16.8H3.5999V19.8C3.60018 19.9499 3.54431 20.0945 3.44329 20.2053C3.34228 20.3161 3.20344 20.3851 3.05412 20.3986C2.90479 20.4122 2.75581 20.3693 2.6365 20.2785C2.5172 20.1877 2.43621 20.0555 2.4095 19.908L2.3999 19.8V12.6C2.39976 11.9084 2.63857 11.238 3.07592 10.7022C3.51327 10.1665 4.12228 9.79829 4.7999 9.65997V6.59997C4.79979 5.83831 5.08938 5.10512 5.60995 4.54912C6.13052 3.99312 6.84308 3.65594 7.6031 3.60598L7.7999 3.59998H16.1999ZM18.5999 10.8H5.3999C4.95263 10.8 4.52138 10.9665 4.19017 11.2671C3.85897 11.5677 3.65154 11.9808 3.6083 12.426L3.5999 12.6V15.6H20.3999V12.6C20.3999 12.1527 20.2334 11.7214 19.9328 11.3902C19.6322 11.059 19.2191 10.8516 18.7739 10.8084L18.5999 10.8ZM16.1999 4.79998H7.7999C7.35244 4.8 6.92103 4.96668 6.5898 5.26752C6.25857 5.56836 6.05126 5.98178 6.0083 6.42717L5.9999 6.59997V9.59997H7.1999V8.99997C7.1999 8.84084 7.26312 8.68823 7.37564 8.57571C7.48816 8.46319 7.64077 8.39997 7.7999 8.39997H10.7999C10.959 8.39997 11.1116 8.46319 11.2242 8.57571C11.3367 8.68823 11.3999 8.84084 11.3999 8.99997V9.59997H12.5999V8.99997C12.5999 8.84084 12.6631 8.68823 12.7756 8.57571C12.8882 8.46319 13.0408 8.39997 13.1999 8.39997H16.1999C16.359 8.39997 16.5116 8.46319 16.6242 8.57571C16.7367 8.68823 16.7999 8.84084 16.7999 8.99997V9.59997H17.9999V6.59997C17.9999 6.1527 17.8334 5.72145 17.5328 5.39025C17.2322 5.05904 16.8191 4.85161 16.3739 4.80838L16.1999 4.79998Z"
                            fill="#1A1919"
                          />
                        </svg>
                        <span> 3 bedroom</span>
                      </li>
                      <li class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="22"
                          height="23"
                          viewBox="0 0 22 23"
                          fill="none"
                        >
                          <script xmlns="">
                            window._wordtune_extension_installed = true;
                          </script>
                          <g clip-path="url(#clip0_1171_875)">
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M17.6685 18.6667H4.17333V5.17333H17.6666L17.6685 18.6667ZM3 5.50333V18.3367C3 19.1655 3.6745 19.84 4.50333 19.84H17.3367C18.1655 19.84 18.84 19.1655 18.84 18.3367V5.50333C18.84 4.6745 18.1655 4 17.3367 4H4.50333C3.6745 4 3 4.6745 3 5.50333Z"
                              fill="#000"
                              stroke="#000"
                              stroke-width="0.5"
                            ></path>
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M13.9986 8.8402V11.5902H15.1719V7.66687H11.2486V8.8402H13.9986ZM7.83856 15.0002V12.2502H6.66522V16.1735H10.5886V15.0002H7.83856Z"
                              fill="#000"
                              stroke="#000"
                              stroke-width="0.5"
                            ></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_1171_875">
                              <rect
                                width="22"
                                height="22"
                                fill="white"
                                transform="matrix(-1 0 0 1 22 0.5)"
                              ></rect>
                            </clipPath>
                          </defs>
                        </svg>
                        <span> 2766 sqft.</span>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="priceBoxOne">
                  <p class="card-price">
                    For Sale <strong>AED 4,900,000</strong>
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="SliderImg">
                <img
                  src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/f48c843b-271b-4c65-e21a-b1717ff52200/public"
                  alt="SliderOne"
                />
              </div>
              <div class="mt-4 sliderFullContact">
                <div class="SliderTextContent">
                  <h5>3 bedroom Villa for Sale</h5>
                  <p>Zulal 1, Lakes, Dubai</p>

                  <div class="">
                    <ul class="d-flex gap-4 SliderList">
                      <li class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <script xmlns="">
                            window._wordtune_extension_installed = true;
                          </script>
                          <path
                            d="M16.1999 3.59998C16.9616 3.59986 17.6948 3.88945 18.2508 4.41002C18.8068 4.93059 19.1439 5.64315 19.1939 6.40317L19.1999 6.59997V9.65997C19.8429 9.79148 20.4251 10.1301 20.8572 10.6241C21.2894 11.118 21.5478 11.74 21.5927 12.3948L21.5999 12.6V19.8C21.6002 19.9499 21.5443 20.0945 21.4433 20.2053C21.3423 20.3161 21.2034 20.3851 21.0541 20.3986C20.9048 20.4122 20.7558 20.3693 20.6365 20.2785C20.5172 20.1877 20.4362 20.0555 20.4095 19.908L20.3999 19.8V16.8H3.5999V19.8C3.60018 19.9499 3.54431 20.0945 3.44329 20.2053C3.34228 20.3161 3.20344 20.3851 3.05412 20.3986C2.90479 20.4122 2.75581 20.3693 2.6365 20.2785C2.5172 20.1877 2.43621 20.0555 2.4095 19.908L2.3999 19.8V12.6C2.39976 11.9084 2.63857 11.238 3.07592 10.7022C3.51327 10.1665 4.12228 9.79829 4.7999 9.65997V6.59997C4.79979 5.83831 5.08938 5.10512 5.60995 4.54912C6.13052 3.99312 6.84308 3.65594 7.6031 3.60598L7.7999 3.59998H16.1999ZM18.5999 10.8H5.3999C4.95263 10.8 4.52138 10.9665 4.19017 11.2671C3.85897 11.5677 3.65154 11.9808 3.6083 12.426L3.5999 12.6V15.6H20.3999V12.6C20.3999 12.1527 20.2334 11.7214 19.9328 11.3902C19.6322 11.059 19.2191 10.8516 18.7739 10.8084L18.5999 10.8ZM16.1999 4.79998H7.7999C7.35244 4.8 6.92103 4.96668 6.5898 5.26752C6.25857 5.56836 6.05126 5.98178 6.0083 6.42717L5.9999 6.59997V9.59997H7.1999V8.99997C7.1999 8.84084 7.26312 8.68823 7.37564 8.57571C7.48816 8.46319 7.64077 8.39997 7.7999 8.39997H10.7999C10.959 8.39997 11.1116 8.46319 11.2242 8.57571C11.3367 8.68823 11.3999 8.84084 11.3999 8.99997V9.59997H12.5999V8.99997C12.5999 8.84084 12.6631 8.68823 12.7756 8.57571C12.8882 8.46319 13.0408 8.39997 13.1999 8.39997H16.1999C16.359 8.39997 16.5116 8.46319 16.6242 8.57571C16.7367 8.68823 16.7999 8.84084 16.7999 8.99997V9.59997H17.9999V6.59997C17.9999 6.1527 17.8334 5.72145 17.5328 5.39025C17.2322 5.05904 16.8191 4.85161 16.3739 4.80838L16.1999 4.79998Z"
                            fill="#1A1919"
                          />
                        </svg>
                        <span> 3 bedroom</span>
                      </li>
                      <li class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="22"
                          height="23"
                          viewBox="0 0 22 23"
                          fill="none"
                        >
                          <script xmlns="">
                            window._wordtune_extension_installed = true;
                          </script>
                          <g clip-path="url(#clip0_1171_875)">
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M17.6685 18.6667H4.17333V5.17333H17.6666L17.6685 18.6667ZM3 5.50333V18.3367C3 19.1655 3.6745 19.84 4.50333 19.84H17.3367C18.1655 19.84 18.84 19.1655 18.84 18.3367V5.50333C18.84 4.6745 18.1655 4 17.3367 4H4.50333C3.6745 4 3 4.6745 3 5.50333Z"
                              fill="#000"
                              stroke="#000"
                              stroke-width="0.5"
                            ></path>
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M13.9986 8.8402V11.5902H15.1719V7.66687H11.2486V8.8402H13.9986ZM7.83856 15.0002V12.2502H6.66522V16.1735H10.5886V15.0002H7.83856Z"
                              fill="#000"
                              stroke="#000"
                              stroke-width="0.5"
                            ></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_1171_875">
                              <rect
                                width="22"
                                height="22"
                                fill="white"
                                transform="matrix(-1 0 0 1 22 0.5)"
                              ></rect>
                            </clipPath>
                          </defs>
                        </svg>
                        <span> 2766 sqft.</span>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="priceBoxOne">
                  <p class="card-price">
                    For Sale <strong>AED 4,900,000</strong>
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="SliderImg">
                <img
                  src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/f48c843b-271b-4c65-e21a-b1717ff52200/public"
                  alt="SliderOne"
                />
              </div>
              <div class="mt-4 sliderFullContact">
                <div class="SliderTextContent">
                  <h5>3 bedroom Villa for Sale</h5>
                  <p>Zulal 1, Lakes, Dubai</p>

                  <div class="">
                    <ul class="d-flex gap-4 SliderList">
                      <li class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <script xmlns="">
                            window._wordtune_extension_installed = true;
                          </script>
                          <path
                            d="M16.1999 3.59998C16.9616 3.59986 17.6948 3.88945 18.2508 4.41002C18.8068 4.93059 19.1439 5.64315 19.1939 6.40317L19.1999 6.59997V9.65997C19.8429 9.79148 20.4251 10.1301 20.8572 10.6241C21.2894 11.118 21.5478 11.74 21.5927 12.3948L21.5999 12.6V19.8C21.6002 19.9499 21.5443 20.0945 21.4433 20.2053C21.3423 20.3161 21.2034 20.3851 21.0541 20.3986C20.9048 20.4122 20.7558 20.3693 20.6365 20.2785C20.5172 20.1877 20.4362 20.0555 20.4095 19.908L20.3999 19.8V16.8H3.5999V19.8C3.60018 19.9499 3.54431 20.0945 3.44329 20.2053C3.34228 20.3161 3.20344 20.3851 3.05412 20.3986C2.90479 20.4122 2.75581 20.3693 2.6365 20.2785C2.5172 20.1877 2.43621 20.0555 2.4095 19.908L2.3999 19.8V12.6C2.39976 11.9084 2.63857 11.238 3.07592 10.7022C3.51327 10.1665 4.12228 9.79829 4.7999 9.65997V6.59997C4.79979 5.83831 5.08938 5.10512 5.60995 4.54912C6.13052 3.99312 6.84308 3.65594 7.6031 3.60598L7.7999 3.59998H16.1999ZM18.5999 10.8H5.3999C4.95263 10.8 4.52138 10.9665 4.19017 11.2671C3.85897 11.5677 3.65154 11.9808 3.6083 12.426L3.5999 12.6V15.6H20.3999V12.6C20.3999 12.1527 20.2334 11.7214 19.9328 11.3902C19.6322 11.059 19.2191 10.8516 18.7739 10.8084L18.5999 10.8ZM16.1999 4.79998H7.7999C7.35244 4.8 6.92103 4.96668 6.5898 5.26752C6.25857 5.56836 6.05126 5.98178 6.0083 6.42717L5.9999 6.59997V9.59997H7.1999V8.99997C7.1999 8.84084 7.26312 8.68823 7.37564 8.57571C7.48816 8.46319 7.64077 8.39997 7.7999 8.39997H10.7999C10.959 8.39997 11.1116 8.46319 11.2242 8.57571C11.3367 8.68823 11.3999 8.84084 11.3999 8.99997V9.59997H12.5999V8.99997C12.5999 8.84084 12.6631 8.68823 12.7756 8.57571C12.8882 8.46319 13.0408 8.39997 13.1999 8.39997H16.1999C16.359 8.39997 16.5116 8.46319 16.6242 8.57571C16.7367 8.68823 16.7999 8.84084 16.7999 8.99997V9.59997H17.9999V6.59997C17.9999 6.1527 17.8334 5.72145 17.5328 5.39025C17.2322 5.05904 16.8191 4.85161 16.3739 4.80838L16.1999 4.79998Z"
                            fill="#1A1919"
                          />
                        </svg>
                        <span> 3 bedroom</span>
                      </li>
                      <li class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="22"
                          height="23"
                          viewBox="0 0 22 23"
                          fill="none"
                        >
                          <script xmlns="">
                            window._wordtune_extension_installed = true;
                          </script>
                          <g clip-path="url(#clip0_1171_875)">
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M17.6685 18.6667H4.17333V5.17333H17.6666L17.6685 18.6667ZM3 5.50333V18.3367C3 19.1655 3.6745 19.84 4.50333 19.84H17.3367C18.1655 19.84 18.84 19.1655 18.84 18.3367V5.50333C18.84 4.6745 18.1655 4 17.3367 4H4.50333C3.6745 4 3 4.6745 3 5.50333Z"
                              fill="#000"
                              stroke="#000"
                              stroke-width="0.5"
                            ></path>
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M13.9986 8.8402V11.5902H15.1719V7.66687H11.2486V8.8402H13.9986ZM7.83856 15.0002V12.2502H6.66522V16.1735H10.5886V15.0002H7.83856Z"
                              fill="#000"
                              stroke="#000"
                              stroke-width="0.5"
                            ></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_1171_875">
                              <rect
                                width="22"
                                height="22"
                                fill="white"
                                transform="matrix(-1 0 0 1 22 0.5)"
                              ></rect>
                            </clipPath>
                          </defs>
                        </svg>
                        <span> 2766 sqft.</span>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="priceBoxOne">
                  <p class="card-price">
                    For Sale <strong>AED 4,900,000</strong>
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="SliderImg">
                <img
                  src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/f48c843b-271b-4c65-e21a-b1717ff52200/public"
                  alt="SliderOne"
                />
              </div>
              <div class="mt-4 sliderFullContact">
                <div class="SliderTextContent">
                  <h5>3 bedroom Villa for Sale</h5>
                  <p>Zulal 1, Lakes, Dubai</p>

                  <div class="">
                    <ul class="d-flex gap-4 SliderList">
                      <li class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <script xmlns="">
                            window._wordtune_extension_installed = true;
                          </script>
                          <path
                            d="M16.1999 3.59998C16.9616 3.59986 17.6948 3.88945 18.2508 4.41002C18.8068 4.93059 19.1439 5.64315 19.1939 6.40317L19.1999 6.59997V9.65997C19.8429 9.79148 20.4251 10.1301 20.8572 10.6241C21.2894 11.118 21.5478 11.74 21.5927 12.3948L21.5999 12.6V19.8C21.6002 19.9499 21.5443 20.0945 21.4433 20.2053C21.3423 20.3161 21.2034 20.3851 21.0541 20.3986C20.9048 20.4122 20.7558 20.3693 20.6365 20.2785C20.5172 20.1877 20.4362 20.0555 20.4095 19.908L20.3999 19.8V16.8H3.5999V19.8C3.60018 19.9499 3.54431 20.0945 3.44329 20.2053C3.34228 20.3161 3.20344 20.3851 3.05412 20.3986C2.90479 20.4122 2.75581 20.3693 2.6365 20.2785C2.5172 20.1877 2.43621 20.0555 2.4095 19.908L2.3999 19.8V12.6C2.39976 11.9084 2.63857 11.238 3.07592 10.7022C3.51327 10.1665 4.12228 9.79829 4.7999 9.65997V6.59997C4.79979 5.83831 5.08938 5.10512 5.60995 4.54912C6.13052 3.99312 6.84308 3.65594 7.6031 3.60598L7.7999 3.59998H16.1999ZM18.5999 10.8H5.3999C4.95263 10.8 4.52138 10.9665 4.19017 11.2671C3.85897 11.5677 3.65154 11.9808 3.6083 12.426L3.5999 12.6V15.6H20.3999V12.6C20.3999 12.1527 20.2334 11.7214 19.9328 11.3902C19.6322 11.059 19.2191 10.8516 18.7739 10.8084L18.5999 10.8ZM16.1999 4.79998H7.7999C7.35244 4.8 6.92103 4.96668 6.5898 5.26752C6.25857 5.56836 6.05126 5.98178 6.0083 6.42717L5.9999 6.59997V9.59997H7.1999V8.99997C7.1999 8.84084 7.26312 8.68823 7.37564 8.57571C7.48816 8.46319 7.64077 8.39997 7.7999 8.39997H10.7999C10.959 8.39997 11.1116 8.46319 11.2242 8.57571C11.3367 8.68823 11.3999 8.84084 11.3999 8.99997V9.59997H12.5999V8.99997C12.5999 8.84084 12.6631 8.68823 12.7756 8.57571C12.8882 8.46319 13.0408 8.39997 13.1999 8.39997H16.1999C16.359 8.39997 16.5116 8.46319 16.6242 8.57571C16.7367 8.68823 16.7999 8.84084 16.7999 8.99997V9.59997H17.9999V6.59997C17.9999 6.1527 17.8334 5.72145 17.5328 5.39025C17.2322 5.05904 16.8191 4.85161 16.3739 4.80838L16.1999 4.79998Z"
                            fill="#1A1919"
                          />
                        </svg>
                        <span> 3 bedroom</span>
                      </li>
                      <li class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="22"
                          height="23"
                          viewBox="0 0 22 23"
                          fill="none"
                        >
                          <script xmlns="">
                            window._wordtune_extension_installed = true;
                          </script>
                          <g clip-path="url(#clip0_1171_875)">
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M17.6685 18.6667H4.17333V5.17333H17.6666L17.6685 18.6667ZM3 5.50333V18.3367C3 19.1655 3.6745 19.84 4.50333 19.84H17.3367C18.1655 19.84 18.84 19.1655 18.84 18.3367V5.50333C18.84 4.6745 18.1655 4 17.3367 4H4.50333C3.6745 4 3 4.6745 3 5.50333Z"
                              fill="#000"
                              stroke="#000"
                              stroke-width="0.5"
                            ></path>
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M13.9986 8.8402V11.5902H15.1719V7.66687H11.2486V8.8402H13.9986ZM7.83856 15.0002V12.2502H6.66522V16.1735H10.5886V15.0002H7.83856Z"
                              fill="#000"
                              stroke="#000"
                              stroke-width="0.5"
                            ></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_1171_875">
                              <rect
                                width="22"
                                height="22"
                                fill="white"
                                transform="matrix(-1 0 0 1 22 0.5)"
                              ></rect>
                            </clipPath>
                          </defs>
                        </svg>
                        <span> 2766 sqft.</span>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="priceBoxOne">
                  <p class="card-price">
                    For Sale <strong>AED 4,900,000</strong>
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="SliderImg">
                <img
                  src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/f48c843b-271b-4c65-e21a-b1717ff52200/public"
                  alt="SliderOne"
                />
              </div>
              <div class="mt-4 sliderFullContact">
                <div class="SliderTextContent">
                  <h5>3 bedroom Villa for Sale</h5>
                  <p>Zulal 1, Lakes, Dubai</p>

                  <div class="">
                    <ul class="d-flex gap-4 SliderList">
                      <li class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <script xmlns="">
                            window._wordtune_extension_installed = true;
                          </script>
                          <path
                            d="M16.1999 3.59998C16.9616 3.59986 17.6948 3.88945 18.2508 4.41002C18.8068 4.93059 19.1439 5.64315 19.1939 6.40317L19.1999 6.59997V9.65997C19.8429 9.79148 20.4251 10.1301 20.8572 10.6241C21.2894 11.118 21.5478 11.74 21.5927 12.3948L21.5999 12.6V19.8C21.6002 19.9499 21.5443 20.0945 21.4433 20.2053C21.3423 20.3161 21.2034 20.3851 21.0541 20.3986C20.9048 20.4122 20.7558 20.3693 20.6365 20.2785C20.5172 20.1877 20.4362 20.0555 20.4095 19.908L20.3999 19.8V16.8H3.5999V19.8C3.60018 19.9499 3.54431 20.0945 3.44329 20.2053C3.34228 20.3161 3.20344 20.3851 3.05412 20.3986C2.90479 20.4122 2.75581 20.3693 2.6365 20.2785C2.5172 20.1877 2.43621 20.0555 2.4095 19.908L2.3999 19.8V12.6C2.39976 11.9084 2.63857 11.238 3.07592 10.7022C3.51327 10.1665 4.12228 9.79829 4.7999 9.65997V6.59997C4.79979 5.83831 5.08938 5.10512 5.60995 4.54912C6.13052 3.99312 6.84308 3.65594 7.6031 3.60598L7.7999 3.59998H16.1999ZM18.5999 10.8H5.3999C4.95263 10.8 4.52138 10.9665 4.19017 11.2671C3.85897 11.5677 3.65154 11.9808 3.6083 12.426L3.5999 12.6V15.6H20.3999V12.6C20.3999 12.1527 20.2334 11.7214 19.9328 11.3902C19.6322 11.059 19.2191 10.8516 18.7739 10.8084L18.5999 10.8ZM16.1999 4.79998H7.7999C7.35244 4.8 6.92103 4.96668 6.5898 5.26752C6.25857 5.56836 6.05126 5.98178 6.0083 6.42717L5.9999 6.59997V9.59997H7.1999V8.99997C7.1999 8.84084 7.26312 8.68823 7.37564 8.57571C7.48816 8.46319 7.64077 8.39997 7.7999 8.39997H10.7999C10.959 8.39997 11.1116 8.46319 11.2242 8.57571C11.3367 8.68823 11.3999 8.84084 11.3999 8.99997V9.59997H12.5999V8.99997C12.5999 8.84084 12.6631 8.68823 12.7756 8.57571C12.8882 8.46319 13.0408 8.39997 13.1999 8.39997H16.1999C16.359 8.39997 16.5116 8.46319 16.6242 8.57571C16.7367 8.68823 16.7999 8.84084 16.7999 8.99997V9.59997H17.9999V6.59997C17.9999 6.1527 17.8334 5.72145 17.5328 5.39025C17.2322 5.05904 16.8191 4.85161 16.3739 4.80838L16.1999 4.79998Z"
                            fill="#1A1919"
                          />
                        </svg>
                        <span> 3 bedroom</span>
                      </li>
                      <li class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="22"
                          height="23"
                          viewBox="0 0 22 23"
                          fill="none"
                        >
                          <script xmlns="">
                            window._wordtune_extension_installed = true;
                          </script>
                          <g clip-path="url(#clip0_1171_875)">
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M17.6685 18.6667H4.17333V5.17333H17.6666L17.6685 18.6667ZM3 5.50333V18.3367C3 19.1655 3.6745 19.84 4.50333 19.84H17.3367C18.1655 19.84 18.84 19.1655 18.84 18.3367V5.50333C18.84 4.6745 18.1655 4 17.3367 4H4.50333C3.6745 4 3 4.6745 3 5.50333Z"
                              fill="#000"
                              stroke="#000"
                              stroke-width="0.5"
                            ></path>
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M13.9986 8.8402V11.5902H15.1719V7.66687H11.2486V8.8402H13.9986ZM7.83856 15.0002V12.2502H6.66522V16.1735H10.5886V15.0002H7.83856Z"
                              fill="#000"
                              stroke="#000"
                              stroke-width="0.5"
                            ></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_1171_875">
                              <rect
                                width="22"
                                height="22"
                                fill="white"
                                transform="matrix(-1 0 0 1 22 0.5)"
                              ></rect>
                            </clipPath>
                          </defs>
                        </svg>
                        <span> 2766 sqft.</span>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="priceBoxOne">
                  <p class="card-price">
                    For Sale <strong>AED 4,900,000</strong>
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="SliderImg">
                <img
                  src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/f48c843b-271b-4c65-e21a-b1717ff52200/public"
                  alt="SliderOne"
                />
              </div>
              <div class="mt-4 sliderFullContact">
                <div class="SliderTextContent">
                  <h5>3 bedroom Villa for Sale</h5>
                  <p>Zulal 1, Lakes, Dubai</p>

                  <div class="">
                    <ul class="d-flex gap-4 SliderList">
                      <li class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <script xmlns="">
                            window._wordtune_extension_installed = true;
                          </script>
                          <path
                            d="M16.1999 3.59998C16.9616 3.59986 17.6948 3.88945 18.2508 4.41002C18.8068 4.93059 19.1439 5.64315 19.1939 6.40317L19.1999 6.59997V9.65997C19.8429 9.79148 20.4251 10.1301 20.8572 10.6241C21.2894 11.118 21.5478 11.74 21.5927 12.3948L21.5999 12.6V19.8C21.6002 19.9499 21.5443 20.0945 21.4433 20.2053C21.3423 20.3161 21.2034 20.3851 21.0541 20.3986C20.9048 20.4122 20.7558 20.3693 20.6365 20.2785C20.5172 20.1877 20.4362 20.0555 20.4095 19.908L20.3999 19.8V16.8H3.5999V19.8C3.60018 19.9499 3.54431 20.0945 3.44329 20.2053C3.34228 20.3161 3.20344 20.3851 3.05412 20.3986C2.90479 20.4122 2.75581 20.3693 2.6365 20.2785C2.5172 20.1877 2.43621 20.0555 2.4095 19.908L2.3999 19.8V12.6C2.39976 11.9084 2.63857 11.238 3.07592 10.7022C3.51327 10.1665 4.12228 9.79829 4.7999 9.65997V6.59997C4.79979 5.83831 5.08938 5.10512 5.60995 4.54912C6.13052 3.99312 6.84308 3.65594 7.6031 3.60598L7.7999 3.59998H16.1999ZM18.5999 10.8H5.3999C4.95263 10.8 4.52138 10.9665 4.19017 11.2671C3.85897 11.5677 3.65154 11.9808 3.6083 12.426L3.5999 12.6V15.6H20.3999V12.6C20.3999 12.1527 20.2334 11.7214 19.9328 11.3902C19.6322 11.059 19.2191 10.8516 18.7739 10.8084L18.5999 10.8ZM16.1999 4.79998H7.7999C7.35244 4.8 6.92103 4.96668 6.5898 5.26752C6.25857 5.56836 6.05126 5.98178 6.0083 6.42717L5.9999 6.59997V9.59997H7.1999V8.99997C7.1999 8.84084 7.26312 8.68823 7.37564 8.57571C7.48816 8.46319 7.64077 8.39997 7.7999 8.39997H10.7999C10.959 8.39997 11.1116 8.46319 11.2242 8.57571C11.3367 8.68823 11.3999 8.84084 11.3999 8.99997V9.59997H12.5999V8.99997C12.5999 8.84084 12.6631 8.68823 12.7756 8.57571C12.8882 8.46319 13.0408 8.39997 13.1999 8.39997H16.1999C16.359 8.39997 16.5116 8.46319 16.6242 8.57571C16.7367 8.68823 16.7999 8.84084 16.7999 8.99997V9.59997H17.9999V6.59997C17.9999 6.1527 17.8334 5.72145 17.5328 5.39025C17.2322 5.05904 16.8191 4.85161 16.3739 4.80838L16.1999 4.79998Z"
                            fill="#1A1919"
                          />
                        </svg>
                        <span> 3 bedroom</span>
                      </li>
                      <li class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="22"
                          height="23"
                          viewBox="0 0 22 23"
                          fill="none"
                        >
                          <script xmlns="">
                            window._wordtune_extension_installed = true;
                          </script>
                          <g clip-path="url(#clip0_1171_875)">
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M17.6685 18.6667H4.17333V5.17333H17.6666L17.6685 18.6667ZM3 5.50333V18.3367C3 19.1655 3.6745 19.84 4.50333 19.84H17.3367C18.1655 19.84 18.84 19.1655 18.84 18.3367V5.50333C18.84 4.6745 18.1655 4 17.3367 4H4.50333C3.6745 4 3 4.6745 3 5.50333Z"
                              fill="#000"
                              stroke="#000"
                              stroke-width="0.5"
                            ></path>
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M13.9986 8.8402V11.5902H15.1719V7.66687H11.2486V8.8402H13.9986ZM7.83856 15.0002V12.2502H6.66522V16.1735H10.5886V15.0002H7.83856Z"
                              fill="#000"
                              stroke="#000"
                              stroke-width="0.5"
                            ></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_1171_875">
                              <rect
                                width="22"
                                height="22"
                                fill="white"
                                transform="matrix(-1 0 0 1 22 0.5)"
                              ></rect>
                            </clipPath>
                          </defs>
                        </svg>
                        <span> 2766 sqft.</span>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="priceBoxOne">
                  <p class="card-price">
                    For Sale <strong>AED 4,900,000</strong>
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="SliderImg">
                <img
                  src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/f48c843b-271b-4c65-e21a-b1717ff52200/public"
                  alt="SliderOne"
                />
              </div>
              <div class="mt-4 sliderFullContact">
                <div class="SliderTextContent">
                  <h5>3 bedroom Villa for Sale</h5>
                  <p>Zulal 1, Lakes, Dubai</p>

                  <div class="">
                    <ul class="d-flex gap-4 SliderList">
                      <li class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <script xmlns="">
                            window._wordtune_extension_installed = true;
                          </script>
                          <path
                            d="M16.1999 3.59998C16.9616 3.59986 17.6948 3.88945 18.2508 4.41002C18.8068 4.93059 19.1439 5.64315 19.1939 6.40317L19.1999 6.59997V9.65997C19.8429 9.79148 20.4251 10.1301 20.8572 10.6241C21.2894 11.118 21.5478 11.74 21.5927 12.3948L21.5999 12.6V19.8C21.6002 19.9499 21.5443 20.0945 21.4433 20.2053C21.3423 20.3161 21.2034 20.3851 21.0541 20.3986C20.9048 20.4122 20.7558 20.3693 20.6365 20.2785C20.5172 20.1877 20.4362 20.0555 20.4095 19.908L20.3999 19.8V16.8H3.5999V19.8C3.60018 19.9499 3.54431 20.0945 3.44329 20.2053C3.34228 20.3161 3.20344 20.3851 3.05412 20.3986C2.90479 20.4122 2.75581 20.3693 2.6365 20.2785C2.5172 20.1877 2.43621 20.0555 2.4095 19.908L2.3999 19.8V12.6C2.39976 11.9084 2.63857 11.238 3.07592 10.7022C3.51327 10.1665 4.12228 9.79829 4.7999 9.65997V6.59997C4.79979 5.83831 5.08938 5.10512 5.60995 4.54912C6.13052 3.99312 6.84308 3.65594 7.6031 3.60598L7.7999 3.59998H16.1999ZM18.5999 10.8H5.3999C4.95263 10.8 4.52138 10.9665 4.19017 11.2671C3.85897 11.5677 3.65154 11.9808 3.6083 12.426L3.5999 12.6V15.6H20.3999V12.6C20.3999 12.1527 20.2334 11.7214 19.9328 11.3902C19.6322 11.059 19.2191 10.8516 18.7739 10.8084L18.5999 10.8ZM16.1999 4.79998H7.7999C7.35244 4.8 6.92103 4.96668 6.5898 5.26752C6.25857 5.56836 6.05126 5.98178 6.0083 6.42717L5.9999 6.59997V9.59997H7.1999V8.99997C7.1999 8.84084 7.26312 8.68823 7.37564 8.57571C7.48816 8.46319 7.64077 8.39997 7.7999 8.39997H10.7999C10.959 8.39997 11.1116 8.46319 11.2242 8.57571C11.3367 8.68823 11.3999 8.84084 11.3999 8.99997V9.59997H12.5999V8.99997C12.5999 8.84084 12.6631 8.68823 12.7756 8.57571C12.8882 8.46319 13.0408 8.39997 13.1999 8.39997H16.1999C16.359 8.39997 16.5116 8.46319 16.6242 8.57571C16.7367 8.68823 16.7999 8.84084 16.7999 8.99997V9.59997H17.9999V6.59997C17.9999 6.1527 17.8334 5.72145 17.5328 5.39025C17.2322 5.05904 16.8191 4.85161 16.3739 4.80838L16.1999 4.79998Z"
                            fill="#1A1919"
                          />
                        </svg>
                        <span> 3 bedroom</span>
                      </li>
                      <li class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="22"
                          height="23"
                          viewBox="0 0 22 23"
                          fill="none"
                        >
                          <script xmlns="">
                            window._wordtune_extension_installed = true;
                          </script>
                          <g clip-path="url(#clip0_1171_875)">
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M17.6685 18.6667H4.17333V5.17333H17.6666L17.6685 18.6667ZM3 5.50333V18.3367C3 19.1655 3.6745 19.84 4.50333 19.84H17.3367C18.1655 19.84 18.84 19.1655 18.84 18.3367V5.50333C18.84 4.6745 18.1655 4 17.3367 4H4.50333C3.6745 4 3 4.6745 3 5.50333Z"
                              fill="#000"
                              stroke="#000"
                              stroke-width="0.5"
                            ></path>
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M13.9986 8.8402V11.5902H15.1719V7.66687H11.2486V8.8402H13.9986ZM7.83856 15.0002V12.2502H6.66522V16.1735H10.5886V15.0002H7.83856Z"
                              fill="#000"
                              stroke="#000"
                              stroke-width="0.5"
                            ></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_1171_875">
                              <rect
                                width="22"
                                height="22"
                                fill="white"
                                transform="matrix(-1 0 0 1 22 0.5)"
                              ></rect>
                            </clipPath>
                          </defs>
                        </svg>
                        <span> 2766 sqft.</span>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="priceBoxOne">
                  <p class="card-price">
                    For Sale <strong>AED 4,900,000</strong>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ContactFrom start -->
  <section class="container contactForm my-5">
    <div class="row" style="font-family: ui-sans-serif">
      <div class="col-lg-6 col-sm-12 my-auto">
        <h3>
          We're <span style="color: rgb(243, 94, 94)">always</span> here to
          help.<br />
          Book a call with our team
        </h3>
        <p class="pe-5">
          As a truly customer-centric real estate agency, we offer a range of
          related services that are designed to make your property journey
          stress-free and successful from start to end.
        </p>
      </div>
      <div class="col-lg-6 col-sm-12">
        <form>
          <div class="mb-3">
            <label for="name" style="color: #9b9fa3">Name*</label>
            <input
              type="text"
              class="form-control"
              id="name"
              style="
                border-radius: 0.2rem;
                padding: 0.375rem 0.75rem;
                border: 1px solid #9b9fa3;
                width: 100%;
              "
              required
            />
          </div>
          <div class="mb-3">
            <label for="email" style="color: #9b9fa3">Email Address*</label>
            <input
              type="email"
              class="form-control"
              id="email"
              style="
                border-radius: 0.2rem;
                padding: 0.375rem 0.75rem;
                border: 1px solid #9b9fa3;
                width: 100%;
              "
              required
            />
          </div>
          <div class="mb-3">
            <label for="phone" style="color: #9b9fa3">Phone Number*</label>
            <input
              type="tel"
              class="form-control"
              id="phone"
              style="
                border-radius: 0.2rem;
                padding: 0.375rem 0.75rem;
                border: 1px solid #9b9fa3;
                width: 100%;
              "
              required
            />
          </div>
          <p style="font-size: 12px; color: #9b9fa3">
            By clicking Submit, you agree to our Terms & Conditions and Privacy
            Policy.
          </p>
          <button
            type="submit"
            class="btn btn-green rounded-0"
            style="background-color: #1F663A; color: #ffffff; border: none"
          >
            Submit
          </button>
        </form>
      </div>
    </div>
  </section>
  

  <!-- whatApp Modal start -->

  <!-- Button trigger modal -->

  <!-- Modal -->
  <div
    class="modal fade"
    id="exampleModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="border-bottom: 0">
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div
          class="modal-body d-flex justify-content-center flex-column text-center"
        >
          <div class="ModalLogo">
            <img
              src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/40c5df7c-44b2-4084-8141-da2a0a97a700/public"
              alt="LogoImg"
              srcset=""
            />
          </div>
          <p class="para">Contact Money Plant Real Estate on</p>

          <div class="whatsappBtnOne">
            <div
              class="whatsAppBox mt-4"
              style="background-color: #1f663a; width: 100%"
            >
              <!-- <p class="mb-0"><i class="fa-brands fa-whatsapp me-2"></i>WHATSAPP</p> -->
              <a
                href="tel:+"
                class="d-flex justify-content-center gap-2 align-items-center"
              >
                <div class="whtIcon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="30"
                    height="30"
                    viewBox="0 0 32 32"
                    fill="none"
                  >
                    <script xmlns="">
                      window._wordtune_extension_installed = true;
                    </script>
                    <path
                      d="M16.004 0h-.008C7.174 0 0 7.176 0 16c0 3.5 1.128 6.744 3.046 9.378l-1.994 5.944 6.15-1.966C9.732 31.032 12.75 32 16.004 32 24.826 32 32 24.822 32 16S24.826 0 16.004 0z"
                      fill="#4CAF50"
                    />
                    <path
                      d="M25.314 22.594c-.386 1.09-1.918 1.994-3.14 2.258-.836.178-1.928.32-5.604-1.204-4.702-1.948-7.73-6.726-7.966-7.036-.226-.31-1.9-2.53-1.9-4.826S7.87 8.372 8.34 7.892c.386-.394 1.024-.574 1.636-.574.198 0 .376.01.536.018.47.02.706.048 1.016.79.386.93 1.326 3.226 1.438 3.462.114.236.228.556.068.866-.15.32-.282.462-.518.734-.236.272-.46.48-.696.772-.216.254-.46.526-.188.996.272.46 1.212 1.994 2.596 3.226 1.786 1.59 3.234 2.098 3.752 2.314.386.16.846.122 1.128-.178.358-.386.8-1.026 1.25-1.656.32-.452.724-.508 1.148-.348.432.15 2.718 1.28 3.188 1.514.47.236.78.348.894.546.112.198.112 1.128-.274 2.22z"
                      fill="#FAFAFA"
                    />
                  </svg>
                </div>
                WHATSAPP
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- whatApp Modal end -->

  <!-- Speak with us start -->

  <div
    class="modal fade"
    id="exampleModalOneOne"
    tabindex="-1"
    aria-labelledby="exampleModalLabelOneOne"
    aria-hidden="true"
  >
    <div class="modal-dialog customWidthModalDialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title modalHeader" id="exampleModalLabel">
            Contact Money Plant
          </h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="contactForm">
            <form class="" action="" method="post">
              <div class="mb-3">
                <label for="Name" class="form-label">Name*</label>
                <input
                  type="text"
                  class="form-control"
                  id="Name"
                  aria-describedby="NameHelp"
                  placeholder="Your Name"
                />
              </div>
              <div class="mb-3">
                <label for="Email-Address" class="form-label"
                  >Email Address*</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="Email-Address"
                  aria-describedby="NameHelp"
                  placeholder="Your Name"
                />
              </div>
              <div class="mb-3">
                <label for="telephone" class="form-label">Telephone*</label>
                <input
                  type="text"
                  class="form-control"
                  id="Email-Address"
                  aria-describedby="EmailHelp"
                  placeholder="Phone Number"
                />
              </div>

              <div class="mb-3">
                <label for="Listing-Type" class="form-label"
                  >Listing Type*</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="Listing-Type"
                  aria-describedby="Listing-TypeHelp"
                  placeholder="Sell"
                />
              </div>
              <div class="mb-3">
                <label for="Property-location" class="form-label"
                  >Property location*</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="Property-location"
                  aria-describedby="Listing-Property-locationHelp"
                  placeholder="Tower or Community"
                />
              </div>

              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"
                  >Write Your message here</label
                >
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                  placeholder="Write Your message here"
                ></textarea>
              </div>

              <div class="mb-3 form-check">
                <input
                  type="checkbox"
                  class="form-check-input"
                  id="exampleCheck1"
                />
                <label class="form-check-label" for="exampleCheck1"
                  >By clicking Submit, you agree to our Terms & Conditions and
                  Privacy Policy.</label
                >
              </div>

              <!-- <p class="SubmitBtn">By clicking Submit, you agree to our Terms & Conditions and Privacy Policy.</p> -->
              <button
                type="submit"
                class="btn mt-4 btn-customClor"
                style="width: 100%"
              >
                SEND MESSAGE
              </button>

              <div
                class="mt-5 d-flex justify-content-start align-items-center gap-2"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="90"
                  height="36"
                  viewBox="0 0 90 36"
                  fill="none"
                >
                  <script xmlns="">
                    window._wordtune_extension_installed = true;
                  </script>
                  <rect width="90" height="36" fill="url(#pattern0)" />
                  <defs>
                    <pattern
                      id="pattern0"
                      patternContentUnits="objectBoundingBox"
                      width="1"
                      height="1"
                    >
                      <use
                        xlink:href="#image0"
                        transform="translate(0 -0.00277218) scale(0.00100806 0.00252016)"
                      />
                    </pattern>
                    <image
                      id="image0"
                      width="992"
                      height="399"
                      xlink:href="data:image/png;base64,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iIAIiIAIiIAIiIAI5IOASwM8ML73wnCr12nns8heczDofrtixYqHli1btoT/s2LUrcQInVr0ephBvhW67El6Hs719TiPKLqfl5+z0MtGvrOSTnnhLj1EQAREQAREQAREQAREIDME3BngRcb35pmhGIGgGKizMeAeZjr3zMWLF88gyLxMYTaD3Kaxm7vevpXd0NBwFLra2nHrZMl8Olvaocs49LSZADpEQAREQAREQAREQAREQAREoCQBVwY464kvxZipmzXf6PomqTIZdxfGm/3O/egpo/k2lf5aXLd+/frtyNpxm6J+KP8OzqIxbsY3nSansLld+7XypqIOERABERABERABERABERABEWgl4MYAD4zvr2KE5X7aOUbbdNz/YHw+GGx21pog9fQDo/U59DV3bf/+/ffh811Hw2XXDOUB2+n8okCPeko66SoCIiACIiACIiACIiACIlADARcGON/5PhHDa2yGDK8aUHebz0OPoOd9jHY/wm/7zraOgADT7m0Tt0dZgjAcRkfz2/un5+Yi59dJy+L17kpPERABERABERABERABERABEeiUQPdO7yR0A4NrLFFdmsXpxxUiMkNtBtOUb9VIaYXE8Mb09IHMEDiOfHEoztUu6qRnMyKeKeO78vSUTxEQAREQAREQgfogwKzWe9HUNt51cTDbtDeC5GVvJRdMJUQ4AqmOgNsaYMQ/L4/GN0Zay/puDO8HZXhXn0lhtoCnbK34j5ghcQp5ZDRuTPUhRfuEjO9oeSo0ERABERABERABERABEagnAqkZ4DbVGNA/xqjaLk/AzUBDp6cwvCfK8I4kZZcvWrToWjpr7mCN+NcJMbWp6YHxfaVGviNJVwUiAiIgAiIgAiIgAiIgAnVHIBUD3KYXQ/p7OTS+p69Zs+aaYD1z3WWmOBUORsQvpOPmLgzhCcSV9G75toZf087jTGSFLQIiIAIiIAIiIAIiIAI5J5CGAd7ISOblHqYTR5W2GIQzCetORkZv5aw1JlGBLREOjO1zX6cHm7VZJ872/D+ohNfILmnkOzKUCkgEREAEREAEREAEREAE6ppA4gY4htP3MZpOywP1wDCbjD4T6/lzYmmkZWCI78v68HPgPw4Xy1KGIuP7ljT0VJwiIAIiIAIiIAIiIAIiIAL5IdAjSVUwvm3H832SjDOuuDDMZhO2TUk+X8Z3XJS7DtfWh+PrGNLjF5xtmnikB+H+gDSW8R0pVQUmAiIgAiIgAiIgAiIgAvVJIDEDvGjH82FZRm0jorjvYpTthNM3oB0kJukwB3cw6++/S9q8GJFI8wnvbAz86yMKT8GIgAiIgAiIgAiIgAiIgAjUOYGkDPAG1n1fE9c04aTSEOOuMOp9IXFqrXdS4CuMx0bD2X3+ZNJpWoWPlPTG829ifF8u47skHl0UAREQAREQAREQAREQARGokUAiBjhTz6/H+N6lRhlTfwyDrBkhJqHDVzTqnXpylBXAPv1GGh1Kmt1shnRZzyVuWlrjrpPxXQKOLomACIiACIiACIiACIiACIQiELsBnod13xhkP2Cd9zit9Q6V15J8eDlG+Omk2+W4io1w/Jrx/QMZ30kmleISAREQAREQAREQAREQgfohEKsBjvE9HJTfYeR4WEaRzsUgO1oGWTZTj3S7lSnpR5GGlUxJny/jO5vpLKlFQAREQAREQAREQAREICsEYjXAgWDfac6k8Y0xNn3VqlXHMpJ6d1YSU3J2JGBT0smDp5Cetkt6Z4dtuKY1353R0XUREAEREAEREAEREAEREIFICMRmgA8cOPBSJNw8EimTDcQ+ZTVpxYoV48x4SzZqxRYHAVs6QEfKEZauGOJtpqTzf7OM7zioK0wREAEREAEREAEREAEREIH2BGIxwPv3778Phs1YRh6zZoCb8f2IrfdetmzZO+1h6f9ME1hp6Uq+fKJghNsZpzXfmU5WCS8CIiACIiACIiACIiAC2SEQiwHeo0ePi7JofGOM3WZGWnaST5JWS4B14faZsh/iXsRpt/NqAcq/CIiACIiACIiACIiACIhAzQR61fxkJw8OGDDgHG5t0sltr5e1BthrysQgF0b4tf369fu1lhjEAFdBioAIiIAIiIAIiIAIiIAIdEog0hFwjJodGfkehxvWaYz+bsj49pcmsUsk4zt2xIpABERABERABERABERABESgHYFIR8B79ep1AOFv1y4Ot/8yBbkZ4SbrM2Nuk0iCiYAIiIAIiIAIiIAIiIAIiEBuCERmgPPN77EYtF9l9DsrcPTd56yklOQUAREQAREQAREQAREQAREQgRwQiMQA79u372BYjM/K1HONfOcg50oFERABERABERABERABERABEcgYgUjWgPfp08eM712yoLsZ38j6FN+FPj8L8kpGERABERABERABERABERABERCBfBAIbYDbxms29TwrOMz41qfGspJaklMEREAEREAEREAEREAEREAE8kMg9BT0YOO1rOx6Pgnje3x+kk+aiIAIiIAIiIAIiIAIiIAIiIAIZIVAqBFwNl7bn9Fv2/k8C8dchLwItzwLwkpGERABERABERABERABERABERCBfBEIOwJ+ElO6R3hHYuu+16xZc9bixYvf8i6r5BMBERABERABERABERABERABEcgngZpHwO2zYyBp8o7FjG/cDzC+H/Uuq+QTAREQAREQAREQAREQAREQARHIL4GaDXCQHJGF0W/bdG3RokXX5zcJpZkIiIAIiIAIiIAIiIAIiIAIiEAWCNQ0BT0Y/d7Wu4KMfE/nc2PadM17Qkk+ERABERABERABERABERABEagDArWOgNvo9zDPfGzq+erVq7XpmudEkmwiIAIiIAIiIAIiIAIiIAIiUEcEqjbA+/fvvw98sjD6fd2SJUueq6O0lKoiIAIiIAIiIAIiIAIiIAIiIAKOCVRtgPfo0eP0DIx+T2fd97WOuUs0ERABERABERABERABERABERCBOiNQlQHer1+/HeHT5JyRfe/7685llHgiIAIiIAIiIAIiIAIiIAIiIAJ1RqCqTdh69ux5ovedz/ne942Mfs+ps3SUuiIgAiIgAiIgAiIgAiIgAiIgAs4JVDwCHox+7+xZH9v1HOP7J55llGwiIAIiIAIiIAIiIAIiIAIiIAL1SaBiA9z76Ld2Pa/PDCytRUAEREAEREAEREAEREAERCArBCo1wBtQaLhnpZga/5R2PfecQpJNBERABERABERABERABERABOqbQEUG+Prrr38YBu4ujlHNQjb75rcOERABERABERABERABERABERABEXBJoNJN2I5wKX0gFBuv3cHa77c8yyjZREAEREAEREAEREAEREAEREAE6ptAlyPgweZrbqef28ZrK1euvLe+k1Hai4AIiIAIiIAIiIAIiIAIiIAIeCfQ5Qh4r169DkCJzb0qggH+P8uWLXvHq3ySSwREQAREQAREQAREQAREQAREQASMQFcj4I0YuDt6RYVss/XZMa+pI7lEQAREQAREQAREQAREQAREQASKCZQ1wNl8bU82XxtT/ICz3zcjz3JnMkkcERABERABERABERABERABERABEehAoKwBju9/7fCEnwuzFi5c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"
                    />
                  </defs>
                </svg>

                <P class="mb-0">Rated 4.7/5 from 726+ Customer Reviews</P>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Speak with us  end -->
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      cssMode: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },

      slidesPerView: 1,

      breakpoints: {
      768: {
        slidesPerView: 2, // Slides per view for laptops and larger screens
      }
    },
      spaceBetween: 10,
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      mousewheel: true,
      keyboard: true,
    });
  </script>

  <script>
    $(window).on("scroll", function () {
      if ($(window).scrollTop() > 20) {
        $(".scroolHeader").addClass("activeTop");
      } else {
        //remove the background property so it comes transparent again (defined in your css)

        $(".scroolHeader").removeClass("activeTop");
      }
    });
  </script>
@endsection