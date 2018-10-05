@extends('layouts.layout')

@include('layouts.rnav')

@section('content')

    <div id= "one">

<!--<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">-->
<div class="container">


            <div class="row">
                <div id="home_headers">
                <div class="col-lg-3">

<img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
<h2>{{ $user->name}}'s Profile</h2>
<form enctype="multipart/form-data" action="/home1" method="POST">
    <label>Update Profile Image</label>
    <input type="file" name="avatar">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" class="pull-right btn btn-sm btn-primary">
</form>
<input type="submit" class="btn btn-primary btn-lg" value="Match">



                
            </div>
            



        </div>
        <div id= "home_cards">


            <div class="col-lg-4">
                <div class="card text-center"><img src="{{asset('img/user.jpg')}}" width="330" height="250" class="card-img-top">
                <div class="card-block text-center">
                    <h3 class="card-title"><?php echo $single1->name;?></h3>
                    <p class="card-text"><?php echo 'sim:'.$sim1.'%</br>';?>Short user bio. Short user bio. Short user bio. Short user bio Short user bio. Short user bio. Short user bio </p>
                </div>
                </div>
            </div>
               
            <div class="col-lg-4">
                <div class="card text-center"><img src="{{asset('img/user.jpg')}}" width="330" height="250" class="card-img-top">
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