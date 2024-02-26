
<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Generated: 2018-04-06 16:27:42 +0200 -->
    <title>Homepage - tabler.github.io - a responsive, flat and full featured admin template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="./assets/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
    <!-- Dashboard Core -->
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet" />
    <script src="{{ asset("/assets/js/dashboard.js") }}"></script>
    <!-- c3.js Charts Plugin -->
    <link href="{{ asset('assets/plugins/charts-c3/plugin.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/plugins/charts-c3/plugin.js') }}"></script>
    <!-- Google Maps Plugin -->
    <link href="{{ asset('assets/plugins/maps-google/plugin.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/plugins/maps-google/plugin.js') }}"></script>
    <!-- Input Mask Plugin -->
    <script src="{{ asset("assets/plugins/input-mask/plugin.js") }}"></script>
  </head>
  <body class="">
    <div class="page">
    <div class="page-single">
      <div class="container">
        <div class="row">
          <div class="col col-login mx-auto">
            <div class="text-center mb-6">
              <img src="{{ asset('assets/images/icone.png') }}" class="h-9" alt="" height="900px">
            </div>
            <form class="card" method="POST" action="{{ route('register') }}">
                @csrf
              <div class="card-body p-6">
                <div class="card-title">Create new account</div>
                <div class="form-group">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{ old('name') }}">
                  @error('name')
                      <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="form-label">Email address</label>
                  <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ old('email') }}">
                  @error('email')
                      <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="new_password">
                  @error('password')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Password confirmation</label>
                    <input type="password" class="form-control" placeholder="Password" name="password_confirmation">
                </div>
                <div class="form-group">
                  <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="agree"/>
                    <span class="custom-control-label">Agree the<a href="{{ route('terms') }}" class="text-green"> terms and policy</a></span>
                  </label>
                  @error('agree')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-footer">
                  <button type="submit" class="btn btn-success btn-block">Create new account</button>
                </div>
              </div>
            </form>
            <div class="text-center text-muted">
               Already have account?  <a href="{{ route("login") }}" class="text-green">Sign in</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>