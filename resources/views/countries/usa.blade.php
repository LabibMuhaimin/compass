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
  <h4 class="list-group-item list-group-item-action"><center>Select any of the place from <b>United States</b></center></h4>
  
  <a href="{{url('/home/countries/usa/g_canyon')}}" class="list-group-item list-group-item-action list-group-item-success">Ground Canyon</a>
  <a href="{{url('/home/countries/usa/manhattan')}}" class="list-group-item list-group-item-action list-group-item-warning">Manhattan</a>
  <a href="{{url('/home/countries/usa/yellowstone')}}" class="list-group-item list-group-item-action list-group-item-success">Yellowstone</a>
  <a href="{{url('/home/countries/usa/gg_bridge')}}" class="list-group-item list-group-item-action list-group-item-warning">Golden Gate Bridge, San Francisco</a>
  <a href="{{url('/home/countries/usa/niagra')}}" class="list-group-item list-group-item-action list-group-item-warning">Niagra Falls</a>
  <a href="{{url('/home/countries/usa/florida_keys')}}" class="list-group-item list-group-item-action list-group-item-success">Florida Keys</a>
  <a href="{{url('/home/countries/usa/las_vegas')}}" class="list-group-item list-group-item-action list-group-item-dark">Las Vegas</a>
  <a href="{{url('/home/countries/usa/denali')}}" class="list-group-item list-group-item-action list-group-item-success">Denali National Park</a>
  <a href="{{url('/home/countries/usa/disney')}}" class="list-group-item list-group-item-action list-group-item-info">Disney World Orlando</a>
  
</div>
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
 
  @endsection 
