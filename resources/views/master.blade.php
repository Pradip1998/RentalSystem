<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>UTAS Computer Rental Service</title>

  <link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}" >
  
  <link rel="stylesheet" href="{{ asset ('css/maicons.css') }}">

  <link rel="stylesheet" href="{{ asset ('utasanim/animate/animate.css') }}">

  <link rel="stylesheet" href="{{ asset ('utasanim/owl-carousel/css/owl.carousel.css') }}">

  <link rel="stylesheet" href="{{ asset ('utasanim/fancybox/css/jquery.fancybox.css') }}">

  <link rel="stylesheet" href="{{asset ('css/utastheme.css') }}">



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>

  
  <header>
    

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
       <a href="index.html" class="navbar-brand"><img src="{{ asset ('img/utas-logo.jpg') }}" style="margin-right:20px;">UTAS COMPUTER RENTAL SERVICE</a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item">
              <a href="home" class="nav-link">Home</a>
            </li>
            
            @if(Auth::check())
            <li class="nav-item">
              <a href="profile" class="nav-link">Profile</a>
            </li>
            @else
            <li class="nav-item">
              <a href="register" class="nav-link">Register</a>
            </li>
            @endif

            @if (Auth::check())
            <div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{ Auth::user()->name }}
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="/logoutt">Logout</a>
    
  </div>
</div>
            @endif

    


            <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </div>
           
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->

    
</header>

<div class="container">
    @yield('content')
</div>













  <footer class="page-footer">
    <div class="container">

      <hr>

      <div class="row mt-4">
        <div class="col-md-12 text-center">
          <p>Copyright 2022. developed by <a href="#">UTAS</a></p>
        </div>
       
      </div>
    </div>
  </footer>

  
<script src="{{ asset ('js/jquery-3.5.1.min.js') }}"></script>
<></script>
<script src="{{asset ('js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset ('utasanim/owl-carousel/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset ('utasanim/wow/wow.min.js') }}"></script>

<script src="{{ asset ('utasanim/fancybox/js/jquery.fancybox.min.js') }}"></script>

<script src="{{ asset ('utasanim/isotope/isotope.pkgd.min.js') }}"></script>


<script src="{{ asset ('js/utastheme.js')  }}"></script>

</body>
</html>