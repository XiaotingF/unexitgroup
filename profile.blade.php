@extends('layouts.layout')

@include('layouts.rnav')

@section('content')

     <div id= "one">
	

        

        

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

                
                <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <h2>{{ $user->name}}'s Profile</h2>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
                <input type="submit" class="btn btn-primary btn-lg" value="Match">
                </form>


                
            </div>
            



        </div>
        <div id= "home_cards">


            <div class="col-lg-4">
                <div class="card text-center"><img src="/uploads/avatars/{{ $single1->avatar }}" width="330" height="250" class="card-img-top">
                <div class="card-block text-center">
                    <h3 class="card-title"><?php echo $single1->name;?></h3>
                    <p class="card-text"><?php echo 'sim:'.$sim1.'%</br>';?>Short user bio. Short user bio. Short user bio. Short user bio Short user bio. Short user bio. Short user bio </p>
                </div>
                </div>
            </div>
               
            <div class="col-lg-4">
                <div class="card text-center"><img src="/uploads/avatars/{{ $single2->avatar }}" width="330" height="250" class="card-img-top">
                <div class="card-block text-center">
                    <h3 class="card-title"><?php echo $single2->name;?></h3>
                    <p class="card-text"><?php echo 'sim:'.$sim2.'%</br>';?>Short user bio. Short user bio. Short user bio. Short user bio Short user bio. Short user bio. Short user bio </p>
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

        
