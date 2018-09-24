@extends('profile.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{Auth::user()->name}}'s Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Personal Information</h3>
                    <br>{{$user->gender}}</br>
                    <img src="/uploads/avatars/{{ $user->avatar }}" style="width:100px; height:100px; float:left; border-radius:50%; margin-right:25px;">
<form enctype="multipart/form-data" action="/profile/{{ $user->id }}" method="POST"><br>
    <input type="file" name="avatar"></br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}"></br>
    <input type="submit" class="pull-right btn btn-sm btn-primary">
</form>           
     </div>
            </div>
        </div>
    </div>
</div>
@endsection
