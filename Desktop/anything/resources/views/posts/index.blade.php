@extends('layouts.master')
@include('layouts.nav')

@section('content')

<div id= "one">
	
    <div class="row">
        <div class="col-lg-7">
    <div class="landing-text">
    
        <h1>WeMatch</h1>
        <h3>Melbourne's no.24 matchmaking site</h3>
        
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4  col-xs-5">
    <div class="card">
        <div class ="card-body">
            <h3>Log In</h3>
            

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

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
                        <div class="modal-header text-center">
                              
                                <a href="home1" class="btn btn-default">Login</a>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                    </div>
                    </div>
    <div id = "regi">
     <p>New user? Register</p>
    
     <a href="register" class="btn btn-default">Sign Up</a>
    
      </div>
    
      <div class="modal fade" id="popUp">
          <div class="modal-dialog">
              <div class="modal-content">
    
                  <div class="modal-header text-center">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h2>Sign Up</h2>
                  </div>
                  <div class="modal-body">
                     
                  
                  
              </div>
          </div>
      </div>
         
    
     
        
            
    
    
    
        </div>
    
        
        
    </div>
    </div>
    
    </div>
    
    </div>
    
@section('footer')


<script src="/js/file.js"></script>


@endsection
 