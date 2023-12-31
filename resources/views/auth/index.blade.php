<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin &mdash; Sign in</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('login/dist/vendor/bootstrap-4.5.3/css/bootstrap.min.css') }}">
    <!-- Material design icons -->
    <link rel="stylesheet" href="{{ asset('login/dist/icons/material-design-icons/css/mdi.min.css') }}">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <!-- Latform styles -->
    <link rel="stylesheet" href="{{ asset('login/dist/css/latform-style-1.min.css') }}">
</head>
<body>
<div class="form-wrapper">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="logo">
                    <img src="{{ asset('login/dist/images/logo-colorful.png') }}" alt="logo">
                </div>
                <div class="my-5 text-center">
                    @if (Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <h3 class="font-weight-bold mb-3">Sign In</h3>
                    <p class="text-muted">Sign in to continue</p>
                </div>
                <form>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="form-icon-wrapper">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" autofocus
                                   required>
                            <i class="form-icon-left mdi mdi-email"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="form-icon-wrapper">
                            <input type="password" class="form-control" id="password" placeholder="Enter password"
                                   required>
                            <i class="form-icon-left mdi mdi-lock"></i>
                            <a href="#" class="form-icon-right password-show-hide" title="Hide or show password">
                                <i class="mdi mdi-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="d-md-flex justify-content-between">
                            <div class="custom-control custom-checkbox mb-2 mb-md-0">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                            </div>
                            <a href="#">I forgot my password!</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <p class="text-center">
                        Don't have an account?
                        <a href="#">Create a free account</a>.
                    </p>
                    <div class="text-divider">or</div>
                    <div class="social-links justify-content-center">
                        <a href='{{ url('auth/redirect') }}' class="bg-google">
                            <i class="mdi mdi-google"></i>
                        </a>
                        <a href="#" class="bg-facebook">
                            <i class="mdi mdi-facebook"></i>
                        </a>
                        <a href="#" class="bg-twitter">
                            <i class="mdi mdi-twitter"></i>
                        </a>
                        <a href="#" class="bg-github">
                            <i class="mdi mdi-github"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Jquery -->
<script src="{{ asset('login/dist/vendor/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('login/dist/vendor/bootstrap-4.5.3/js/bootstrap.min.js') }}"></script>
<!-- Latform scripts -->
<script src="{{ asset('login/dist/js/latform.min.js') }}"></script>
</body>
</html>
