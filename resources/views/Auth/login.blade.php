
	
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
    <style>
      .login {
        border:1px solid #000;
        height: 350px;
        width: 300px;
        padding-top:30px;
        margin-top:10%;
        border-radius:6px;


      }
      .button{
        height: 50px;
        width: 100px;
        padding:10px;
        margin-top:10px;
        border-radius:6px;
        text-align:center;
        align-items:center;
        background: #000;
        color:#fff;
      }
      .button:hover{
       
        background: #fff;
        color:#000;
      }
    </style>

  </head>
	<body>

<div class="container login">

<form class="form-signin" method="POST" action="/loginhere">
    @csrf
  <div class="panel periodic-login">
      <div class="panel-body text-center">
          <h1>LOGIN</h1>

          <i class="icons icon-arrow-down"></i>
          <div class="form-group form-animate-text" style="margin-top:40px !important;">
          <input  placeholder="Email address"  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
            @enderror            
            <span class="bar"></span>
          </div>
          <div class="form-group form-animate-text" style="margin-top:40px !important;">
          <input placeholder="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
            @enderror
            <span class="bar"></span>
            
          </div>
          <label class="pull-left">
          </label>
          <button type="submit" class="button ">
            {{ __('Login') }}
          </button>
      </div>
       
  </div>
</form>

</div>

</body>
</html>

