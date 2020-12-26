<div class="media">
<div class="media body">
<h4 class="media-heading" style="margin-top:20px;margin-left:70px;"><a  href="{{url('/profile')}}/{{$user->slug}}">{{$user->name}}</a></h4>
@if($user->profile->location)
    <h1>{{$user->profile->location}}</h1>
@endif
</div>
</div>