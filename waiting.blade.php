@extends('profile.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header" style="text-align: center"><h2>Waiting<h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card-deck">
                     <?php if(is_object($waiting1)) : ?>
                        <div class="col-lg-4">
                      <div class="card text-center" >
                                <img class="card-img-top" src="/uploads/avatars/{{ $waiting1->avatar }}" style="width:200px; height:200px; ">
                                <div class="card-body">
                                  <h5 class="card-title">{{$waiting1->name}}</h5>
                                  <p class="card-text">Name: {{$waiting1->name}}<br>
                                    Gender: {{$waiting1->gender}}
                                  </p>
                                <form action="" method="post">
                                <button class="btn btn-primary" type = "submit" >Accept</button>
                                </form>
                                <br>
                                <form action="" method="post">
                                <button class="btn btn-primary" type = "submit" >Reject</button>
                                </form>
                                <br>
                                </div>
                              
                                <div class="card-footer">
                                  <small class="text-muted"></small>
                                </div>
                      </div>
                  </div>
                  <?php endif; ?>


                  <?php if(is_object($waiting2)) : ?>
                      <div class="col-lg-4">
                      <div class="card text-center" >
                                <img class="card-img-top" src="/uploads/avatars/{{ $waiting2->avatar }}" style="width:200px; height:200px; ">
                                <div class="card-body">
                                  <h5 class="card-title">{{$waiting2->name}}</h5>
                                  <p class="card-text">Name: {{$waiting2->name}}<br>
                                    Gender: {{$waiting2->gender}}
                                  </p>
                                </div>
                                <button class="btn btn-primary" type = "submit" >Accept</button>
                                <div class="card-footer">
                                  <small class="text-muted"></small>
                                </div>
                      </div>
                  </div>
                  <?php endif; ?>
                 
           
                    </div>

                </div>
<br>

</div>



</div>


    </div>
</div>
@endsection