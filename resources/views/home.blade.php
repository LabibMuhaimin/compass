@extends('layouts.app')

@section('content')



<div class="container">
<div class="row">
    @include('profile.sidebar')

<div class="col-lg-6">
<form role="form" action="{{route('status.posts')}}" method="post" style="border-bottom:2px solid #ccc; margin-bottom:15px;margin-left:30px;margin-top:30px">
@csrf
<div class="form-group"><span class="fas fa-edit"></span>
<textarea placeholder="What's on your mind! {{ Auth::user()->name }}" name="posts" class="form-control"  rows="2"></textarea>
<center><button type="submit" class="btn btn-primary" style="margin-bottom:35px;">Post</button></center>
</div>

</form>
</hr>


@if(!$posts->count())
        <h4 style="margin-top:50px;text-align:center;">There's Nothing New</h4>
    @else
        @foreach($posts as $posts)
                    @if($posts->post_id == Null)
        <article class="post" data-postid="{{ $posts->id }}" style="border-bottom:1px solid #ccc; margin-bottom:15px;margin-left:30px;margin-top:30px;border:1px solid grey;border-radius:2%;">
       <div class="media">
       <a class="pull-left" href="#">
       <img class="media-object" alt="{{ $posts->user->name }}'s Photo" src="{{ asset('storage/app/'.$posts->user->avatar)}}" width="80px" height="80px" style="margin-left:15px;margin-top:15px;border-radius:10%">
       </a>
       <div class="media-body" style="margin-left:15px;margin-top:15px;">
        <h4 class="media-heading"><a href="#">{{ $posts->user->name }}</a></h4>
        <p>{{ $posts->content }}  </p>
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item">{{ $posts->created_at->diffForHumans() }}</li>
                        <li class="list-group-item"><a href="{{route('status.like',['post_id'=>$posts->id])}}"><span class="fas fa-thumbs-up"></span></a></li>
                        <li class="list-group-item">{{ $posts->likes->count() }} {{Str::plural('likes',$posts->likes->count())}}</li>
                    </ul>
       </div>
       </div><hr>
        @foreach($posts->replies as $reply)
            <div class="media">
            <a class="pull-left" href="#">
       <img class="media-object" alt="{{ $reply->user->name }}'s Photo" src="{{ asset('storage/app/'.$reply->user->avatar)}}" width="30px" height="30px" style="margin-left:50px;border-radius:10%;margin-top:10px;">
       </a>
       <div class="media-body" style="margin-left:15px;margin-top:15px;">
        <h5 class="media-heading"><a href="#">{{ $reply->user->name }}</a></h5>
        <h6>{{ $reply->created_at->diffForHumans() }}</h6>
        <ul class="list-inline">
                        
                    </ul>
        <p>{{ $reply->content }} </p>
                    
                    </div>
            </div>
        @endforeach
       <form role="form" action="{{route('status.reply', ['post_id'=>$posts->id])}}" method="post">
       <div class="form-group" {{$errors->has("reply-{$posts->id}") ? 'has-error': ''}}>
       <textarea style="border-radius:5%;margin-left:130px;margin-top:10px;width:300px;height:35px;"name="reply-{{$posts->id}}" placeholder="Comment Here..." ></textarea>
       <input type="submit" value="Reply" class="btn btn-primary btn-sm";>
       @if($errors->has("reply-{$posts->id}"))
       <span class="help-block">{{$errors->first("reply-{$posts->id}")}}</span>
       @endif
       </div>
       
       @csrf
       </form>
               </article>@endif
                    
                    <!--<div class="interaction">
                    <a href="#" class="edit">Imposter</a> 
                    @if(Auth::user() == $posts->user)
                            |
                            <a href="#" class="edit">Edit</a> |
                            <a href="{{ route('post.delete', ['post_id' => $posts->id]) }}">Delete</a>
                        @endif
                    </div>-->
        
        
        @endforeach
        
    @endif



    <center>
<nav aria-label="close" style="align:center;margin-top:100px;">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</center>


</div>
</div>
</div>
@endsection
