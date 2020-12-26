<div class="col-md-3 left-sidebar" >




<div class="list-group">
<a class="list-group-item list-group-item-action list-group-item-info"><center>  
<img src="{{url('/')}}/storage/app/{{Auth::user()->avatar}}" width="150px" height="150px" style="border-radius:50%;margin-top:10px;"/>
<hr><b>{{ Auth::user()->name }}</b><br><p class="text-center"><span class="fas fa-globe"></span> {{ Auth::user()->profile->location }}</p>
 </center></a>
  

  <a href="{{url('edit',['slug'=>Auth::user()->slug])}}" class="list-group-item list-group-item-action list-group-item-info"><span class="fas fa-bars"></span> Update Profile</a>
  <a href="{{url('findFriends',['slug'=>Auth::user()->slug])}}" class="list-group-item list-group-item-action list-group-item-info"><span class="fas fa-search"></span> Find Friends</a>
  <a href="{{url('requests',['slug'=>Auth::user()->slug])}}" class="list-group-item list-group-item-action list-group-item-info"><span class="fas fa-handshake"></span> My Requests<span style="color:green; font-weight:bold;
                                       font-size:16px">({{App\Friendship::where('status', 0)
                                                  ->where('user_requested', Auth::user()->id)
                                                  ->count()}})</span></a>
  
  <a href="{{url('friends',['slug'=>Auth::user()->slug])}}" class="list-group-item list-group-item-action list-group-item-info" ><span class="fas fa-users"></span>   Friends</a>
  <a href="{{url('profile',['slug'=>Auth::user()->slug])}}" class="list-group-item list-group-item-action list-group-item-info"><span class="fas fa-user"></span>  My Profile</a>
  <a class="list-group-item list-group-item-action list-group-item-info" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="fas fa-sign-out-alt"></span> Log Out</a>
  
</div>




</div>