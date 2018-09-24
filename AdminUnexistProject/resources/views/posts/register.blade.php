@extends('layouts.layout')
@include('layouts.nav')




@section ('content')
<div id= "one">
	
    <div class="row">
        <div class="col-lg-7">
    <div class="landing-text">
    
        <h1>WeMatch</h1>
        <h3>Melbourne's no.24 matchmaking site</h3>
        </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4  col-xs-10">
            <div class="card">
                <div class ="card-body">      

 <form method="POST" action="/register" name="signUpForm" onsubmit="return validateSignUp()">
                         {{csrf_field()}}
                          
                          <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name = "name" class="form-control" id="name"  placeholder="Name" required>
                          </div>
                          <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name = "email"class="form-control" id="email"  placeholder="Enter email" required>
                          </div>
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" minlength = 6 placeholder="Password" required>
                          </div>
                          <div class="form-group">
                        <label for="conpassword">Confirm Password</label>
                        <input type="password" name="conpassword"class="form-control" id="conpassword" minlength = 6 placeholder="Confirm Password" required>
                      </div>
                      
                    
                     
                   
                </div>
    
                  <div class="modal-footer">
                    <a href="login" class="btn btn-default">Sign Up</a>
                      <!--<button type = "submit" class="btn btn-success btn-block">Sign Up</button> -->
                      
                      
                  </div>
                           @include ('layouts.errors')

                      </form>
                 

</div>


@endsection