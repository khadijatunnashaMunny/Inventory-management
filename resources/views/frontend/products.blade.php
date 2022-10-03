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
                Product
              </li>
            </ul>
            <p class="text-lighten mb-0">
              Our courses offer a good compromise between the continuous
              assessment favoured by some universities and the emphasis placed
              on final exams by others.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /page title -->

  

  <!-- events -->
  <section class="section bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div
              class="d-flex align-items-center section-title justify-content-between"
            >
              <h2 class="mb-0 text-nowrap mr-3">Upcoming Events</h2>
              <div
                class="border-top w-100 border-primary d-none d-sm-block"
              ></div>
              <div>
                <a
                  href="events.html"
                  class="btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block"
                  >see all</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <!-- event -->
          <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
            <div class="card border-0 rounded-0 hover-shadow">
              <div class="card-img position-relative">
                <img
                  class="card-img-top rounded-0"
                  src="images/events/frontback.jpg"
                  alt="event thumb"
                />
                <div class="card-date"><span>PAID</span><br />COURSE</div>
              </div>
              <div class="card-body">
                <!-- location -->
                <p>
                  <i class="ti-location-pin text-primary mr-2"></i>Tower
                  (Level-7), House, DF, 11 Rd No 14,Dhaka
                </p>
                <a href="event-single.html"
                  ><h4 class="card-title">
                    Working with 5 real life projects front-end backend both.
                  </h4></a
                >
              </div>
            </div>
          </div>
          <!-- event -->
          <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
            <div class="card border-0 rounded-0 hover-shadow">
              <div class="card-img position-relative">
                <img
                  class="card-img-top rounded-0"
                  src="images/events/marketing.jpg"
                  alt="event thumb"
                />
                <div class="card-date"><span>PAID</span><br />COURSE</div>
              </div>
              <div class="card-body">
                <!-- location -->
                <p>
                  <i class="ti-location-pin text-primary mr-2"></i>Tower
                  (Level-7), House, DF, 11 Rd No 14,Dhaka
                </p>
                <a href="event-single.html"
                  ><h4 class="card-title">
                    Learn advanced marketing management strategies that will
                    keep organization on the cutting edge & implement
                    successfully.
                  </h4></a
                >
              </div>
            </div>
          </div>
          <!-- event -->
          <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
            <div class="card border-0 rounded-0 hover-shadow">
              <div class="card-img position-relative">
                <img
                  class="card-img-top rounded-0"
                  src="images/events/mern.jpg"
                  alt="event thumb"
                />
                <div class="card-date"><span>PAID</span><br />COURSE</div>
              </div>
              <div class="card-body">
                <!-- location -->
                <p>
                  <i class="ti-location-pin text-primary mr-2"></i>Tower
                  (Level-7), House, DF, 11 Rd No 14,Dhaka
                </p>
                <a href="event-single.html"
                  ><h4 class="card-title">
                    In this course, we will be building an in-depth full-stack
                    Blog project application (Basics to Advanced).
                  </h4></a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- mobile see all button -->
        <div class="row">
          <div class="col-12 text-center">
            <a
              href="course.html"
              class="btn btn-sm btn-outline-primary d-sm-none d-inline-block"
              >sell all</a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- /events -->

  
    


</div>
@endsection()