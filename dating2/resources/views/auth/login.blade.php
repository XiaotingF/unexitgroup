@extends('layouts.app')

@section('content')

    <!DOCTYPE html>
<html>
<head>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    <title>WeMatch</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="main.js"></script>
</head>
<body>




<div id= "one">

    <div class="row">
        <div class="col-lg-7">
            <div class="landing-text">

                <h1>WeMatch</h1>
                <h3>Melbourne's no.24 matchmaking site</h3>

            </div>
        </div>



                 <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-sm-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


<div id = "two">


    <div class="step">
        <img src="step.png" style="width:100%; height:10%;" >
    </div>
    <br>
    <div class="two">

        <div class="container">
            <div class="row">

                <div class="col-sm-5">
                    <!-- <img src="img1.jpg" class="img-responsive" > -->
                </div>
                <div class="col-sm-6 text-centre">


                </div>
            </div>

        </div>

    </div>
    <div class="two">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <h4>#1</h4>
                    <p>Login or Register</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <h4>#2</h4>
                    <p>Fill the profile and references</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <h4>#3</h4>
                    <p>Press Match button</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <h4>#4</h4>
                    <p>Match your ideal partners</p>
                </div>


            </div>
        </div>
    </div>

    <footer class="container">
        <div class="row">

            <div class="col-sm-6">
                <h3>About Us</h3><br>
                <p>Melbourne based online matchmaking<br> system. Specialising in matching all of <br>our users with the the ideal partners <br>that match their preferences

                </p>

            </div>
            <div class="col-sm-6">
                <h3>Contact Us</h3><br>
                <p>+1234567890
                    <br>124 La Trobe Street<br> Melbourne VIC 3000</p>


            </div>
            <div class="col-sm-4">
                <!-- <h3>About Us</h3><br>
                <p>Small paragraph about us</p> --->


            </div>
        </div>
</div>
<br>

<footer>
<div id= "register_button">
    <div id= "share-buttons">
        <h4>Share WeMatch</h4>
        <!-- Facebook -->
        <a href="http://www.facebook.com/sharer.php?u=http://wematch.com.s3-website-ap-southeast-2.amazonaws.com/index.html" target="_blank">
            <img src="Sfacebook.png" alt="Facebook" />
        </a>

        <!-- Google+ -->
        <a href="https://plus.google.com/share?url=http://wematch.com.s3-website-ap-southeast-2.amazonaws.com/index.html" target="_blank">
            <img src="Sgoogle.png" alt="Google" />
        </a>

        <!-- Twitter -->
        <a href="https://twitter.com/share?url=http://wematch.com.s3-website-ap-southeast-2.amazonaws.com/index.html" target="_blank">
            <img src="Stwitter.png" alt="Twitter" />
        </a>

        <!-- Tumblr -->
        <a href="http://www.tumblr.com/share/link?url=http://wematch.com.s3-website-ap-southeast-2.amazonaws.com/index.html" target="_blank">
            <img src="Stumblr.png" alt="Tumblr" />
        </a>
    </div>
    <br>
    <p>&copy; 2018 WeMatch<p></div>


</footer>
</body>
</html>

@endsection


