<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/tampilan/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/tampilan/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/tampilan/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
    <div class="register-box">


        <div class="card">
            <div class="register-logo">
                <a href="/tampilan/index2.html"><b>Register</b></a>
            </div>
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new Perusahaan</p>

                <form method="POST" action="{{ route('register-perusahaan') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                            placeholder="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email"
                            placeholder="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password" placeholder="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password" placeholder="confirm-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3" hidden>
                        <input id="role" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="role" value="Perusahaan" required autocomplete="role" autofocus placeholder="role">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="gendre" type="text" class="form-control @error('gendre') is-invalid @enderror"
                            name="gendre" value="{{ old('gendre') }}" required autocomplete="gendre" autofocus
                            placeholder="gendre">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="no_tlp" type="text" class="form-control @error('no_tlp') is-invalid @enderror"
                            name="no_tlp" value="{{ old('no_tlp') }}" required autocomplete="no_tlp" autofocus
                            placeholder="no_tlp">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="tgl_lahir" type="date"
                            class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir"
                            value="{{ old('tgl_lahir') }}" required autocomplete="tgl_lahir" autofocus
                            placeholder="Tanggal Lahir">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-calendar"></span>
                            </div>
                        </div>
                        @error('tgl_lahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <a href="/" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="/tampilan/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/tampilan/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/tampilan/dist/js/adminlte.min.js"></script>
</body>

</html>
