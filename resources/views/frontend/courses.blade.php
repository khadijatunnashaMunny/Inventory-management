<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<!-- 
THEME: Educenter - Education HTML Template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/education-template/
DEMO: https://demo.themefisher.com/educenter/
GITHUB: https://github.com/themefisher/Educenter-Bootstrap-Education-Template

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
	================================================== -->
  <meta charset="utf-8">
  <title>Inventory </title>

  <!-- Mobile Specific Metas
	================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Educenter HTML Template v1.0">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>

<body>

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
              <li class="list-inline-item">
                <a
                  class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                  href="#loginModal"
                  data-toggle="modal"
                  data-target="#loginModal"
                  >login</a
                >
              </li>
              <li class="list-inline-item">
                <a
                  class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                  href="#signupModal"
                  data-toggle="modal"
                  data-target="#signupModal"
                  >register</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- navbar -->
    <div class="navigation w-100">
      <div class="">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
          <a class="navbar-brand" href="index.html"
            ><img src="images/logo.png" alt="logo"
          /></a>
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
              <li class="nav-item @@home">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item @@home">
                <a class="nav-link" href="quiz.html">Quiz</a>
              </li>
              <li class="nav-item @@about">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item @@video">
                <a class="nav-link" href="video.html">Video</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="courses.html">COURSES</a>
              </li>
              <li class="nav-item @@events">
                <a class="nav-link" href="events.html">EVENTS</a>
              </li>

              <li class="nav-item @@contact">
                <a class="nav-link" href="contact.html">CONTACT</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- /header -->
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
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
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
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
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb mb-2">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.html">Home</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Our Courses</li>
        </ul>
        <p class="text-lighten mb-0">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

  <!-- courses -->
  <section class="section-sm">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div
            class="d-flex align-items-center section-title justify-content-between"
          >
            <h2 class="mb-0 text-nowrap mr-3">Our Course</h2>
            <div
              class="border-top w-100 border-primary d-none d-sm-block"
            ></div>
            <div>
              <a
                href="courses.html"
                class="btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block"
                >see all</a
              >
            </div>
          </div>
        </div>
      </div>
      <!-- course list -->
      <div class="row justify-content-center">
        <!-- course item -->
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="card p-0 border-primary rounded-0 hover-shadow">
            <img
              class="card-img-top rounded-0"
              src="images/courses/python1.jpg"
              alt="course thumb"
            />
            <div class="card-body">
              <a href="course-single.html">
                <h4 class="card-title">PYTHON</h4>
              </a>
              <p class="card-text mb-4">
                Python is a high-level, interpreted, general-purpose
                programming language. Its design philosophy emphasizes code
                readability with the use of significant.
              </p>
              <a href="course-single.html" class="btn btn-primary btn-sm"
                >Subscribe now</a
              >
            </div>
          </div>
        </div>
        <!-- course item -->
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="card p-0 border-primary rounded-0 hover-shadow">
            <img
              class="card-img-top rounded-0"
              src="images/courses/frontend.jpg"
              alt="course thumb"
            />
            <div class="card-body">
              <a href="course-single.html">
                <h4 class="card-title">FRONT-END DEVELOPMENT</h4>
              </a>
              <p class="card-text mb-4">
                Front-end web development, also known as client-side
                development is the practice of producing HTML, CSS and
                JavaScript for a website or Web Application.
              </p>
              <a href="course-single.html" class="btn btn-primary btn-sm"
                >Subscribe now</a
              >
            </div>
          </div>
        </div>
        <!-- course item -->
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="card p-0 border-primary rounded-0 hover-shadow">
            <img
              class="card-img-top rounded-0"
              src="images/courses/fullStack.jpg"
              alt="course thumb"
            />
            <div class="card-body">
              <a href="course-single.html">
                <h4 class="card-title">FULL STACK DEVELOPMENT</h4>
              </a>
              <p class="card-text mb-4">
                Full stack technology refers to the entire depth of a computer
                system application, and full stack developers straddle two
                separate web development domains: the front end and the back
                end.
              </p>
              <a href="course-single.html" class="btn btn-primary btn-sm"
                >Subscribe now</a
              >
            </div>
          </div>
        </div>
        <!-- course item -->
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="card p-0 border-primary rounded-0 hover-shadow">
            <img
              class="card-img-top rounded-0"
              src="images/courses/next.jpg"
              alt="course thumb"
            />
            <div class="card-body">
              <a href="course-single.html">
                <h4 class="card-title">NEXT JS</h4>
              </a>
              <p class="card-text mb-4">
                Next.js is an open-source web development framework built on
                top of Node.js enabling React based web applications
                functionalities.
              </p>
              <a href="course-single.html" class="btn btn-primary btn-sm"
                >Subscribe now</a
              >
            </div>
          </div>
        </div>
        <!-- course item -->
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="card p-0 border-primary rounded-0 hover-shadow">
            <img
              class="card-img-top rounded-0"
              src="images/courses/database.jpg"
              alt="course thumb"
            />
            <div class="card-body">
              <a href="course-single.html">
                <h4 class="card-title">DATABASE</h4>
              </a>
              <p class="card-text mb-4">
                A database is an organized collection of structured
                information, or data, typically stored electronically in a
                computer system.
              </p>
              <a href="course-single.html" class="btn btn-primary btn-sm"
                >Subscribe now</a
              >
            </div>
          </div>
        </div>
        <!-- course item -->
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="card p-0 border-primary rounded-0 hover-shadow">
            <img
              class="card-img-top rounded-0"
              src="images/courses/marketing.jpg"
              alt="course thumb"
            />
            <div class="card-body">
              <a href="course-single.html">
                <h4 class="card-title">MARKETING</h4>
              </a>
              <p class="card-text mb-4">
                Marketing is the process of exploring, creating, and
                delivering value to meet the needs of a target market in terms
                of goods and services
              </p>
              <a href="course-single.html" class="btn btn-primary btn-sm"
                >Subscribe now</a
              >
            </div>
          </div>
        </div>
      </div>
      <!-- /course list -->
      <!-- mobile see all button -->
      <div class="row">
        <div class="col-12 text-center">
          <a
            href="courses.html"
            class="btn btn-sm btn-outline-primary d-sm-none d-inline-block"
            >sell all</a
          >
        </div>
      </div>
    </div>
  </section>
  <!-- /courses -->
