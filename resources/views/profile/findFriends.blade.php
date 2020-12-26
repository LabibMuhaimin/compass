@extends('layouts.app')

@section('content')
<style>
.card-default{width:auto;height:50px;background:rgba(0,0,0,0.2);border-radius:0px;}
.card-body{width:700px;height:auto;border-bottom:1px solid #ccc; margin-bottom:5px;margin-left:30px;background:white;}
.card-body>h4{color:black;}
</style>
<div class="container">
    <div class="row">
        @include('profile.sidebar')


        <div class="col-md-9">
            <div class="card card-default">
            <h4 class="card-heading" style="margin-top:20px;text-align:center;">{{Auth::user()->name}}'s Friends Suggestion</h4>
              </div>  
                <div class="card-body" style="width:700px;border-bottom:1px solid #ccc; margin-bottom:15px;margin-left:30px;">
                    <div class="col-sm-12 col-md-12">
                        @foreach($allUsers as $uList)
                        
                        <div class="row" style="border-bottom:1px solid #ccc; margin-bottom:15px">
                            <div class="col-md-2 pull-left">
                            <img src="{{ asset('storage/app/'.$uList->avatar)}}" alt="Profile Photo" width="80px" height="80px" style="border-radius:50%">
                            </div>
             <div class="col-md-7 pull-left">
                <h3 style="margin:0px;"><a href="{{url('/profile')}}/{{$uList->slug}}">
                                  {{ucwords($uList->name)}}</a></h3>
                                
                                
                                <h5>{{$uList->location}}</h5>

                            </div>
                            

                            <div class="col-md-3 pull-right">

                                <?php
                                $check = DB::table('friendships')
                                        ->where('user_requested', '=', $uList->id)
                                        ->where('requester', '=', Auth::user()->id)
                                        ->first();

                                if($check ==''){
                                ?>
                                   <p>
                                        <a href="{{url('/')}}/addFriend/{{$uList->id}}"
                                           class="btn btn-info btn-sm">Add to Friend</a>
                                    </p>
                                <?php } else {?>
                                    <p>Request Already Sent</p>
                                <?php }?>
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
