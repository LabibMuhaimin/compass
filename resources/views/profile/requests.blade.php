@extends('layouts.app')
@section('content')

<style>
.card-default{width:auto;height:50px;background:rgba(0,0,0,0.2);border-radius:0px;}
.card-body{width:700px;border-bottom:1px solid #ccc; margin-bottom:5px;margin-left:30px;background:white;}
.card-body>h4{color:black;}


</style>
<div class="container">
    <div class="row">
    @include('profile.sidebar')
        <div class="col-md-9">
            <div class="card card-default">
                <h4 class="card-heading" style="margin-top:20px;text-align:center;">{{Auth::user()->name}}'s Friend Requests</h4>
            </div>
                <div class="card-body">
                    <div class="col-sm-12 col-md-12">
                    @if ( session()->has('msg') )
                         <p class="alert alert-success">
                                      {{ session()->get('msg') }}
                                   </p>
                                @endif
                                @foreach($abcd as $uList)
                        
                               
                                <div class="row" style="border-bottom:1px solid #ccc; margin-bottom:15px">
                            <div class="col-md-2 pull-left">
                            <img src="{{ asset('storage/app/'.$uList->avatar)}}" alt="My Profile Photo" width="80px" height="80px" style="border-radius:50%">
                            </div>

                            <div class="col-md-7 pull-left">
                                
                                <h3 style="margin-left:50px;"><a href="{{url('/profile')}}/{{$uList->slug}}">
                                  {{ucwords($uList->name)}}</a></h3>
                               

                            </div>

                            <div class="col-md-3 pull-right">

                                     <p>
                                        <a href="{{url('/accept')}}/{{$uList->name}}/{{$uList->id}}"  class="btn btn-success btn-sm">Confirm</a>

                                         <a style="margin-top:5px;"href="{{url('/requestRemove')}}/{{$uList->id}}"  class="btn btn-danger btn-sm">Remove</a>

                                     </p>

                            </div>

                        </div>
                        @endforeach
                    </div>




                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
