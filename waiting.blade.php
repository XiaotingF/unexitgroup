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
                     <?php if(is_object($w1)) : ?>
                        <div class="col-lg-4">
                      <div class="card text-center" >
                                <img class="card-img-top" src="/uploads/avatars/{{ $w1->avatar }}" style="width:270px; height:270px; ">
                                <div class="card-body">
                                  <h5 class="card-title">{{$w1->name}}</h5>
                                  <p class="card-text">Name: {{$w1->name}}<br>
                                    Gender: {{$w1->gender}}
                                  </p>
                                </div>
                                <form action="/accept" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="w1" value="<?php echo htmlspecialchars($w1->id); ?>">
                                <button class="btn btn-primary" type = "submit" >Accept</button>
                                </form>
                                <br>
                                <form action="/reject" method="post">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="w1" value="<?php echo htmlspecialchars($w1->id); ?>">
                                <button class="btn btn-primary" type = "submit" >Reject</button>
                                </form>
                                <div class="card-footer">
                                  <small class="text-muted"></small>
                                </div>
                      </div>
                  </div>
                  <?php endif; ?>
                  <?php if(is_object($w2)) : ?>
                      <div class="col-lg-4">
                      <div class="card text-center" >
                                <img class="card-img-top" src="/uploads/avatars/{{ $w2->avatar }}" style="width:270px; height:270px; ">
                                <div class="card-body">
                                  <h5 class="card-title">{{$w2->name}}</h5>
                                  <p class="card-text">Name: {{$w2->name}}<br>
                                    Gender: {{$w2->gender}}
                                  </p>
                                </div>
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
