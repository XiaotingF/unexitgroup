@extends('profile.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{Auth::user()->name}}'s Profile</div>


<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    <img src="/uploads/avatars/{{ $user->avatar }}" style="width:100px; height:100px; float:left; border-radius:50%; margin-right:25px;">
<form enctype="multipart/form-data" action="/profile/{{ $user->id }}" method="POST"><br>
    <input type="file" name="avatar"></br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}"></br>
    <input type="submit" class="pull-right btn btn-sm btn-primary">
</form>   
    <input type ="text" name="city" value="{{Auth::user()->city}}"/>
      <div class="caption">
        <p>    <input type ="text" name="city" value="{{Auth::user()->city}}"/>
</p>
        <p><a href="#" class="btn btn-primary" role="button">Edit Profile</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>
                

   
</div>
@endsection
