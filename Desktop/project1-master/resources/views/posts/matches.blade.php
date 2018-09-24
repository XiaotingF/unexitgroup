@extends('profile.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">WeMatch</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  


<div class="col-lg-3">
     <div id = "mini_profile" >
<h2>{{ $user->name}}'s Profile</h2><br>
<img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">

</div>


</div>

<div class="row">
<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >{{$single1->name}}</div>
             <div class = "card-body text-center">
                {{'Similarity:'.$sim1.'%'}}<br>
             <img src="/uploads/avatars/{{ $single1->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                 </div>




</div>
</div>

<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >{{$single2->name}}</div>
             <div class = "card-body text-center">
                {{'Similarity:'.$sim2.'%'}}<br>
                <img src="/uploads/avatars/{{ $single2->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
               
            </div>



</div>
</div>

<br>



<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >{{$single3->name}}</div>
             <div class = "card-body text-center">
                {{'Similarity:'.$sim3.'%'}}<br>
                <img src="/uploads/avatars/{{ $single3->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            </div>



</div>
</div>


<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >{{$single4->name}}</div>
             <div class = "card-body text-center">
                {{'Similarity:'.$sim4.'%'}}<br>
                <img src="/uploads/avatars/{{ $single4->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            </div>



</div>
</div>

<br>



<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >{{$single5->name}}</div>
             <div class = "card-body text-center">
                {{'Similarity:'.$sim5.'%'}}<br>
                <img src="/uploads/avatars/{{ $single5->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            </div>



</div>
</div>



<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >{{$single6->name}}</div>
             <div class = "card-body text-center">
                {{'Similarity:'.$sim6.'%'}}<br>
                <img src="/uploads/avatars/{{ $single6->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            </div>



</div>
</div>

<br>

<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >{{$single7->name}}</div>
             <div class = "card-body text-center">
                {{'Similarity:'.$sim7.'%'}}<br>
                <img src="/uploads/avatars/{{ $single7->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            </div>



</div>
</div>


<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >{{$single8->name}}</div>
             <div class = "card-body text-center">
                {{'Similarity:'.$sim8.'%'}}<br>
                <img src="/uploads/avatars/{{ $single8->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            </div>



</div>
</div>

<br>

<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >{{$single9->name}}</div>
             <div class = "card-body text-center">
                {{'Similarity:'.$sim9.'%'}}<br>
                <img src="/uploads/avatars/{{ $single9->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            </div>



</div>
</div>



<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >{{$single10->name}}</div>
             <div class = "card-body text-center">
                {{'Similarity:'.$sim10.'%'}}<br>
                <img src="/uploads/avatars/{{ $single10->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            </div>



</div>
</div>





</div>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection