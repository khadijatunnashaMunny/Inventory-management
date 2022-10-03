
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
	================================================== -->
    <meta charset="utf-8" />
    <title>Inventory Management</title>

    <!-- Mobile Specific Metas
	================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Construction Html5 Template" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=5.0"
    />
    <meta name="author" content="Themefisher" />
    <meta name="generator" content="Themefisher Educenter HTML Template v1.0" />

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/animate/animate.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/aos/aos.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/venobox/venobox.css')}}">
    <link rel="shortcut" type="image/x-icon" href="{{asset('images/favicon.png')}}">

    <!--Favicon-->
    <link rel="stylesheet" href="{{asset('images/favicon.png')}}">

  </head>
	<body>

		<!-- HEADER -->
            @include('frontend.header')
		<!-- /HEADER -->
	

		<!-- SECTION -->
            @yield('content')
		<!-- /SECTION -->

	
		<!-- FOOTER -->
		<!-- /FOOTER -->

		    <!-- jQuery Plugins -->
            <!-- Main Script -->
            
            <script src="{{asset('js/script.js')}}"></script>
           
	</body>
</html>




   