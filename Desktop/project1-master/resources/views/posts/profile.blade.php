@extends('layouts.layout')

@include('layouts.rnav')
@section ('content')
<div id= "one">

<!--<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">-->
<div class="row">

<div id = "raw" class="col-lg-3 col-md-3 col-sm-4 col-xs-10">

     <div id = "mini_profile" >

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{Auth::user()->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

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
        </div>
    </div>
</div>
@endsection