<section class="headerSection fixed-top shadow-sm bg-body rounded">
    <nav class="navbar scroolHeader">
        <div class="container">
            <div>
                <a class="navbar-brand brandLogo" href="./index.php">
                    <img id="LogoScroll"
                        src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/930fa18d-8c04-4cb9-7f04-f1ecdac99e00/public"
                        alt="Logo" class="d-inline-block align-text-top" />
                </a>

                <!-- <a class="navbar-brand brandLogo" href="./index.php">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="28"
              height="28"
              fill="green"
              class="d-inline-block align-text-top bi bi-house-add"
              viewBox="0 0 16 16"
            >
              <path
                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h4a.5.5 0 1 0 0-1h-4a.5.5 0 0 1-.5-.5V7.207l5-5 6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"
              />
              <path
                d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 1 0 1 0v-1h1a.5.5 0 1 0 0-1h-1v-1a.5.5 0 0 0-.5-.5"
              />
            </svg>
          </a> -->
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

<!-- <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  
  
  
          <div class="offcanvas-header">
  
  
  
            <a class="navbar-brand  brandLogo" href="./index.php">
  
  
  
                  <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/930fa18d-8c04-4cb9-7f04-f1ecdac99e00/public" alt="Logo" class="d-inline-block align-text-top">
  
  
  
  
  
  
  
                  </a>
  
  
  
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  
  
  
          </div>
  
  
  
          <div class="offcanvas-body">
  
  
  
  
  
  
  
              <ul class="SideBarNav" >
  
  
  
                  <li> <a href="./index.php" target="_blank" rel="noopener noreferrer"> Home</a></li>
  
  
  
                  <li> <a href="./about.php" target="_blank" rel="noopener noreferrer"> About Us</a></li>
  
  
  
                  <li> <a href="http://" target="_blank" rel="noopener noreferrer"> Rent</a></li>
  
  
  
                  <li> <a href="http://" target="_blank" rel="noopener noreferrer"> Sell</a></li>
  
  
  
                  <li> <a href="https://mightytech.dev/clientdemo/moneyPlantNew/{{url('/contact')}}" target="_blank" rel="noopener noreferrer">  Contact Us</a></li>
  
  
  
              </ul>
  
  
  
              </div>
  
  
  
          </div>
  
  
  
      </div> -->

