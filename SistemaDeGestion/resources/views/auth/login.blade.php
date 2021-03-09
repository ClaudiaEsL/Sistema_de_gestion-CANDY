@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/login.css">
    <div class="login">
        <div class="formulario">
            <div class="division">
                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="titulo">
                        <h6>Candy Products - Inventario</h6>
                    </div>
                    <div class="mb-5">
                        <label for="email" class=" col-form-label text-md-right">{{ __('Usuario:') }}</label>

                        <div class="">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Ingrese su usuario" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="password" class=" col-form-label text-md-right">{{ __('Contraseña:') }}</label>

                        <div class="">
                            <input id="password" type="password" placeholder="Ingrese su contraseña" class="form-control @error('password') is-invalid @enderror" value="" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">
                            Ingresar
                    </button>
                </form>
                <div class="mensaje">
                    <img src="/img/Logotipo.gif" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
