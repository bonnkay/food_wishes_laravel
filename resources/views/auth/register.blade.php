@extends('auth.base')

@section('content')
    <div class="card-body">
        <p class="login-box-msg text-label">Registra un nuevo usuario</p>

        <form action="{{ route('register') }}" method="post">
            @csrf
            @error('name')
                <span class="text-xs text-red">{{ $message }}</span>
            @enderror
            <div class="input-group mb-3">
                <input name="name" type="text" class="form-control" placeholder="Nombre completo"
                    value="{{ old('name') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>

            @error('email')
                <span class="text-xs text-red">{{ $message }}</span>
            @enderror
            <div class="input-group mb-3">
                <input name="email" type="email" class="form-control" placeholder="Correo electrónico"
                    value="{{ old('email') }}">
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
                <input name="password" type="password" class="form-control" placeholder="Contraseña">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>

            @error('password_confirmation')
                <span class="text-xs text-red">{{ $message }}</span>
            @enderror
            <div class="input-group mb-3">
                <input name="password_confirmation" type="password" class="form-control" placeholder="Confirmar contraseña">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                        <label for="agreeTerms">
                            Acepto los <a href="#">términos</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i>
                Iniciar con Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i>
                Iniciar con Google+
            </a>
        </div>

        <a href="{{ route('login') }}" class="text-center">Ya tengo una cuenta</a>
    </div>
@endsection
