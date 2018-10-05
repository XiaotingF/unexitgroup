
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
                            <p>You're logged in as ADMINISTRATOR</p>

                        </div>


                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th width="5">No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Status</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->gender }}</td>

                                    <form method="POST" action="{{ route('admin.dashboard.submit') }}" aria-label="{{ __('Change') }}">
                                        <input type="hidden"  name="_token" value="{{csrf_token() }}">
                                    <td>@if($user->status==0)
                                            <b style="color:green"> Enabled</b>

                                        @else
                                            <b style="color:red">Disabled</b>
                                        @endif
                                        <br>
                                        <select id="loginStatus" name="status">
                                            <option value="0" name="0">Enable</option>
                                            <option value="1" name="1">Disable</option>
                                        </select>

                                       <td>  <a href="dashboard" class="btn btn-primary" id="submit" name="submit" style="color:white">Change</a></td>


                                    </td>
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
