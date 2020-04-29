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
            background: url("{{ URL::asset('images/LoginPageBackground.jpg') }}");
            background-position-x: right;
        }
        .content{
            display: block;
        }
        .login-container{
            margin-left: 200px;
            margin-top: 75px;
            float: left;
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
    </style>
    <title>Register to T-tip</title>
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
            <div class="login-form">
                <form class="px-5 mt-2" action="/register/create" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="John Doe" value="{{ old('nama') }}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="email@example.com" value="{{ old('email') }}">
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
                  <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password">
                  </div>
                  <div class="form-group button">
                    <button type="submit" class="btn">Submit</button>
                    <a href="/login">
                        <div class="btn" style="color: black">Cancel</div>
                    </a>
                  </div>
                </form>
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
