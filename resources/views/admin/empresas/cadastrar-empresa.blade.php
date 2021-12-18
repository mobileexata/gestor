@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Cadastrar empresa</h1>
        <div class="card o-hidden border-0 shadow-lg">
            <div class="card-body p-0">
                <div class="p-4">
                    <form class="user" method="post" action="{{ route('admin.inserir.empresa') }}" id="formCadEmpresa">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <div class="col-md-6 col-xl-6 col-sm-12">
                                <input type="text" class="form-control form-control-user @error('razao') is-invalid @enderror" name="razao" placeholder="Razão Social" value="{{ old('razao') }}">
                                @error('razao')
                                    <div class="invalid-feedback">
                                        {{$errors->first('razao')}}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 col-xl-6 col-sm-12">
                                <div class="d-md-none d-lg-none d-xl-none d-sm-inline pt-3"></div>
                                <input type="text" class="form-control form-control-user @error('fantasia') is-invalid @enderror" name="fantasia" placeholder="Nome Fantasia" value="{{ old('fantasia') }}">
                                @error('fantasia')
                                <div class="invalid-feedback">
                                    {{$errors->first('fantasia')}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 col-xl-6 col-sm-12">
                                <input type="text" class="form-control form-control-user cnpj @error('cnpj') is-invalid @enderror" name="cnpj" placeholder="CNPJ" value="{{ old('cnpj') }}">
                                @error('cnpj')
                                <div class="invalid-feedback">
                                    {{$errors->first('cnpj')}}
                                </div>
                                @enderror
                            </div>
                            <div class="d-none d-md-inline d-lg-inline col-3 d-xl-inline">
                                <input @if(Auth::user()->email !== 'teste@teste.com') type="submit" @else type="reset" @endif class="btn btn-primary btn-user btn-block" value="Cadastrar">
                            </div>
                        </div>
                        <div class="d-md-none d-lg-none d-xl-none d-sm-inline">
                            <input @if(Auth::user()->email !== 'teste@teste.com') type="submit" @else type="reset" @endif class="btn btn-primary btn-user btn-block" value="Cadastrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
