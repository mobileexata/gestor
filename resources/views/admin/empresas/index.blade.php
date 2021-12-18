@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="float-left">
                    <h4 class="m-0 font-weight-bold text-primary">Empresas cadastradas</h4>
                </div>
                <div class="float-right">
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.cadastrar.empresa') }}"><i class="fas fa-plus-circle"></i> Cadastrar</a>
                </div>
            </div>
            <div class="card-body">
                @if(count($empresas->all()))
                    <div class="table-responsive">
                        <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Razão Social</th>
                                <th>CNPJ</th>
                                <th>Nome fantasia</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($empresas->all() as $e)
                                <tr>
                                    <td>{{ $e->razao }}</td>
                                    <td>{{ $e->cnpj }}</td>
                                    <td>{{ $e->fantasia }}</td>
                                    <td class="text-center">
                                        <a class="btn btn-primary text-white btn-sm" href="{{ route('admin.alterar.empresa', ['slug' => $e->slug]) }}"><i class="fas fa-marker"></i> Alterar</a>
                                        <button class="btn btn-danger text-white btn-sm btnExcluir" @if(Auth::user()->email !== 'teste@teste.com') data-href="{{ route('admin.excluir.empresa', ['slug' => $e->slug]) }}" @endif data-message-confirmation="Deseja realmente excluir essa empresa?"><i class="fas fa-trash"></i> Excluir</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="col">
                        <alert class="alert alert-primary">Nenhuma empresa cadastrada, cadastre uma clicando <a class="alert-link" href="{{ route('admin.cadastrar.empresa') }}">aqui.</a></alert>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
