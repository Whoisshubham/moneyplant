@extends('frontend.layouts.app')
@section('content')
    
<section class="calculatorsSection">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="background-container">
            <div class="container"></div>
            <div class="text-container">
              <p class="knowledge-center-heading text-uppercase">
                Property Calculator for You
              </p>
              <div class="knowledge-center-sub-para">
                Get Everything in One Place Which You Need
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="middle-section">
    <div class="container pt-4 pb-2">
      <h2 class="knowledge-center-sub-heading">
        Make Your Financial Journey Stress-Free with Us
      </h2>
      <p class="knowledge-center-sub-para">
        No matter what your
        <span class="text-green-color fw-semibold"> goal </span> is, whether
        it is buying, selling, renting, or letting, our property calculators
        are here to help you.
      </p>
      <ul>
        <li>
          <span class="fw-semibold"
            >&#8226; Plan your budget effectively:
          </span>
          Estimate rental prices, mortgage payments, and more!
        </li>
        <li>
          <span class="fw-semibold"
            >&#8226; Maximise your return on investment:
          </span>
          Track your net return on equity and make smart decisions.
        </li>
        <li>
          <span class="fw-semibold"
            >&#8226; Keep track of everything in one place:
          </span>
          No more juggling multiple spreadsheets.
        </li>
      </ul>
      <p>Get started today and simplify your property journey</p>
    </div>
  </section>

  <section class="client-card">
    <div class="container mt-4">
      <div class="row">
        <!-- First Card (col-lg-6 on large screens, col-12 on smaller screens) -->
        <div class="col-lg-6 col-12 mb-4">
          <div class="card" style="width: 100%">
            <img
              src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/7935fbf1-e59b-46d6-fcad-935f9140df00/public"
              class="card-img-top"
              alt="Placeholder Image"
            />
            <div class="card-body">
              <h5 class="card-title knowledge-center-sub-heading">
                Mortgage Payment Calculator
              </h5>
              <p class="card-text knowledge-center-sub-para">
                Unlock your future by owning your dream home in Dubai with our
                free mortgage calculator. We understand your financial
                challenges, so you should utilise our calculator to estimate
                your monthly mortgage payment. Connect with us today & secure
                your dream.
              </p>
              <!-- <a href="#" class="btn btn-success knowledge-center-sub-para">Go somewhere</a> -->
            </div>
          </div>
        </div>

        <!-- Second Card (col-lg-6 on large screens, col-12 on smaller screens) -->
        <div class="col-lg-6 col-12 mb-4">
          <div class="card" style="width: 100%">
            <img
              src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/33b4d5e0-90e8-4e95-28fc-0eca752b0300/public"
              class="card-img-top"
              alt="Placeholder Image"
            />
            <div class="card-body">
              <h5 class="card-title knowledge-center-sub-heading">
                Calculator for Net Return on Equity Payment
              </h5>
              <p class="card-text knowledge-center-sub-para">
                To get a modern home for your family in a beautiful place, it
                is essential to determine the return on equity on your
                property investment. From this calculation, you will see how
                much profit you get from this property investment.
              </p>
              <!-- <a href="#" class="btn btn-success knowledge-center-sub-para">Go somewhere</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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
              src="https://cdn.vectorstock.com/i/preview-1x/66/14/default-avatar-photo-placeholder-profile-picture-vector-21806614.jpg"
              alt="LogoImg"
              srcset=""
            />
            <img
              src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/40c5df7c-44b2-4084-8141-da2a0a97a700/public"
              alt="LogoImg"
              srcset=""
            />
          </div>
          <p class="para mt-1">Robbie McDonald</p>

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

  <!-- call Modal start -->

  <!-- Button trigger modal -->

  <!-- Modal -->
  <div
    class="modal fade"
    id="exampleModalOne"
    tabindex="-1"
    aria-labelledby="exampleModalLabelOne"
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
              src="https://cdn.vectorstock.com/i/preview-1x/66/14/default-avatar-photo-placeholder-profile-picture-vector-21806614.jpg"
              alt="LogoImg"
              srcset=""
            />
            <img
              src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/40c5df7c-44b2-4084-8141-da2a0a97a700/public"
              alt="LogoImg"
              srcset=""
            />
          </div>
          <p class="para mt-4" style="color: #1f663a; font-weight: 600">
            +971-509683657
          </p>

          <!-- <div class="whatsappBtnOne">

        <div class="whatsAppBox mt-4 " style="background-color:#1f663a; width:100%">

               <a href="tel:+" class="d-flex justify-content-center gap-2   align-items-center">
                 <div class="whtIcon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 32 32" fill="none"><script xmlns="">window._wordtune_extension_installed = true;</script><path d="M16.004 0h-.008C7.174 0 0 7.176 0 16c0 3.5 1.128 6.744 3.046 9.378l-1.994 5.944 6.15-1.966C9.732 31.032 12.75 32 16.004 32 24.826 32 32 24.822 32 16S24.826 0 16.004 0z" fill="#4CAF50"/><path d="M25.314 22.594c-.386 1.09-1.918 1.994-3.14 2.258-.836.178-1.928.32-5.604-1.204-4.702-1.948-7.73-6.726-7.966-7.036-.226-.31-1.9-2.53-1.9-4.826S7.87 8.372 8.34 7.892c.386-.394 1.024-.574 1.636-.574.198 0 .376.01.536.018.47.02.706.048 1.016.79.386.93 1.326 3.226 1.438 3.462.114.236.228.556.068.866-.15.32-.282.462-.518.734-.236.272-.46.48-.696.772-.216.254-.46.526-.188.996.272.46 1.212 1.994 2.596 3.226 1.786 1.59 3.234 2.098 3.752 2.314.386.16.846.122 1.128-.178.358-.386.8-1.026 1.25-1.656.32-.452.724-.508 1.148-.348.432.15 2.718 1.28 3.188 1.514.47.236.78.348.894.546.112.198.112 1.128-.274 2.22z" fill="#FAFAFA"/></svg>
                 </div>
               WHATSAPP
              </a>

          </div>

      </div> -->
        </div>
      </div>
    </div>
  </div>

  <!-- call Modal end -->

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
            Book a Viewing
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
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Speak with us  end -->
@endsection