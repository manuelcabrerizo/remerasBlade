@extends('layouts.app')
@extends('header')
@section('content')


  <head>
    <link rel="stylesheet" href="{{asset('css/login2.css')}}">
    <link rel="stylesheet" href="{{asset('css/login3.css')}}">
  </head>
<div class="contenedor">
  <div class="info">
    <h2>Inicia secion</h2>
    <p class="coment">si tienes una cuenta registrada,</p>
    <p class="coment2">ingresa tus datos:</p>
  </div>
  <div class="cuerpo">
    <div class="logo">
      <img src="{{asset('img/portada.JPG')}}" alt="logo">
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
            <p class="email">
            <label for="email">
              <b>*</b>Direccion de email
            </label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </p>
            <p class="password">
              <label for="password">
                <b>*</b>Contrasena
              </label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
           </p>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>


                <input type="submit" class="boton" value="login" name="login">
                    {{ __('Login') }}
                </input>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

    </form>

  </div>

@endsection
@extends('footer')
