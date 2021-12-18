@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Cadastrar usuário <i class="fa fa-user"></i></h1>
        <div class="card o-hidden border-0 shadow-lg">
            <div class="card-body p-0">
                <div class="p-4">
                    <form class="user" method="post" action="{{ route('admin.inserir.usuario') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6 col-xl-6 col-sm-12">
                                <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" placeholder="Nome" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{$errors->first('name')}}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 col-xl-6 col-sm-12">
                                <div class="d-md-none d-lg-none d-xl-none d-sm-inline pt-3"></div>
                                <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" placeholder="E-mail" value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$errors->first('email')}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 col-xl-6 col-sm-12">
                                <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" placeholder="Senha" value="{{ old('password') }}">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{$errors->first('password')}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6 col-xl-6 col-sm-12">
                                <div class="d-md-none d-lg-none d-xl-none d-sm-inline pt-3"></div>
                                <input type="password" class="form-control form-control-user" name="password_confirmation" placeholder="Repita a senha" value="{{ old('password_confirmation') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 col-xl-6 col-sm-12">
                                <select multiple name="empresas[]" class="form-control @error('empresas') is-invalid @enderror">
                                    <?php
                                        $oldEmpresas = (old('empresas')) ? array_map('decrypt', old('empresas')) : [];
                                    ?>
                                    @foreach($empresas as $e)
                                        <option value="{{ encrypt($e->id) }}" {{ (in_array($e->id, $oldEmpresas)) ? "selected" : "" }}> {{ $e->cnpj }} - {{ mb_strtoupper($e->fantasia) }}</option>
                                    @endforeach
                                </select>
                                @error('empresas')
                                <div class="invalid-feedback">
                                    {{$errors->first('empresas')}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-3 col-xl-3 col-sm-12">
                                <input @if(Auth::user()->email !== 'teste@teste.com') type="submit" @else type="reset" @endif class="btn btn-primary btn-user btn-block" value="Cadastrar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
