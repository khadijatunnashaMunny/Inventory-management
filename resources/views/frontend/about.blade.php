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
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
          <div class="modal-header border-0">
            <h3>Register</h3>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="login">
              <form action="#" class="row">
                <div class="col-12">
                  <input
                    type="text"
                    class="form-control mb-3"
                    id="signupPhone"
                    name="signupPhone"
                    placeholder="Phone"
                  />
                </div>
                <div class="col-12">
                  <input
                    type="text"
                    class="form-control mb-3"
                    id="signupName"
                    name="signupName"
                    placeholder="Name"
                  />
                </div>
                <div class="col-12">
                  <input
                    type="email"
                    class="form-control mb-3"
                    id="signupEmail"
                    name="signupEmail"
                    placeholder="Email"
                  />
                </div>
                <div class="col-12">
                  <input
                    type="password"
                    class="form-control mb-3"
                    id="signupPassword"
                    name="signupPassword"
                    placeholder="Password"
                  />
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">SIGN UP</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="loginModal"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
          <div class="modal-header border-0">
            <h3>Login</h3>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#" class="row">
              <div class="col-12">
                <input
                  type="text"
                  class="form-control mb-3"
                  id="loginPhone"
                  name="loginPhone"
                  placeholder="Phone"
                />
              </div>
              <div class="col-12">
                <input
                  type="text"
                  class="form-control mb-3"
                  id="loginName"
                  name="loginName"
                  placeholder="Name"
                />
              </div>
              <div class="col-12">
                <input
                  type="password"
                  class="form-control mb-3"
                  id="loginPassword"
                  name="loginPassword"
                  placeholder="Password"
                />
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">LOGIN</button>
              </div>
            </form>
          </div>
        </div>
      </div>
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
                About Us
              </li>
            </ul>
            <p class="text-lighten mb-0">
            Inventory management is the last and most significant discipline in retail. Learn how to reduce your inventory while keeping your product items available for sale. 
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /page title -->

    <!-- about -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-12">
           
            <h2 class="section-title">ABOUT OUR JOURNY</h2>
            <p>
            Inventory management is the foundation of a well-functioning retail business, and is a fundamental building block to a company’s success and longevity. When inventory is organized and accessible, the entire supply chain will function with ease.  we are working as a job site in
              Bangladesh since 2000.
            </p>
          
          </div>
        </div>
      </div>
    </section>
    <!-- /about -->
<?php
      $total_product=DB::table('products')->count();
      $total_employee=DB::table('employees')->count();

?>

    <!-- funfacts -->
    <section class="section-sm bg-dark">
      <div class="container">
        <div class="row">
          <!-- funfacts item -->
          <div class="col-md-6 col-sm-6 mb-4 mb-md-0">
            <div class="text-center">
              <h2 class="count text-white" data-count="60">{{$total_employee}}</h2>
              <h5 class="text-white">EMPLOYEES</h5>
            </div>
          </div>
          <!-- funfacts item -->
          <div class="col-md-6 col-sm-6 mb-4 mb-md-0">
            <div class="text-center">
              <h2 class="count text-white" data-count="50">{{$total_product}}</h2>
              <h5 class="text-white">PRODUCTS</h5>
            </div>
          </div>
         
         
        </div>
      </div>
    </section>
    <!-- /funfacts -->

    <!-- teachers -->
    <section class="section">
   

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <h2 class="section-title">Our Employees</h2>
          </div>
             
    @php
      $employee_lists=DB::table('employees')->get();
    @endphp

        @if($employee_lists)
        @foreach($employee_lists as $employee)
          <!-- teacher -->
          <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
            <div class="card border-0 rounded-0 hover-shadow">
              <img
                class="card-img-top rounded-0" height="220px" width="2500px"
                src="{{ asset('uploads/images/'.$employee->e_image) }}"
                alt="course thumb"
              />
              <div class="card-body">
                <a href="teacher-single.html">
                  <h4 class="card-title">{{$employee->e_name}}</h4>
                </a>
                <div class="d-flex justify-content-between">
                  <span>{{$employee->e_title}}</span>
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a
                        class="text-color"
                        href="https://facebook.com/themefisher"
                        ><i class="ti-facebook"></i
                      ></a>
                    </li>
                    <li class="list-inline-item">
                      <a
                        class="text-color"
                        href="https://twitter.com/themefisher"
                        ><i class="ti-twitter-alt"></i
                      ></a>
                    </li>
                    <li class="list-inline-item">
                      <a
                        class="text-color"
                        href="https://github.com/themefisher"
                        ><i class="ti-google"></i
                      ></a>
                    </li>
                    <li class="list-inline-item">
                      <a
                        class="text-color"
                        href="https://instagram.com/themefisher/"
                        ><i class="ti-linkedin"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        @endif
         
        </div>
      </div>
     
    </section>
    <!-- /teachers -->
   
   
  
</div>
@endsection()