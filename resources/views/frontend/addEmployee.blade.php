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
              Add Employee
              </li>
            </ul>
            <p class="text-lighten mb-0">
            Employee Data & Payroll - Add Employee covers adding a new employee and maintaining all staff related information.
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
            <h2 class="section-title"> Add Employee</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 mb-4 mb-lg-0">
            <form action="/employeeSubmit" method="POST" enctype="multipart/form-data">
              @csrf
              <input
                type="text"
                class="form-control mb-3"
                id="name"
                name="e_name"
                placeholder="Your Name"
                required
              />
              <input
                type="email"
                class="form-control mb-3"
                id="mail"
                name="e_mail"
                placeholder="Your Email"
                required
              />
              <input
                type="text"
                class="form-control mb-3"
                id="subject"
                name="e_title"
                placeholder="Job Title"
                required
              />
              <textarea
                name="e_info"
                id="message"
                class="form-control mb-3"
                placeholder="Employee Information"
                required
              ></textarea>
              <div class="control-group ">
                    <label class="control-label">image Upload</label>
                    <div class="controls">
                        <input type="file" name="e_image" required>
                    </div>
                </div>
                <br/>
              <button type="submit" value="send" class="btn btn-dark">
                Add employee
              </button>
            </form>
          </div>
        
        </div>
      </div>
    </section>
    <!-- /contact -->


   
</div>
@endsection()