@extends('profile.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header" style="text-align: center"><h2>Pending<h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

   

                 <div class="card-deck">
                     <?php if(is_object($single1)) : ?>
                        <div class="col-lg-4">
                      <div class="card text-center" >
                                <img class="card-img-top" src="/uploads/avatars/{{ $single1->avatar }}" style="width:270px; height:270px; ">
                                <div class="card-body">
                                  <h5 class="card-title">{{$single1->name}}</h5>
                                  <p class="card-text">Name: {{$single1->name}}<br>
                                    Gender: {{$single1->gender}}
                                  </p>
                                </div>
                                <div class="card-footer">
                                  <small class="text-muted"></small>
                                </div>
                      </div>
                  </div>
                  <?php endif; ?>
                  <?php if(is_object($single2)) : ?>
                      <div class="col-lg-4">
                      <div class="card text-center" >
                                <img class="card-img-top" src="/uploads/avatars/{{ $single2->avatar }}" style="width:270px; height:270px; ">
                                <div class="card-body">
                                  <h5 class="card-title">{{$single2->name}}</h5>
                                  <p class="card-text">Name: {{$single2->name}}<br>
                                    Gender: {{$single2->gender}}
                                  </p>
                                </div>
                                <div class="card-footer">
                                  <small class="text-muted"></small>
                                </div>
                      </div>
                  </div>
                  <?php endif; ?>
                  <?php if(is_object($single3)) : ?>
                      <div class="col-lg-4">
                      <div class="card text-center" >
                                <img class="card-img-top" src="/uploads/avatars/{{ $single3->avatar }}" style="width:270px; height:270px; ">
                                <div class="card-body">
                                  <h5 class="card-title">{{$single3->name}}</h5>
                                  <p class="card-text">Name: {{$single3->name}}<br>
                                    Gender: {{$single3->gender}}
                                  </p>
                                </div>
                                <div class="card-footer">
                                  <small class="text-muted"></small>
                                </div>
                      </div>
                  </div>
                  <?php endif; ?>
                    <?php if(is_object($single4)) : ?>
                     <div class="col-lg-4">
                      <div class="card text-center" >
                                <img class="card-img-top" src="/uploads/avatars/{{ $single4->avatar }}" style="width:270px; height:270px; ">
                                <div class="card-body">
                                  <h5 class="card-title">{{$single4->name}}</h5>
                                  <p class="card-text">Name: {{$single4->name}}<br>
                                    Gender: {{$single4->gender}}
                                  </p>
                                </div>
                                <div class="card-footer">
                                  <small class="text-muted"></small>
                                </div>
                      </div>
                  </div>
                    <?php endif; ?>
                     <?php if(is_object($single5)) : ?>
                  <div class="col-lg-4">
                      <div class="card text-center" >
                                <img class="card-img-top" src="/uploads/avatars/{{ $single5->avatar }}" style="width:270px; height:270px; ">
                                <div class="card-body">
                                  <h5 class="card-title">{{$single5->name}}</h5>
                                  <p class="card-text">Name: {{$single5->name}}<br>
                                    Gender: {{$single5->gender}}
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