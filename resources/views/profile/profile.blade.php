@extends('layouts.app')

@section('content')

<div class="container">
      <div class="row">
      @include('profile.sidebar')
            <div class="col-md-9">


            <div class="card text-center">
  <div>
  <h2 class="text-center">{{ $user->name }}'s Profile </h2>
  </div>
  <div> <img class="img-thumbnail" src="{{ asset('storage/app/'.$user->avatar) }}" alt="My Profile Photo" width="140px" height="140px" style="border-radius:10%"></div>
  <div>
    <h3 class="card-title">{{ $user->name }}</h3>
    <h5 class="card-title">From: {{ $user->profile->location }}</h5><br><br>
    @if($user->gender == 1)
    <h4 class="card-text">Gender:  Male</h4><br><br>
    @else
    <h4 class="card-text">Gender: Female</h4><br><br>
    @endif
    <h4 style="text-align:center">About: </h4>
    <h4 class="card-text"> {{ $user->profile->about }}</h4>
    
    <p class="text-center">
                                    @if(Auth::id() == $user->id)
                                    <a class="btn btn-primary" href="{{url('edit',['slug'=>Auth::user()->slug])}}">Update Profile</a>
                                    <a class="btn btn-primary" href="{{url('findFriends',['slug'=>Auth::user()->slug])}}">Find Friends</a>
                                    <a class="btn btn-primary" href="{{url('requests',['slug'=>Auth::user()->slug])}}">My Requests
                                      <span style="color:white; font-weight:bold;
                                       font-size:16px">({{App\Friendship::where('status', 0)
                                                  ->where('user_requested', Auth::user()->id)
                                                  ->count()}})</span></a>
                                    @endif
                              </p>
  </div>
  <div class="card-footer text-muted">
    
  </div>
</div>



            </div>
      </div>
      </div>
@endsection

