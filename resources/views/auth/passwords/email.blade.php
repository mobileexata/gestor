@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
{{--                        <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>--}}
                        <div class="col-lg-12">
                            <div class="p-5">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <div class="text-center">
                                    <img src="{{ asset('img/gestor.png') }}" height="60px">
                                    <h1 class="h4 text-gray-900 mb-2">{{ __('Esqueceu sua senha?') }}</h1>
                                    <p class="mb-4">{{ __('Não se preocupe. Basta digitar seu endereço de e-mail abaixo e enviaremos um link para redefinir sua senha!') }}</p>
                                </div>
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="Digite seu endereço de e-mail..."  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" href="login.html" class="btn btn-primary btn-user btn-block">
                                        {{ __('Enviar link de redefinição de senha') }}
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">{{ __('Já possui uma conta? Faça login!') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
