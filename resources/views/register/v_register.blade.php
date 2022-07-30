
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Pendataan | Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('template/')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="{{asset('template/')}}/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('template/')}}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image">
                        <img src="{{asset('template/')}}/dist/img/pemprovkaltim.jpg"  width="500" height="700" class="img-circle" alt="User Image">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Silahkan Register</h1>
                                <h5 class="h4 text-gray-900 mb-4">Akun Sistem Pendataan</h5>
                                <h1 class="h4 text-gray-900 mb-4">Biro Pemerintahan dan Otonomi Daerah</h1>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group has-feedback">
                                    <input name="name" class="form-control" placeholder="name">
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                              <div class="form-group has-feedback">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>

                              <div class="form-group has-feedback">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>

                              <div class="form-group has-feedback">
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmasi Password">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                              </div>

                                <div class="row mb-3">
                                    <div class="offset-md-4 col-md-6">
                                        {!! captcha_img('flat'); !!}
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="captcha" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Captcha') }}</label>

                                    <div class="col-md-6">
                                        <input id="captcha" type="text" class="form-control" name="captcha" required>
                                    </div>
                                </div>

                              <div class="row">
                                <div class="col-xs-8">
                                  <div class="checkbox icheck">
                                    <label>
                                    
                                    </label>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-xs-4">
                                  <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                                </div>
                                <!-- /.col -->
                              </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">Login Now</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('template/')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('template/')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('template/')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template/')}}/js/sb-admin-2.min.js"></script>

</body>

</html>