@extends('layouts.app')


@section('content')

<style>
body {
  background-image: url("img/home1.jpg");
  background-size: cover;
}

section {
  color: #fff;
  text-align: center;
  background-image: url("img/home1.jpg");
  background-size: cover;
}

h3{
  font-weight: 300;
  font-size: 2rem;
}

</style>
<body>

<section class="container">

	<div class="left-half-contact">
        <div id="top-title">
        <h1>CONTACT DETAILS</h1>
        <br>
        <h2>ADDRESS</h2>
        <h3>RMIT Building 80, Melbourne, AU</h3>
        <br>
        <h2>PHONE</h2>
        <h3>+61 123 123 123</h3>
        <br>
        <h2>EMAIL</h2>
        <h3>wematch@wematch.com.au</h3>
        </div>
  </div>

    <div class="right-half-contact">
   		<div id="top-title">
   		<h1>CONTACT US</h1>
   		<form>
   		<br>
   		<input type="text"  name="name" placeholder="Enter your name" size="40" required>
	<br>
	<br>
	    <input type="email"  name="email" placeholder="Enter your email" size="40"   required>
	<br>
	<br>
	    <input type="tel"  name="phone" placeholder="Enter your mobile number" size="40"  required>
	<br>
	<br>
	    <textarea  name="message" rows="10" placeholder="Enter your message" cols="39" required></textarea>
    <br>
    <br>
	    <button class="button-contact" type="submit" value="Send">Send</button>
	    </form>
   	  </div>
   	</div>

</section>
</body>
@endsection