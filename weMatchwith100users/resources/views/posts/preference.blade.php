@extends('profile.master')



@section ('content')

<!--<link rel="stylesheet" type="text/css" href="/app.css">-->

<div id= "one">

<!--<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">-->
<div class="row justify-content-center">


<div class="col-lg-7">

<div class = "card">


    <div class = "card-header"><h2 style="text-align: center">Preferences</h2></div>


   <div class = "card-body">
        <br>
        <form method="post" action="/updatePreferences">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
        <label for="">1. Please confirm the gender of your desired partner.</label>
        <select name="importance1" id="importance1" required>
            <option value="0">Priorty</option>
            <option value="1">1(Not important)</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5(Very Important)</option>
  </select>
 
        <br>
        <input type="radio" name="q1" id="male" value="1" >
        <label for="male">Male</label>
        <input type="radio" name="q1" id="female" value="2">
        <label for="female">Female</label>
        
        </div>
       
 <!--    <div class="form-group">
<label for="q2">2. What is your marital status.</label>
<select id="q2" name="q2"  data-component="dropdown" class = "form-control"required>
            <option value="">  </option>
            <option value="1"> I have never been married </option>
            <option value="2">  I am divorced </option>
            <option value="3"> I am separated </option>
            <option value="4">  I am a widow/widower </option>
           </select>
       </div>-->

         <div class="form-group">
                <label for="">2. What is your marital status?</label>
                <select name="importance2" id="importance2" required>
                <option value="0">Priorty</option>
                <option value="1">1(Not important)</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5(Very Important)</option>
                </select><br>
                <input type="radio" name="q2" id=q21" value="1" >
                <label for="">I have never been married </label><br>
                <input type="radio" name="q2" id="q22" value="2">
                <label for=""> I am divorced </label><br>
                <input type="radio" name="q2" id="q23" value="3" >
                <label for=""> I am separated</label><br>
                <input type="radio" name="q2" id="q24" value="4">
                <label for=""> I am a widow/widower </label>
                
        </div>
       
            
<label for="q3">3. What is your highest level of education?</label>
 <select name="importance3" id="importance3" required>
    <option value="0">Priorty</option>
    <option value="1">1(Not important)</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5(Very Important)</option>
  </select><br>




                
        <input type="radio" name="q3" id="31" value="1" >
        <label for=""> No Education </label><br>
        <input type="radio" name="q3" id="q32" value="2">
        <label for="">  Year 10 Certificate </label><br>
        <input type="radio" name="q3" id="q33" value="3" >
        <label for=""> Secondary School Certificate </label><br>
        <input type="radio" name="q3" id="q34" value="4">
        <label for="">  TAFE Diploma/ Vocational Studies/ Apprenticeship </label>
        <input type="radio" name="q3" id="q35" value="5" >
        <label for="">  Bachelor’s Degree</label><br>
        <input type="radio" name="q3" id="q36" value="6">
        <label for=""> Master’s Degree </label>

            </select>
           <br><br>


<!--<label for="r1">(How important is this in your partner to you?)  </label>
            <input type="radio" name="r1" value="1"> Important 
            <input type="radio" name="r1" value="2"> Unimportant
            <br><br>-->
        

<label for="q4">4. What would be the age range for your desired partner? </label>
<select name="importance4" id="importance4" required>
    <option value="0">Priorty</option>
    <option value="1">1(Not important)</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5(Very Important)</option>
  </select><br>


            <input type="radio" name="q4" id="q41" value="1" >
        <label for=""> 18-29 </label><br>
        <input type="radio" name="q4" id="q42" value="2">
        <label for=""> 30-45 </label><br>
        <input type="radio" name="q4" id="q43" value="3" >
        <label for=""> Above 45</label><br>
        




<br>


<label for="q5">5. What would be the height range of your desired partner?</label>
        <select name="importance5" id="importance5" required>
            <option value="0">Priorty</option>
            <option value="1">1(Not important)</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5(Very Important)</option>
          </select><br>



                      <input type="radio" name="q5" id="q51" value="1" >
                <label for="">  Less than 160cm</label><br>
                <input type="radio" name="q5" id="q52" value="2">
                <label for=""> 160-174cm</label><br>
                <input type="radio" name="q5" id="q53" value="3" >
                <label for=""> 175-190cm</label><br>
                <input type="radio" name="q5" id="q54" value="4" >
                <label for=""> Greater than 190cm</label><br><br>
                


            <label for="q6">6. Do you smoke?  </label><br>



        <input type="radio" name="q6" id="q61" value="1">
        <label for="yes">Yes</label><br>
        <input type="radio" name="q6" id="q62" value="2" >
        <label for="yes"> No</label><br>
        
            <br>
          
        
