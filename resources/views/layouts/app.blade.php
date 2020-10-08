<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{url("public/assets/js/jquery-2.1.4.min.js")}}"></script>
    <link rel="stylesheet" href="{{url("public/assets/css/bootstrap.min.css")}}" />
    <link rel="stylesheet" href="{{url("public/assets/font-awesome/4.5.0/css/font-awesome.min.css")}}" />
    <link rel="stylesheet" href="{{url("public/assets/css/fonts.googleapis.com.css")}}" />
    <link rel="stylesheet" href="{{url("public/computercount/css/center.css")}}"/>
    <link rel="stylesheet" href="{{ asset('public/z-alert/css/alertify.core.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/z-alert/css/alertify.default.css') }}" />
</head>
<body class="main">
  <div  id="app">
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
          <div class="container">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->

                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                          @if (Route::has('register'))
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav>
  </div>
    <div class="container centerLogin " >
      <div class="col-lg-12" >
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <div class="modal-content">
                <div class="modal-header header2">
                  <div class="avatar">
                  </div>
                  <h4 class="modal-title">Нэвтрэх хэсэг</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="{{ route('login') }}">
                      @csrf
                    <div class="form-group">
                      <label>Хэрэглэгчийн нэр</label>
                      <input id="email" type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Username">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label>Нууц үг</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
                      @if (Route::has('password.request'))

                      @endif
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <a href="#">Forgot Password?</a>
                </div>
              </div>
        </div>
        <div class="col-md-4">
        </div>
      </div>
  </div>
</body>

</html>