<!-- footer -->
<footer>
  <!-- newsletter -->
  <div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
          <h3 class="text-white">Subscribe Now</h3>
          <form action="#">
            <div class="input-wrapper">
              <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Enter Your Email...">
              <button type="submit" value="send" class="btn btn-primary">Join</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <!-- logo -->
          <a class="logo-footer" href="index.html"><img class="img-fluid mb-4" src="images/logo.png" alt="logo"></a>
          <ul class="list-unstyled">
            <li class="mb-2">23621 15 Mile Rd #C104, Clinton MI, 48035, New York, USA</li>
            <li class="mb-2">+1 (2) 345 6789</li>
            <li class="mb-2">+1 (2) 345 6789</li>
            <li class="mb-2">contact@yourdomain.com</li>
          </ul>
        </div>
        <!-- company -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">COMPANY</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="about.html">About Us</a></li>
            <li class="mb-3"><a class="text-color" href="teacher.html">Our Teacher</a></li>
            <li class="mb-3"><a class="text-color" href="contact.html">Contact</a></li>
            <li class="mb-3"><a class="text-color" href="blog.html">Blog</a></li>
          </ul>
        </div>
        <!-- links -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">LINKS</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="courses.html">Courses</a></li>
            <li class="mb-3"><a class="text-color" href="events.html">Events</a></li>
            <li class="mb-3"><a class="text-color" href="notice.html">Notice</a></li>
            <li class="mb-3"><a class="text-color" href="scholarship.html">Scholarship</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">SUPPORT</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="https://themefisher.com/blog">Forums</a></li>
            <li class="mb-3"><a class="text-color" href="https://docs.themefisher.com/">Documentation</a></li>
            <li class="mb-3"><a class="text-color" href="#!">Language</a></li>
            <li class="mb-3"><a class="text-color" href="#!">Release Status</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">RECOMMEND</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="https://themefisher.com/">WordPress</a></li>
            <li class="mb-3"><a class="text-color" href="https://themefisher.com/">LearnPress</a></li>
            <li class="mb-3"><a class="text-color" href="https://themefisher.com/">WooCommerce</a></li>
            <li class="mb-3"><a class="text-color" href="https://themefisher.com/">bbPress</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="copyright py-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0">Copyright &copy;
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script> 
            , designed & developed by <a href="https://themefisher.com/" class="text-muted">Themefisher</a>
          </p>
        </div>
        <div class="col-sm-5 text-sm-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://facebook.com/themefisher/"><i class="ti-facebook text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://twitter.com/themefisher"><i class="ti-twitter-alt text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://github.com/themefisher"><i class="ti-github text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://instagram.com/themefisher/"><i class="ti-instagram text-primary"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- filter -->
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>