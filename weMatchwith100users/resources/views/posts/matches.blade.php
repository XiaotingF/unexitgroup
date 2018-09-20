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
         <div class = "card-text">{{'Similarity:'.$sim1.'%'}}</div>
             <div class = "card-body" >
             <img src="/uploads/avatars/{{ $single1->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                 </div>




</div>
</div>

<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >{{$single2->name}}</div>
         <div class = "card-text">{{'Similarity:'.$sim2.'%'}}</div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>
<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >{{$single3->name}}</div>
         <div class = "card-text">{{'Similarity:'.$sim3.'%'}}</div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>


</div>


<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >{{$single4->name}}</div>
         <div class = "card-text">{{'Similarity:'.$sim4.'%'}}</div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>
<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >{{$single5->name}}</div>
         <div class = "card-text">{{'Similarity:'.$sim5.'%'}}</div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>
<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >{{$single6->name}}</div>
         <div class = "card-text">{{'Similarity:'.$sim6.'%'}}</div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>
<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >{{$single7->name}}</div>
         <div class = "card-text">{{'Similarity:'.$sim7.'%'}}</div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>
<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >{{$single8->name}}</div>
         <div class = "card-text">{{'Similarity:'.$sim8.'%'}}</div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>
<div class="col-lg-6">
     <div class = "card" >

        <div class = "card-header" >{{$single9->name}}</div>
         <div class = "card-text">{{'Similarity:'.$sim9.'%'}}</div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>
<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >{{$single10->name}}</div>
         <div class = "card-text">{{'Similarity:'.$sim10.'%'}}</div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>






</div>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
