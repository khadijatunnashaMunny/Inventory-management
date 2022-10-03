 <!-- header -->
 <header class="fixed-top header">
      <!-- top header -->
      <div class="top-header py-2 bg-white">
        <div class="container">
          <div class="row no-gutters">
            <div class="col-lg-4 text-center text-lg-left">
              <a class="text-color mr-3" href="tel:+443003030266"
                ><strong>CALL</strong> +44 300 303 0266</a
              >
              <ul class="list-inline d-inline">
                <li class="list-inline-item mx-0">
                  <a
                    class="d-inline-block p-2 text-color"
                    href="https://facebook.com/themefisher/"
                    ><i class="ti-facebook"></i
                  ></a>
                </li>
                <li class="list-inline-item mx-0">
                  <a
                    class="d-inline-block p-2 text-color"
                    href="https://twitter.com/themefisher"
                    ><i class="ti-twitter-alt"></i
                  ></a>
                </li>
                <li class="list-inline-item mx-0">
                  <a
                    class="d-inline-block p-2 text-color"
                    href="https://github.com/themefisher"
                    ><i class="ti-github"></i
                  ></a>
                </li>
                <li class="list-inline-item mx-0">
                  <a
                    class="d-inline-block p-2 text-color"
                    href="https://instagram.com/themefisher/"
                    ><i class="ti-instagram"></i
                  ></a>
                </li>
              </ul>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
              <ul class="list-inline">
              @if(Session::has('user'))
                <li><a href="/logout">Logout({{Session::get('user')['name']}})</a></li>
              @else
                <li><a href="/login">Login</a></li>
              @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
      <style>
        .title{
          padding-left:10px;
          margin-left:10px

        }
      </style>
      <!-- navbar -->
      <div class="navigation w-100">
        <div class="">
          <nav class="navbar navbar-expand-lg navbar-dark p-0">
            <a class="navbar-brand" href="index.html"
              >
            <h2 class="text-white h2 font-secondary title"> Inventory management</h2>
            </a>
            <button
              class="navbar-toggler rounded-0"
              type="button"
              data-toggle="collapse"
              data-target="#navigation"
              aria-controls="navigation"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item ">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item @@home">
                  <a class="nav-link" href="/addEmployee">Add Employee</a>
                </li>
                <li class="nav-item @@about">
                  <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item @@about">
                  <a class="nav-link" href="/report">Report</a>
                </li>
                <li class="nav-item @@video">
                  <a class="nav-link" href="addProduct ">Add Product</a>
                </li>

                <li class="nav-item @@contact">
                  <a class="nav-link" href="/contact">CONTACT</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- /header -->