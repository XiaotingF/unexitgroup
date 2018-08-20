@extends('layouts.app')


@section('content')

        <div id="top-title">
            <h1>WeMatch</h1>
            <h4>Melbourne's no.24 matchmaking site</h4>
            
        </div>
        

        <div class="container">


            <div class="row">
                <div id="home_headers">
                  
                <div class="col-lg-3">
                      <!--
                 <h3>

                        Find your perfect match and start talking to them today!
                </h3>
           -->

                </div>

           

                <div class="col-lg-8 text-center">
                    
                 <h4>

                        Take a look at some of our users!
                </h4>
          

                </div>
                </div>
            </div>

        
        <div class="row">

        <div id = "raw" class="col-lg-3 col-md-3 col-sm-4 col-xs-10">

            <div id = "mini_profile" >

                <img src="{{asset('img/user3.png')}}" width="230" height="230">
                <h3>Tom Smith</h3>
                <p>23</p>
                <p id="bio">Short user bio. Short user bio. Short user bio. Short user bio Short user bio. Short user bio. Short user bio. </p>
                <input type="submit" class="btn btn-primary btn-lg" value="Match">



                
            </div>
            



        </div>
        <div id= "home_cards">


            <div class="col-lg-4">
                <div class="card text-center"><img src="{{asset('img/user.jpg')}}" width="330" height="250" class="card-img-top">
                <div class="card-block text-center">
                    <h3 class="card-title">Jane Smith</h3>
                    <p class="card-text">Short user bio. Short user bio. Short user bio. Short user bio Short user bio. Short user bio. Short user bio </p>
                </div>
                </div>
            </div>
               
            <div class="col-lg-4">
                <div class="card text-center"><img src="{{asset('img/user.jpg')}}" width="330" height="250" class="card-img-top">
                <div class="card-block text-center">
                    <h3 class="card-title">Jane Smith</h3>
                    <p class="card-text">Short user bio. Short user bio. Short user bio. Short user bio Short user bio. Short user bio. Short user bio </p>
                </div>
                </div>
            </div>
               

            <div class="col-lg-4">
                <div class="card text-center"><img src="{{asset('img/user3.png')}}" width="250" height="250" class="card-img-top img-fluid">
                <div class="card-block text-center">
                    <h3 class="card-title">Jane Smith</h3>
                    <p class="card-text">Short user bio. Short user bio. Short user bio. Short user bio Short user bio. Short user bio. Short user bio </p>
                </div>
                </div>
            </div>
               
            <div class="col-lg-4">
                <div class="card text-center"><img src="{{asset('img/user3.png')}}" width="250" height="250" class="card-img-top img-fluid">
                <div class="card-block text-center">
                    <h3 class="card-title">Jane Smith</h3>
                    <p class="card-text">Short user bio. Short user bio. Short user bio. Short user bio Short user bio. Short user bio. Short user bio </p>
                </div>
                </div>
            </div>

            </div>


            


            



        </div>


        </div>


@endsection

        
        
  