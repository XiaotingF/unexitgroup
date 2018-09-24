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
        <div class="col-lg-4 col-md-4 col-sm-4  col-xs-5">
    <div class="card">
        <div class ="card-body">
            <h3>Log In</h3>
            
            <form method="post" action="/login" name="loginForm" onsubmit="return validateLogin()">
    
            <div class="form-group">
        <label for="inputemail1">Email address</label>
        <input type="email" name = "email1" class="form-control" id="inputemail1"  placeholder="Enter email" required>
      </div>
      <div class="form-group">
        <label for="inputpassword1">Password</label>
        <input type="password" name ="password1" class="form-control" id="inputpassword1" placeholder="Password" required>
      </div>
      <a href="preference" class="btn btn-default">Login</a>
   </div>

@endsection