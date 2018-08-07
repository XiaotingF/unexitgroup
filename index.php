<!DOCTYPE html>
<html>
<head>
	<title>WeMatch</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="main.js"></script>
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		

		<div class="navbar-header">

			<button type="button" class="navbar-toggle" data-toggle ="collapse" data-target="#mainNavBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                

		</div>

		<div class="collapse navbar-collapse" id="mainNavBar">
                <ul class="nav navbar-nav ">
                	<li><a href="#" class="navbar-brand"><img src="logo.png"></a></li>
                    <li class="active"><a href='@'>Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="faqs.html">FAQs</a></li>


                </div>
	</div>
</nav>



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
		<h3>Log In</h3>
		
		<form method="post" action="" name="loginForm" onsubmit="return validateLogin()">

        <div class="form-group">
    <label for="inputemail1">Email address</label>
    <input type="email" name = "email1" class="form-control" id="inputemail1"  placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="inputpassword1">Password</label>
    <input type="password" name ="password1" class="form-control" id="inputpassword1" placeholder="Password" required>
  </div>
 <button id= log_button type="submit" class="btn btn-secondary">Log In</button><br></form>
 
<div id = "regi">
 <p>New user? Register</p>

  <button id= register_button type="" class="btn btn-success" data-toggle="modal" data-target="#popUp">Sign Up</button>

  </div>

  <div class="modal fade" id="popUp">
  	<div class="modal-dialog">
  		<div class="modal-content">

  			<div class="modal-header text-center">
  				<button type="button" class="close" data-dismiss="modal">&times;</button>
  				<h2>Sign Up</h2>
  			</div>
  			<div class="modal-body">
  				<form method="post" action="" name="signUpForm" onsubmit="return validateSignUp()">
  					<div class="form-group">
   					 <label for="inputfname">First Name</label>
  					  <input type="text" name = "firstname" class="form-control" id="inputfname"   placeholder="First Name" required>
 					 </div>
 					 <div class="form-group">
   					 <label for="inputlname">Last Name</label>
  					  <input type="text" name = "lastname" class="form-control" id="inputlname"  placeholder="Last Name" required>
 					 </div>
  					<div class="form-group">
   					 <label for="inputemail">Email address</label>
  					  <input type="email" name = "email2"class="form-control" id="inputemail"  placeholder="Enter email" required>
 					 </div>
 					 <div class="form-group">
    					<label for="password1">Password</label>
					    <input type="password" name="password2" class="form-control" id="password1" minlength = 6 placeholder="Password" required>
					  </div>
					  <div class="form-group">
				    <label for="password2">Confirm Password</label>
				    <input type="password" name="conpassword2"class="form-control" id="password2" minlength = 6 placeholder="Confirm Password" required>
				  </div>
			</div>

  			<div class="modal-footer"d>
  				<button type = "submit" class="btn btn-success btn-block">Sign Up</button>
  				
  			</div>


  				</form>
  			
  			
  		</div>
  	</div>
  </div>
 	
 </button>
    
        



	</div>

	
	
</div>
</div>

</div>

</div>

<div class="two">

	<div id = "steps" class="container">
		<div class="row">
			<div class="col-sm-6">
				<img src="img1.jpg" class="img-responsive" id="couple_image">
			</div>
			<div id = "steps_text" class="col-sm-6 text-centre">
				<h2>Find your ideal partner in 4 simple steps</h2>

			<ol id="steps_list">
				<li>Create WeMatch account</li><br>
				<li>Tell us about yourself</li><br>
				<li>Tell us about your ideal partner</li><br>
				<li>Click Match</li>
			</ol>
				
			</div>
		</div>
		
	</div>
	
</div>
<div class="two">
<div class="container">
	
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6">
			<h4>Jeremy, 22</h4>
			<p>Short paragraph of positive impact WeMatch has had on user. Short paragraph of positive impact WeMatch has had on user.Short paragraph of positive impact WeMatch has had on user.Short paragraph of positive impact WeMatch has had on user.</p>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<h4>Trista, 19</h4>
			<p>Short paragraph of positive impact WeMatch has had on user. Short paragraph of positive impact WeMatch has had on user.Short paragraph of positive impact WeMatch has had on user.Short paragraph of positive impact WeMatch has had on user.</p>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<h4>Michael, 20</h4>
			<p>Short paragraph of positive impact WeMatch has had on user. Short paragraph of positive impact WeMatch has had on user.Short paragraph of positive impact WeMatch has had on user.Short paragraph of positive impact WeMatch has had on user.</p>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<h4>Shakira, 45</h4>
			<p>Short paragraph of positive impact WeMatch has had on user. Short paragraph of positive impact WeMatch has had on user.Short paragraph of positive impact WeMatch has had on user.Short paragraph of positive impact WeMatch has had on user.</p>
		</div>


	</div>
</div>
</div>

<footer class="container-fluid text-centre">
	<div class="row">
		
		<div class="col-sm-4">
			<h3>About Us</h3><br>
			<p>Melbourne based online matchmaking<br> system. Specialising in matching all of <br>our users with the the ideal partners <br>that match their preferences
			
			</p>

			
		</div>
		<div class="col-sm-4">
			<h3>Contact Us</h3><br>
			<p>+1234567890
				<br>124 La Trobe Street<br> Melbourne VIC 3000</p>

			
		</div>
		<div class="col-sm-4">
			<h3> Follow Us</h3><br>
			<a href="http://www.facebook.com" class="fa fa-facebook"></a>
			<a href="http://www.google.com" class="fa fa-google"></a>
			<a href="http://www.twitter.com" class="fa fa-twitter"></a>
			<a href="http://www.instagram.com" class="fa fa-instagram"></a>

			
		</div>
	</div>
	
</footer>
</body>
</html>