@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default">
                <h4 class="panel-header" style="text-align:center;margin-top:20px;">Edit Your Profile</h4>

                <div class="panel-body">
                
                    <form action="{{url('update',['slug'=>Auth::user()->slug])}}" method="POST" enctype="multipart/form-data">
                       {{ csrf_field() }}
                       <div class="form-group">
                              <label for="avatar">Upload avatar</label>
                              <input type="file" name="avatar" class="form-control" accept="image/*">
                        </div>
                        <div class="form-group">
                        <label for="location" >From:</label>
                        <input type="text" name="location" value="{{ info('location')}}" class="form-control" required>
                    </div>

                    <div class="form-group">
                    <label for="about" >About Yourself:</label>
                        <textarea name="about" id="about" cols="30" rows="10"  class="form-control" required>{{$info->about}}</textarea>
                    </div>
                    <div class="form-group">
                    <p class="text-center">
                    <button class="btn btn-primary" type="submit">Save</button>
                    </p>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
