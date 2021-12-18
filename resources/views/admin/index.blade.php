@extends('layouts.app')

@section('content')
    <?php
    $token = encrypt(Auth::user()->email);
    ?>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Atualizar dados de usuário</h1>
        <div class="card o-hidden border-0 shadow-lg">
            <div class="card-body p-0">
                <div class="p-4">
                    <form class="user" method="post" action="{{ route('admin.update.user', ['id' => Auth::user()->id]) }}">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <div class="col-md-4 col-xl-4 col-sm-12">
                                <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" placeholder="Nome" value="{{ Auth::user()->name }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{$errors->first('name')}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4 col-xl-4 col-sm-12">
                                <div class="d-md-none d-lg-none d-xl-none d-sm-inline pt-3"></div>
                                <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" placeholder="E-mail" value="{{ Auth::user()->email }}" autocomplete="email">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$errors->first('email')}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 col-xl-4 col-sm-12">
                                <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" placeholder="Senha" autocomplete="off">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{$errors->first('password')}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4 col-xl-4 col-sm-12">
                                <div class="d-md-none d-lg-none d-xl-none d-sm-inline pt-3"></div>
                                <input type="password" class="form-control form-control-user" name="password_confirmation" placeholder="Confirme a senha">
                            </div>
                            <div class="d-none d-md-inline d-lg-inline col-3 d-xl-inline">
                                <input  @if(Auth::user()->email !== 'teste@teste.com') type="submit" @else type="reset" @endif class="btn btn-primary btn-user btn-block" value="Alterar">
                            </div>
                        </div>
                        <div class="d-md-none d-lg-none d-xl-none d-sm-inline">
                            <input  @if(Auth::user()->email !== 'teste@teste.com') type="submit" @else type="reset" @endif class="btn btn-primary btn-user btn-block" value="Alterar">
                        </div>
                    </form>
                    @if(is_null(Auth()->user()->user_id))
                        <div class="p-4">
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">Atenção, seu token de exportação é:</h4>
                                <p>{{ $token }}</p>
                                <hr>
                                <button type="button" class="btn btn-danger btnCopiar" data-copiar="{{ $token }}">
                                    Copiar
                                </button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
