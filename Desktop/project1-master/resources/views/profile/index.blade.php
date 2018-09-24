@extends('profile.master')

@section('content')



    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{Auth::user()->name}}'s Profile      </h2><h3>Gender:{{$user->gender}}<h3>  
</div>

                <div class="card-body">

                <div class="row">

  

                    <img src="/uploads/avatars/{{ $user->avatar }}" style="width:100px; height:100px; float:left; border-radius:50%; margin-right:25px;"></br>
<form enctype="multipart/form-data" action="/profile/{{   $user->id }}" method="POST"><br>
    <input type="file" name="avatar"></br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}"></br>
    <input type="submit" class="pull-right btn btn-sm btn-primary"></br>
</form>    
<!--<div class="caption">-->
     
         
      </div>
    </div>
  </div>
</div>
              
</div>
</div>
</div>

</example-component>

@endsection
