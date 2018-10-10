@extends('layouts.app')

@section('content')

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
                    <div class="alert alert-success" role="alert">
                    <p>You're logger in as ADMINISTRATOR</p>

                        </div>
                        
                        
                        <table class="table table-hover table-bordered">
                      <thead>
                        <tr>
                          <th width="5">No.</th>
                          <th>Member Name</th>
                          <th>Email</th>
                          <th>Gender</th>
                          <th>Role</th>
                          <th>Status</th>

                        </tr>
                      </thead>
                      <tbody>
                      <form method="post" action="/updatehome">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @foreach ($users as $key => $value)
                          <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->gender }}</td>
                            <td>{{ $value->admin}}</td>
                            <td>@if($value->status==0)
                            <b style="color:green"> enable</b>
                            
                            @else
                            <b style="color:red">Disabled</b>
                            @endif
                            <br>
                           
                            <button id="showSelectDiv{{$value->id}}"
                            class="btn btn-primary btn-fill" type = "submit" value="submit">
                            Change Status

                            </button>
                            <div id="selectDiv{{$value->id}}">

                            <select id="loginStatus{{$value->id}}" name="status">
                            <option value="">select a option</option>
                            <option value="0">enable</option>
                            <option value="1">Disable</option>
                            </select>
                            </form>
            




                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
