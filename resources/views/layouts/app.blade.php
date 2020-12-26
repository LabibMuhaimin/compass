<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Compass</title>

    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link href="{{asset('public/frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('public/legend/all.min.css')}}">
  <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{asset('public/legend/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/legend/adminlte.min.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css'>
  <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}"> 
    

           <style> .nav-item > a {
                color:white;  font-size: 16px;  letter-spacing: .1rem; text-decoration: none;
            }
            .card-body{width:500px;height:570px;padding:40px;background:rgba(0,0,0,0.8);box-sizing:border-box;box-shadow: 0 15px 25px rgba(0,0,0,0.5);border-radius:10px;}
            .card-body > p {color:white;}
            .card-body  .input-group {position:relative;}
            .card-body  .input-group >input{width:100%;margin-bottom:30px;padding:10px 0;font-size:15px;border:none;outline:none;border-bottom:1px solid white;background:transparent;color:white;letter-spacing:1px}
            .card-body  .input-group >select{width:100%;margin-bottom:30px;padding:10px 0;font-size:15px;border:none;outline:none;border-bottom:1px solid white;background:transparent;color:white;letter-spacing:1px}
            .card-body  .input-group >label{position:absolute;top:0;left:0;padding:10px 0;font-size:15px;color:white;pointer-events:none;transition:.5s;}
            .card-body  .input-group >input:focus~label,.card-body  .input-group >input:valid~label{top:-20px;left:0;color:white;}
  
           </style>
          
  </head>
  <body>
  
  <div class="container" >

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #005580">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarResponsive">
     
        <ul class="navbar-nav ml-auto">
        <li><img width="350px" height="60px" style="margin-right:50px;"src="{{asset('public/frontend/img/complogo.png')}}"/></li>
        <li class="nav-item">

        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{url('/profile/{slug}')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

        </li>
        @if(Auth::check())
        
        <li class="nav-item">
        
          <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>
        @endif
          <li class="nav-item">
            <a class="nav-link" href="{{route('countries')}}">Locations</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">About</a>
          </li>
          <li>
          <form class="form-inline my-2 my-lg-0" action="{{route('search.results')}}"> 
      <input class="form-control mr-sm-2" type="search" placeholder="Search for People" aria-label="Search" name="query">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form></li>
        </ul>
      </div>
   
  </nav> 
 
  </div>
  


 
    

    <script href="{{asset('public/frontend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('public/legend/adminlte.min.js')}}"></script>
  <script src="{{asset('public/js/app.js')}}"></script>
  <script src="{{asset('resources/assets/js/bootstrap.js')}}"></script>
  <script src="{{asset('public/frontend/js/clean-blog.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.0.2/vue.cjs.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous"></script>
  <script>
        @if(Session::has('messege'))
        var type="{{Session::get('alert-type','info')}}"
            switch(type){
              case 'info':
                toastr.info("{{Session::get('messege')}}");
                break;
                case 'success':
                toastr.success("{{Session::get('messege')}}");
                break;
                case 'warning':
                toastr.warning("{{Session::get('messege')}}");
                break;
           }
          @endif
     </script>
    
  @yield('content')
  <div class="container">
  <footer style="background-color:#181d30;padding:10px;text-align:center;height:100px;margin-top:100px;">
		<div id="footer">
			<p style="color:yellow">&copy;All right reserved by Compass</p> 
		</div>
  </footer>
          </div>
  </body>
</html>