<label for="q7">7.Do you accept if your partner smokes?  </label>
<select name="importance7" id="importance7" required>
    <option value="0">Priorty</option>
    <option value="1">1(Not important)</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5(Very Important)</option>
  </select><br>



        <input type="radio" name="q7" id="q71" value="1">
        <label for="yes">Yes</label><br>
        <input type="radio" name="q7" id="q72" value="2" >
        <label for="no"> No</label><br>
        
            <br>
         

          <!--
<label for="r2"></label>          
  <input type="radio" name="r2" value="1"> Important 
  <input type="radio" name="r2" value="2"> Unimportant
         <br><br>
     -->

<label for="q8">8. Do you drink?  </label><br>



        <input type="radio" name="q8" id="q81" value="1">
        <label for="yes">Yes</label><br>
        <input type="radio" name="q8" id="q82" value="2" >
        <label for="yes"> No</label><br>
        
            <br>
           
<label for="q9">9.Do you accept if your partner smokes?  </label>
<select name="importance9" id="importance9" required>
    <option value="0">Priorty</option>
    <option value="1">1(Not important)</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5(Very Important)</option>
  </select><br>



        <input type="radio" name="q9" id="q91" value="1">
        <label for="yes">Yes</label><br>
        <input type="radio" name="q9" id="q92" value="2" >
        <label for="no"> No</label><br>
        
            <br>

          <!--
<input type="radio" name="r3" value="1"> Important 
<input type="radio" name="r3" value="2"> Unimportant<br>
            <br>-->

            



<label for="q10">10. Which of the following statements applies to you most?  </label>
 <select name="importance10" id="importance10" required>
    <option value="0">Priorty</option>
    <option value="1">1(Not important)</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5(Very Important)</option>
  </select><br>




                
        <input type="radio" name="q10" id=q101 value="1" >
        <label for=""> I like helping others </label><br>
        <input type="radio" name="q10" id="102" value="2">
        <label for=""> My contributions often raise the level of conversation </label><br>
        <input type="radio" name="q10" id="q103" value="3" >
        <label for="">  I always seek adventure </label><br>
        <input type="radio" name="q10" id="q104" value="4">
        <label for=""> I often try to make sure that other people feel good </label><br>
        <input type="radio" name="q10" id="q105" value="5" >
        <label for="">  I have little patience</label><br>
       

            </select>
           <br><br>

            

      



 <label for="q11">11. Which of these is most important in a relationship?  </label>
 <select name="importance11" id="importance11" required>
    <option value="0">Priorty</option>
    <option value="1">1(Not important)</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5(Very Important)</option>
  </select><br>




                
        <input type="radio" name="q11" id="q111" value="1" >
        <label for="">Moral values</label><br>
        <input type="radio" name="q11" id="112" value="2">
        <label for="">Similar beliefs</label><br>
        <input type="radio" name="q11" id="q113" value="3" >
        <label for=""> Risk taking</label><br>
        <input type="radio" name="q11" id="q114" value="4">
        <label for="">Physical appearance</label><br>
        <input type="radio" name="q11" id="q115" value="5" >
        <label for="">Ability to communicate</label><br>
        <input type="radio" name="q11" id="q116" value="6" >
        <label for="">Sexual compatibility</label><br>
       

            </select>
           <br><br>
          
         



         <label for="q12">12. Which of these actvities interests you the most?  </label>
             <select name="importance12" id="importance12" required>
                <option value="0">Priorty</option>
                <option value="1">1(Not important)</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5(Very Important)</option>
              </select><br>

                  
                    <input type="radio" name="q12" id=q121" value="1" >
                    <label for="">Travelling</label><br>
                    <input type="radio" name="q12" id="122" value="2">
                    <label for="">Music</label><br>
                    <input type="radio" name="q12" id="q123" value="3" >
                    <label for="">Food/Dining</label><br>
                    <input type="radio" name="q12" id="q124" value="4">
                    <label for="">Theatre/Opera/Dance</label><br>
                    <input type="radio" name="q12" id="q125" value="5" >
                    <label for="">Reading</label><br>
                    <input type="radio" name="q12" id="q126" value="6" >
                    <label for="">Clubbing/Socialising</label><br>


            <br>
        <!--<button class="button-profile" type="submit" value="Edit">Edit</button>-->
         <button class="btn btn-primary" type="submit" value="submit" 
         style="margin:auto;display:block">Submit</button>
        </form>
    





</div>
</div>
</div>

</div>




@endsection