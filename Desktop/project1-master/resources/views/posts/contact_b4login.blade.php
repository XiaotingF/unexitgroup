@extends('layouts.layout')
@include('layouts.nav')
@section('content')
<style>
    .left-half {
  background-color: rgba(112,149,251,0.8);
  position: absolute;
  left: 40px;
  width: 50%;
  height: 500px;
}
.right-half {
  color: rgb(112,149,251);
  background-color: rgba(64,64,151,0);
  position: absolute;
  right: -150px;
  width: 50%;
  height: 500px;
}
section {
  color: #fff;
  text-align: center;
}

h3{
    text-align: center;
  font-weight: 300;
  font-size: 2rem;
}
h2{
    text-align: center;

}


form{
	color:black;
}
button {
	zoom: 1.5;
	background-color: rgb(112,149,251);
	color: #fff;
	border-width: 0px;
	border-radius: 5px;
	font-weight: 300;
    cursor: pointer;
}
</style>

<body>

<div id= "one">
	<div class="left-half">
        <div id="top-title ">
        <h1 color>CONTACT DETAILS</h1>
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

    <div class="right-half">
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
	    <button type="submit" value="Send">Send</button>
        </form>
</div>

   	    </div>
   	</div>


</body>


@endsection