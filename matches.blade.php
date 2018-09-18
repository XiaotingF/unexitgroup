@extends('layouts.app')

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

         <div class = "card-header" >Jane Smith</div>
             <div class = "card-body" ><img src="../user3.png" width="280" height="200"> </div>




</div>
</div>

<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >Jane Smith</div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>
<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >Jane Smith</div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>


</div>


<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >Jane Smith</div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>
<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >Jane Smith</div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>
<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >Jane Smith</div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>
<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >Jane Smith</div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>
<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >Jane Smith</div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>
<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >Jane Smith</div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>
<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" >Jane Smith</div>
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
