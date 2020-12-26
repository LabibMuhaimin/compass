
@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="login-box">
<div class="login-logo">
    <h4 style="margin-top:50px;text-align:center;"><b>Sign In</b></h4>
  </div>
  
  
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p><br><br>

      <form action="{{ route('login') }}" method="post">
      @csrf
      
      <!--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>-->
        <div class="input-group mb-3">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <label><span class="fas fa-envelope"></span>  E-Mail Address</label>
          
          @error('email')
            <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
            @enderror
          
            </div>
            <br>
        <div class="input-group mb-3">
        <input id="password" type="password"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        <label><span class="fas fa-lock"></span>  Password</label>
        @error('password')
         <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
         </span>
           @enderror
           
        </div>
        
          <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="color:grey;">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

          
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
      </form>

      
      <p class="mb-0">
        <a class="btn btn-link" href="{{ route('register') }}" class="text-center">Register a new membership</a>
      </p>
    </div>
    
</div>
</div>
</div>
@endsection
