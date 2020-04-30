<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <style>
      .navbar{
        width: 100%;
        height: 40px;
        background: url("{{ URL::asset('images/LoginPageBackground.jpg') }}");
        background-position-x: 50%;
        background-position-y: 25%;
        display: flex;
        justify-content: space-between;
      }
      .round{
        border: 1px solid black;
        border-radius: 100%;
      }
      .searchbar{
        margin-left: 225px;
      }
      .magnifier{
        background-color: white;
      }
      .dropdown-menu{
        right: 0;
        left: auto;
        padding-left: 20px;
        padding-right: 20px;
      }
      .btn{
        background-color: aliceblue;
        font-size: 10px;
      }
      .dropspan{
        font-size: 10px;
      }
    </style>
    @yield('style')
    <title>@yield('title')</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/">T-tip</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control searchbar" type="search" size="40" placeholder="Search" aria-label="Search">
        <a href="#" class="form-control mr-sm-2 magnifier"><img src="{{ URL::asset('images/magnifier_icon.png') }}" width="20px" alt=""></a>
      </form>

      <div class="right">
        <a href="#"><img src="{{ URL::asset('images/plus.png') }}" width="20px" alt=""></a>
        <a href="#"><img src="{{ URL::asset('images/email.png') }}" width="20px" alt=""></a>
        <a href="#"><img src="{{ URL::asset('images/WishlistIcon.png') }}" alt="" width="20px"></a>
        <a href="#"><img src="{{ URL::asset('images/Cart.png') }}" alt="" width="20px"></a>
        <div class="dropdown d-inline-block">
          <a class="btn dropdown-toggle" type="Link" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ URL::asset('images/HumanIcon.png') }}" alt="" width="20px"> @yield('nama')
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <span class="dropspan">Hi, @yield('nama')!</span>
            <a class="dropdown-item" href="#">View Profile</a>
            <a class="dropdown-item" href="#">Pembelian</a>
            <a class="dropdown-item" href="#">Buka Jastip</a>
            <a class="dropdown-item" href="/logout">Logout</a>
          </div>
      </div>
      </div>
    </nav>
    @yield('filter')
    <div class="container-fluid homecontent">
      @yield('content')
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>