@extends('layouts.app')
@section('content')
<div class="container">
<h3 style="text-align:center;margin-top:10px;">Your search result for "{{Request::input('query')}}"</h4>
@if(!$users->count())
    <h2 style="margin-top:20px;margin-left:70px;"> No Results Found</h2>
@else
<div class="row">
<div class="col-lg-12">
@foreach($users as $user)
    @include('user/partials/userblock')
@endforeach
</div>
</div>
</div>
@endif
@endsection