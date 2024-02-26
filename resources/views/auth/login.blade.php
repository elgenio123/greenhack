
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
              <img src="./assets/brand/tabler.svg" class="h-6" alt="">
            </div>
            <form class="card" method="POST" action="{{ route("login") }}">
                @csrf
              <div class="card-body p-6">
                <div class="card-title">Login to your account</div>
                <p>@if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="text-danger">{{ $error }}</div>
                    @endforeach
                    @endif
                </p>
                <div class="form-group">
                  <label class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Votre adresse email ici" required>
                </div>
                <div class="form-group">
                  <label class="form-label">
                    Password
                    <a href="{{ route("password.request") }}" class="float-right small text-green">Password</a>
                  </label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="remember_token"/>
                    <span class="custom-control-label">Remember me</span>
                  </label>
                </div>
                <div class="form-footer">
                  <button type="submit" class="btn btn-success btn-block">Login</button>
                </div>
              </div>
            </form>
            <div class="text-center text-muted">
             Don't have account yet ?<a href="{{ route("register") }}" class="text-green"> Sign up</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </body>
</html>