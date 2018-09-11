@extends('layouts.layout')

@include('layouts.nav')
@section ('content')
<div id= "one">

<!--<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">-->
<div class="row">

<div id = "raw" class="col-lg-3 col-md-3 col-sm-4 col-xs-10">

     <div id = "mini_profile" >

<img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
<h2>{{ $user->name}}'s Profile</h2>
<form enctype="multipart/form-data" action="/profile" method="POST">
    <label>Update Profile Image</label>
    <input type="file" name="avatar">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" class="pull-right btn btn-sm btn-primary">
</form>
</div>
</div>

<div id = "questions" class="col-lg-9">

	<h1>Personal information</h1>
        <br>
        <form method="post" action="/profile2">
        	<input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
        <label for="">1. Please confirm the gender of your desired partner.</label>
        <label for="male">Male</label>
        <input type="radio" name="q1" id="male" value="1" >
        <label for="female">Female</label>
        <input type="radio" name="q1" id="female" value="2">
        </div>
       
     <div class="form-group">
<label for="q2">2. What is your marital status.</label>
<select id="q2" name="q2"  data-component="dropdown" required>
            <option value="">  </option>
            <option value="1"> I have never been married </option>
            <option value="2">  I am divorced </option>
            <option value="3"> I am separated </option>
            <option value="4">  I am a widow/widower </option>
           </select>
       </div>
            
<label for="q3">3. What is your highest level of education?</label>

<select id="q3" name="q3"  data-component="dropdown" required>
            <option value="">  </option>
            <option value="1"> No Education </option>
            <option value="2">  Year 10 Certificate </option>
            <option value="3"> Secondary School Certificate </option>
            <option value="4"> TAFE Diploma/ Vocational Studies/ Apprenticeship </option>
            <option value="5"> Bachelor’s Degree</option>
            <option value="6"> Master’s Degree </option>
            </select>
            <br><br>


<label for="">4. How important is your partner’s highest level of education?  </label>
<select id="q4" name="q4"  data-component="dropdown" required>
            <option value="">  </option>
            <option value="1"> Not Important</option>
            <option value="2"> Important</option>
            <option value="3"> Very Important</option>
            </select>

            <br><br>



<label for="">5. What would be the age range for your desired partner? </label>
<select id="q5" name="q5"  data-component="dropdown" required>
            <option value="">  </option>
            <option value="1">18-29</option>
            <option value="2">30-44</option>
            <option value="3">45+</option>
            </select>
<br><br>


<label for="">6. What would be the height range of your desired partner?</label>
<select id="q6" name="q6"  data-component="dropdown" required>
            <option value="">  </option>
            <option value="1"> Less than 150</option>
            <option value="2"> 160-174</option>
            <option value="3"> 175-189</option>
            <option value="4"> 190+</option>
            </select>
            <br><br>


            <label for="q7">7. Do you smoke?  </label>
<select id="q7" name="q7"  data-component="dropdown" required>
            <option value="">  </option>
            <option value="1"> Yes</option>
            <option value="2"> No</option>
         
            </select>
            <br>
            <br>
            
<label for="q8">8.Do you accept if your partner smokes?  </label>
<select id="q8" name="q8"  data-component="dropdown" required>
            <option value="">  </option>
            <option value="1"> Yes</option>
            <option value="2"> No</option>
         
            </select>
            
          <br>
<label for="q9">(How important is this to you) </label>          
  <input type="radio" name="q9" value="1"> Important 
  <input type="radio" name="q9" value="2"> Unimportant
         <br><br>

<label for="q10">10. Do you drink?  </label>
<select id="q10" name="q10"  data-component="dropdown" required>
            <option value="">  </option>
            <option value="1"> Yes</option>
            <option value="2"> No</option>
         
            </select>
            <br>
            <br>
            
<label for="q11">11.Do you accept if your partner drinks?  </label>
<select id="q11" name="q11"  data-component="dropdown" required>
            <option value="">  </option>
            <option value="1"> Yes</option>
            <option value="2"> No</option>
         
            </select>
            
            <br>
          
<input type="radio" name="q12" value="1"> Important 
<input type="radio" name="q12" value="2"> Unimportant<br>
            <br>


<label for="q13">13. Which of the following statements applies to you most?  </label>
<select id="q13" name="q13"  data-component="dropdown" required>
            <option value="">  </option>
            <option value="1"> I like helping others</option>
            <option value="2"> My contributions often raise the level of conversation</option>
            <option value="3"> I always seek adventure</option>
            <option value="4"> I often try to make sure that other people feel good</option>
            <option value="5"> I have little patience</option>

         
            </select>
            <br>
            <br>

            <label for="q14">15. Which of these is most important in a relationship?  </label>
<select id="q14" name="q14"  data-component="dropdown" required>
            <option value="">  </option>
            <option value="1">Moral values</option>
            <option value="2">Similar beliefs</option>
            <option value="3">Risk taking</option>
            <option value="4">Physical appearance</option>
            <option value="5">Compromise</option>
            <option value="6">Sexual compatibility</option>
            <option value="7">Ability to communicate</option>
            </select>
            <br>
            <br>

            <label for="q15">16. Which of these actvities interests you the most?  </label>
<select id="q15" name="q15"  data-component="dropdown" required>
            <option value="">  </option>
            <option value="1">Travelling</option>
            <option value="2">Music</option>
            <option value="3">Fine food and dining</option>
            <option value="4">Theatre/Opera/Dance</option>
            <option value="5">Reading</option>
            <option value="6">Sports</option>
            <option value="7">Clubbing/Socialising</option>
         
            </select>
            <br>
            <br>



            <br>
        <!--<button class="button-profile" type="submit" value="Edit">Edit</button>-->
         <button class="btn btn-default" type="submit" value="submit">Submit</button>
        </form>
	





</div>
</div>




@endsection