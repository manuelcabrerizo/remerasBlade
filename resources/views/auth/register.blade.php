
@extends('layouts.app')
@extends('header')
@section('content')
<head>
      <link rel="stylesheet" href="{{asset('css/login2.css')}}">
</head>

<div class="contenedor" >
  <div class="info">
    <h2>Registrate</h2>
    <p class="coment">no tienes cuenta?</p>
    <p class="coment2">ingresa tus datos:</p>
  </div>
<div class="cuerpo">
<div class="logo">
  <img src="{{asset('img/portada.JPG')}}" alt="logo">
</div>
                  <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                      @csrf

                      <div class="form-group row">
                          <label for="name" class="col-md-12 col-form-label text-md-center">{{ __('Name') }}</label>

                          <div class="col-md-12">
                              <input id="nombre" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="email" class="col-md-12 col-form-label text-md-center">{{ __('E-Mail Address') }}</label>

                          <div class="col-md-12">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="password" class="col-md-12 col-form-label text-md-center">{{ __('Password') }}</label>

                          <div class="col-md-12">
                              <input id="passwordConfirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="password-confirm" class="col-md-12 col-form-label text-md-center">{{ __('Confirm Password') }}</label>

                          <div class="col-md-12">
                              <input id="passwordConfirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          </div>
                      </div>



                      <div class="form-group row">
                          <label for="foto" class="col-md-12 col-form-label text-md-center">{{ __('Su foto de perfi') }}</label>

                          <div class="col-md-12">
                              <input id="foto" type="file" name="foto" value="">

                              @error('foto')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Register') }}
                              </button>
                          </div>
                      </div>




                  </form>
                </div>
              </div>
@endsection
@extends('footer')
