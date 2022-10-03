@extends('frontend.master')
@section('content')
  <div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="signupModal"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
    
      
    </div>

    <!-- page title -->
    <section
      class="page-title-section overlay"
      data-background="images/backgrounds/page-title.jpg"
    >
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <ul class="list-inline custom-breadcrumb mb-2">
              <li class="list-inline-item">
                <a class="h2 text-primary font-secondary" href="index.html"
                  >Home</a
                >
              </li>
              <li class="list-inline-item text-white h3 font-secondary nasted">
                Contact Us
              </li>
            </ul>
            <p class="text-lighten mb-0">
            Back up your contacts and sync them across all your devices • Safely back up the contacts in your Google Account to the cloud • 
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /page title -->

    <!-- contact -->
    <section class="section bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="section-title">Contact Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 mb-4 mb-lg-0">
            <form action="/contactSubmit" method="POST">
              @csrf
              <input
                type="text"
                class="form-control mb-3"
                id="name"
                name="name"
                placeholder="Your Name"
                required
              />
              <input
                type="email"
                class="form-control mb-3"
                id="mail"
                name="mail"
                placeholder="Your Email"
                required
              />
              <input
                type="text"
                class="form-control mb-3"
                id="subject"
                name="subject"
                placeholder="Subject"
                required
              />
              <textarea
                name="message"
                id="message"
                class="form-control mb-3"
                placeholder="Your Message"
                required
              ></textarea>
              <button type="submit" value="send" class="btn btn-dark">
                SEND MESSAGE
              </button>
            </form>
          </div>
          <div class="col-lg-5">
           
            <a href="tel:+8802057843248" class="text-color h5 d-block"
              >Cell: +88 01713493159, +88 01847334785.
            </a>
            <a
              href="mailto:yourmail@email.com"
              class="mb-5 text-color h5 d-block"
              >Email: contact@skill.jobs
            </a>
            <p>
              Contact Us. Address: 102/1 Shukrabad, Mirpur Road, Dhanmondi
              <br />Dhaka-1207.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /contact -->


   
</div>
@endsection()