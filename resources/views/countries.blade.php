
@extends('layouts.app')
@section('content')
<style>
.card-body{width:auto;height:50px;background:rgba(0,0,0,0.2);border-radius:0px;}
.card-body>h4{color:black;}
.card-deck{margin-top:30px;}


</style>
<div class="container">
    <div class="card-deck">
   <div class="card" >
  <img class="card-img-top" src="public/frontend/img/countries/usa.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">USA</h4>
    <a href="{{url('/home/countries/usa')}}" class="stretched-link"></a>
  </div>
</div>
<div class="card" style="width:200px">
  <img class="card-img-top" src="public/frontend/img/countries/france.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">France</h4>
    <a href="{{url('/home/countries/france')}}" class="stretched-link"></a>
  </div>
</div>
<div class="card" style="width:200px">
  <img class="card-img-top" src="public/frontend/img/countries/england.jpg" alt="Card image">
  <div class="card-body" style="width:200px;">
    <h4 class="card-title" style="color:black;">England</h4>
    <a href="{{url('/home/countries/england')}}" class="stretched-link"></a>
  </div>
</div>
<div class="card" style="width:200px">
  <img class="card-img-top" src="public/frontend/img/countries/australia.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Australia</h4>
    <a href="{{url('/home/countries/australia')}}" class="stretched-link"></a>
  </div>
</div>

<div class="card" style="width:200px">
  <img class="card-img-top" src="public/frontend/img/countries/italy.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Italy</h4>
    <a href="{{url('/home/countries/italy')}}" class="stretched-link"></a>
  </div>
</div>
</div>


<div class="card-deck">
<div class="card" style="width:200px">
  <img class="card-img-top" src="public/frontend/img/countries/brazil.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Brazil</h4>
    <a href="{{url('/home/countries/brazil')}}" class="stretched-link"></a>
  </div>
</div>
<div class="card" style="width:200px">
  <img class="card-img-top" src="public/frontend/img/countries/maldives.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Maldives</h4>
    <a href="{{url('/home/countries/maldives')}}" class="stretched-link"></a>
  </div>
</div>
<div class="card" style="width:200px">
  <img class="card-img-top" src="public/frontend/img/countries/uae.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">UAE</h4>
    <a href="{{url('/home/countries/uae')}}" class="stretched-link"></a>
  </div>
</div>
<div class="card" style="width:200px">
  <img class="card-img-top" src="public/frontend/img/countries/singapore.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Singapore</h4>
    <a href="{{url('/home/countries/singapore')}}" class="stretched-link"></a>
  </div>
</div>
<div class="card" style="width:200px">
  <img class="card-img-top" src="public/frontend/img/countries/egypt.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Egypt</h4>
    <a href="{{url('/home/countries/egypt')}}" class="stretched-link"></a>
  </div>
</div>
</div>
<div class="card-deck">
<div class="card" style="width:200px">
  <img class="card-img-top" src="public/frontend/img/countries/spain.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Spain</h4>
    <a href="{{url('/home/countries/spain')}}" class="stretched-link"></a>
  </div>
</div>
<div class="card" style="width:200px">
  <img class="card-img-top" src="public/frontend/img/countries/Bangladesh.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title" >Bangladesh</h4>
    <a href="{{url('/home/countries/bangladesh')}}" class="stretched-link"></a>
  </div>
</div>
<div class="card" style="width:200px">
  <img class="card-img-top" src="public/frontend/img/countries/india.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">India</h4>
    <a href="{{url('/home/countries/india')}}" class="stretched-link"></a>
  </div>
</div>
<div class="card" style="width:200px">
  <img class="card-img-top" src="public/frontend/img/countries/nepal.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Nepal</h4>
    <a href="{{url('/home/countries/nepal')}}" class="stretched-link"></a>
  </div>
</div>
<div class="card" style="width:200px">
  <img class="card-img-top" src="public/frontend/img/countries/switzerland.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Switzerland</h4>
    <a href="{{url('/home/countries/switzerland')}}" class="stretched-link"></a>
  </div>
</div>
</div>

</div>
 
  @endsection 
