@extends('layouts.app')
@section('content')
<div class="container">
  <article style="margin-top:50px;margin-left:50px;height:200px;"><center>
<h5 style="color:green;">Green colored places are nature friendly and evergreen places.</h5 >
<h5  style="color:red;">Red colored places can be risky.They are only for adventourous people.</h5 >
<h5  style="color:blue;">Blue colored places are Amusement parks.</h5 >
<h5  style="color:grey;">Dark colored places are closed at this moment.</h5 >
</center>
</article>
<hr>
<div class="list-group">
  <h4 class="list-group-item list-group-item-action"><center>Select any of the place from <b>Bangladesh</b></center></h4>
  
  <a href="{{url('/home/countries/bangladesh/coxsbazar')}}" class="list-group-item list-group-item-action list-group-item-success">Cox's Bazar</a>
  <a href="{{url('/home/countries/bangladesh/sunderban')}}" class="list-group-item list-group-item-action list-group-item-success">Sundarban</a>
  <a href="{{url('/home/countries/bangladesh/madhabkunda')}}" class="list-group-item list-group-item-action list-group-item-success">Madhabkunda</a>
  <a href="{{url('/home/countries/bangladesh/jaflong')}}" class="list-group-item list-group-item-action list-group-item-success">jaflong</a>
  <a href="{{url('/home/countries/bangladesh/bisnakandi')}}" class="list-group-item list-group-item-action list-group-item-success">Bisnakandi</a>
  <a href="{{url('/home/countries/bangladesh/hakaluki')}}" class="list-group-item list-group-item-action list-group-item-success">Hakaluki</a>
  <a href="{{url('/home/countries/bangladesh/shajek')}}" class="list-group-item list-group-item-action list-group-item-success">Shajek</a>
  
  
  

</div>

</div>
 
  @endsection 
