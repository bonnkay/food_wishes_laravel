@extends('auth.base')

@section('content')
    <!-- /.card-body -->
    <div class="card-body">
        <p class="login-box-msg text-label">Iniciar sesion</p>

        <form action="{{ route('login') }}" method="post">
            @csrf
            @error('email')
                <span class="text-xs text-red">{{ $message }}</span>
            @enderror
            <div class="input-group mb-3">
                <input name="email" type="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            @error('password')
                <span class="text-xs text-red">{{ $message }}</span>
            @enderror
            <div class="input-group mb-3">
                <input name="password" type="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                            Recuérdame
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Iniciar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center mt-2 mb-3">
            <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i> Iniciar sesión usando Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i> Iniciar sesión usando Google+
            </a>
        </div>
        <!-- /.social-auth-links -->

        <p class="mb-1">
            <a href="forgot-password.html">Olvidé mi contraseña</a>
        </p>
        <p class="mb-0">
            <a href="{{ route('register') }}" class="text-center">Registrar un nuevo usuario</a>
        </p>
    </div>
@endsection
