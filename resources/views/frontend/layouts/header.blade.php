<section class="headerSection fixed-top shadow-sm bg-body rounded">
  <nav class="navbar scroolHeader">
      <div class="container">
          <div>
              <a class="navbar-brand brandLogo" href="{{url('/')}}">
                  <img id="LogoScroll"
                      src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/930fa18d-8c04-4cb9-7f04-f1ecdac99e00/public"
                      alt="Logo" class="d-inline-block align-text-top" />
              </a>

           
          </div>

          <div class="menu" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
              aria-controls="offcanvasExample">
              <div class="menuDiv">
                  <div class="menuIcon">
                      <i class="bi bi-list"></i>
                  </div>
              </div>
          </div>
      </div>
  </nav>
</section>


<div class="offcanvas offcanvas-start main-heder-section" tabindex="-1" id="offcanvasExample"
  aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
      <div class="logo">
          <a class="navbar-brand brandLogo" href="{{url('/')}}">
              <img
                  src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/40c5df7c-44b2-4084-8141-da2a0a97a700/public" />
          </a>
      </div>

      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body mt-2 ">
      <div class="row">
          <div class="col-lg-6 co-md-12">
              <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                          <span class="accordion-button collapsed navLisitHover textaccor" type="button"
                              data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                              aria-controls="flush-collapseOne">
                              <a style="text-decoration: none;" onclick="window.location.href='buy'">Buy</a>
                          </span>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse"
                          aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                              <ul class="SideBarNav">
                                  <li>
                                      <a href="{{url('search')}}">Property Search</a>
                                  </li>
                                  <li>
                                      <a href="{{url('why-buy-through-moneyplant')}}">Why Buy through Money Plant</a>
                                  </li>

                                  <li><a href="{{url('buyers-guide')}}">Buyers Guide</a></li>
                             
                                  <li>
                                      <a href="{{url('off-plan')}}">Off Plan</a>
                                  </li>


                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                          <span class="accordion-button collapsed navLisitHover textaccor" type="button"
                              data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                              aria-controls="flush-collapseTwo">
                              <a style="text-decoration: none;" onclick="window.location.href='sell'">Sell</a>
                          </span>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse"
                          aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                              <ul class="SideBarNav">
                                  <li><a href="{{url('property-valuation')}}">Property Valuation</a></li>
                                  <li><a href="{{url('why-sell-with-money-plant')}}">Why Sell with Money Plant?</a></li>
                                  <li><a href="{{url('sellers-guide')}}">Seller's Guide</a></li>
                                  <li><a href="{{url('list-my-property')}}">List My Property</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
            
                  <button onclick="window.location.href='{{url('blog')}}'" class="NavBtnCUs navLisitHover">
                      <a href="{{url('blog')}}" class="textaccor text-dark">Blog</a>
                  </button>
          
              </div>
          </div>
          <div class="col-lg-6 co-md-12">
              <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingSix1">
                          <span class="accordion-button collapsed navLisitHover textaccor" type="button"
                              data-bs-toggle="collapse" data-bs-target="#flush-collapseSix1" aria-expanded="false"
                              aria-controls="flush-collapseOne">
                              <a style="text-decoration: none;"
                                  onclick="window.location.href='{{url('knowledge-center')}}'">Knowledge
                                  Center</a>
                          </span>
                      </h2>
                      <div id="flush-collapseSix1" class="accordion-collapse collapse"
                          aria-labelledby="flush-headingSix1" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                              <ul class="SideBarNav">
                                  <li>
                                      <a href="{{url('knowledge-center-calculators')}}">Calculators</a>
                                  </li>
                                  <li><a href="{{url('area-guide')}}">Area Guides</a></li>
                                  <li><a href="{{url('terminology')}}">Terminology</a></li>
                          </div>
                      </div>
                  </div>
               

                  <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingSeven">
                          <span class="accordion-button collapsed navLisitHover textaccor" type="button"
                              data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false"
                              aria-controls="flush-collapseSeven">
                              <a style="text-decoration: none;" onclick="window.location.href='{{url('/about')}}'">About
                                  Us</a>
                          </span>
                      </h2>

                      <div id="flush-collapseSeven" class="accordion-collapse collapse"
                          aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                              <ul class="SideBarNav">

                                  <li><a href="{{url('meet-the-team')}}">Meet the Team</a></li>
                                  <li><a href="{{url('reviews')}}">Reviews</a></li>
                                  <li><a href="{{url('careers')}}">Careers</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>

                  <button onclick="window.location.href='{{url('/contact')}}'" class="NavBtnCUs navLisitHover">
                      <a href="{{url('/contact')}}" class="textaccor text-dark">Contact</a>
                  </button>
              </div>
          </div>
      </div>
  </div>
</div>

<script>
  window.onscroll = function() {
      scrollFunction();
  };

  function scrollFunction() {
      if (
          document.body.scrollTop > 100 ||
          document.documentElement.scrollTop > 100
      ) {
          document.getElementById("LogoScroll").style.maxWidth = "80px";
      } else {
          document.getElementById("LogoScroll").style.maxWidth = "105px";
      }
  }
</script>
