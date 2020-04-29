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
        body{
            margin: 0;
            padding: 0;
            background: url("{{ URL::asset('images/LoginPageBackground.jpg') }}")
        }
        .content{
            display: block;
        }
        .login-container{
            margin-right: 100px;
            margin-top: 75px;
            float: right;
            width: 350px;
            height: 500px;
            background-color: white;
            border-top-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }
        .round{
            padding-top: 15px;
            padding-left: 15px;
            display: flex;
            justify-content: space-evenly;
        }
        .round-upper{
            display: inline-block;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background-color: #76bc9a;
        }
        .button{
            display: flex;
            justify-content: space-around;
        }
        .btn{
            padding: 2px 20px 2px 20px;
            background-color: #e2e2e2;
            border: 1px solid black;
            border-radius: 5px;
        }
        .orlogin{
            width: 50%; 
            text-align: center; 
            border-bottom: 1px solid #000; 
            line-height: 0.1em;
            margin: 10px 0 25px 90px; 
        }
        .orlogin span{
            background:#fff; 
            padding:0 10px; 
        }
        .logo{
            display: flex;
            justify-content: space-evenly;
            margin-bottom: 25px;
        }
        .sosmed{
            border: 1px solid black;
            padding: 5px 5px 5px 5px;
            border-radius: 100%
        }
        .forgotpassword{
            margin-left: 10px;
        }
    </style>
    <title>Login to T-tip</title>
  </head>
  <body>
    <div class="container-fluids content">
        <div class="login-container">
            <div class="round">
                <div class="round-upper"></div>
                <div class="round-upper"></div>
                <div class="round-upper"></div>
                <div class="round-upper"></div>
                <div class="round-upper"></div>
                <div class="round-upper"></div>
                <div class="round-upper"></div>
                <div class="round-upper"></div>
                <div class="round-upper"></div>
                <div class="round-upper"></div>
                <div class="round-upper"></div>
            </div>
            <div class="login-form mt-5">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <form class="px-4 mb-3" action="/login/auth" method="POST">
                    @csrf
                  <div class="form-group">
                    <label for="email">Email address</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="email@example.com" value="{{Session::get('email')}}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group button">
                    <button type="submit" class="btn">Login</button>
                    <a href="/register">
                        <div class="btn" style="color: black">Register</div>
                    </a>
                  </div>
                </form>
            </div>
            <div class="orloginwith">
                <h6 class="orlogin"><span>Or Login With</span></h6>
            </div>
            <div class="logo">
                <a href="">
                    <img class="sosmed" src="{{ URL::asset('images/lambangGoogle.png') }}" alt="" width="30px">
                </a>
                <a href="">
                    <img class="sosmed" src="{{ URL::asset('images/lambangFacebook.png') }}" alt="" width="30px">
                </a>
            </div>
            <div class="forgotpassword">
                <span>Lost your password ? <a href="">Click Here !</a></span>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>