<div class="offcanvas offcanvas-start main-heder-section" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <div class="logo">
            <a class="navbar-brand brandLogo" href="./index.php">
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
                                <a style="text-decoration: none;" onclick="window.location.href='buy.php'">Buy</a>
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
                                        <a href="why-buy-through-moneyplant.php">Why Buy through Money Plant</a>
                                    </li>

                                    <li><a href="buyers-guide.php">Buyers Guide</a></li>
                                    <!-- <li>
                      <a href="sales-conveyancing.php">Sales Conveyancing</a>
                    </li> -->
                                    <li>
                                        <a href="off-plan.php">Off Plan</a>
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
                                <a style="text-decoration: none;" onclick="window.location.href='sell.php'">Sell</a>
                            </span>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul class="SideBarNav">
                                    <li><a href="property-valuation.php">Property Valuation</a></li>
                                    <li><a href="why-sell-with-money-plant.php">Why Sell with Money Plant?</a></li>
                                    <li><a href="sellers-guide.php">Seller's Guide</a></li>
                                    <li><a href="list-my-property.php">List My Property</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button
                  class="accordion-button collapsed navLisitHover textaccor"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThree"
                  aria-expanded="false"
                  aria-controls="flush-collapseThree"
                >
                  Rent
                </button>
              </h2>
              <div
                id="flush-collapseThree"
                class="accordion-collapse collapse"
                aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample"
              >
                <div class="accordion-body">
                  <ul class="SideBarNav">
                    <li><a href="#">Property Search</a></li>
                    <li><a href="#">Why Rent with Money Plant?</a></li>
                    <li><a href="#">Tenant's Guide</a></li>
                  </ul>
                </div>
              </div>
            </div> -->

                    <!-- <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingFour">
                <button
                  class="accordion-button collapsed navLisitHover textaccor"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseFour"
                  aria-expanded="false"
                  aria-controls="flush-collapseFour"
                >
                  Landlord
                </button>
              </h2>
              <div
                id="flush-collapseFour"
                class="accordion-collapse collapse"
                aria-labelledby="flush-headingFour"
                data-bs-parent="#accordionFlushExample"
              >
                <div class="accordion-body">
                  <ul class="SideBarNav">
                    <li><a href="#">Property Valuation</a></li>
                    <li><a href="#">Why Let with Money Plant?</a></li>
                    <li><a href="#">Landlord's Guide</a></li>
                    <li><a href="#">List your Property for Rent</a></li>
                  </ul>
                </div>
              </div>
            </div> -->

                    <!-- <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingFive">
                <button
                  class="accordion-button collapsed navLisitHover textaccor"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseFive"
                  aria-expanded="false"
                  aria-controls="flush-collapseFive"
                >
                  Off Plan
                </button>
              </h2>
              <div
                id="flush-collapseFive"
                class="accordion-collapse collapse"
                aria-labelledby="flush-headingFive"
                data-bs-parent="#accordionFlushExample"
              >
                <div class="accordion-body">
                  <ul class="SideBarNav">
                    <li><a href="#">Real Estate Market Insight</a></li>
                    <li><a href="individual-developments.php">Individual Developments</a></li>
                    <li><a href="#">Developers in Dubai</a></li>
                  </ul>
                </div>
              </div>
            </div> -->
                    <button onclick="window.location.href='blog.php'" class="NavBtnCUs navLisitHover">
                        <a href="blog.php" class="textaccor text-dark">Blog</a>
                    </button>
                    <!-- <button class="NavBtnCUs navLisitHover">
              <a href="#" class="textaccor text-dark">Holiday Homes</a>
            </button>
            <button class="NavBtnCUs navLisitHover">
              <a href="#" class="textaccor text-dark">Join the Team</a>
            </button> -->
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
                                    onclick="window.location.href='knowledge-center.php'">Knowledge
                                    Center</a>
                            </span>
                        </h2>
                        <div id="flush-collapseSix1" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingSix1" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul class="SideBarNav">
                                    <li>
                                        <a href="knowledge-center-calculators.php">Calculators</a>
                                    </li>
                                    <li><a href="area-guide.php">Area Guides</a></li>
                                    <li><a href="terminology.php">Terminology</a></li>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingSix2">
                <button
                  class="accordion-button collapsed navLisitHover textaccor"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseSix2"
                  aria-expanded="false"
                  aria-controls="flush-collapseOne"
                >
                  Property Management
                </button>
              </h2>
              <div
                id="flush-collapseSix2"
                class="accordion-collapse collapse"
                aria-labelledby="flush-headingSix2"
                data-bs-parent="#accordionFlushExample"
              >
                <div class="accordion-body">
                  <ul class="SideBarNav">
                    <li><a href="#">Property Valuation</a></li>
                    <li><a href="#">Why Rent with Money Plant?</a></li>
                    <li><a href="#">Landlords Guide</a></li>
                    <li><a href="#">Property Handover</a></li>
                    <li><a href="#">Maintenance & Inspections</a></li>
                    <li><a href="#">E-Services</a></li>
                    <li><a href="#">Inventory Verification Services</a></li>
                  </ul>
                </div>
              </div>
            </div> -->

                    <!-- <button class="NavBtnCUs navLisitHover">
              <a href="#" class="textaccor text-dark">Video</a>
            </button> -->

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSeven">
                            <span class="accordion-button collapsed navLisitHover textaccor" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                aria-controls="flush-collapseSeven">
                                <a style="text-decoration: none;" onclick="window.location.href='about.php'">About
                                    Us</a>
                            </span>
                        </h2>

                        <div id="flush-collapseSeven" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul class="SideBarNav">

                                    <li><a href="./meet-the-team.php">Meet the Team</a></li>
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">Careers</a></li>
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
