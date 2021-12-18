@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="float-left">
                    <h4 class="m-0 font-weight-bold text-primary">Usuários cadastrados</h4>
                </div>
                <div class="float-right">
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.cadastrar.usuario') }}"><i class="fas fa-plus-circle"></i> Cadastrar</a>
                </div>
            </div>
            <div class="card-body">
                @if(count($usuarios->all()))
                    <div class="table-responsive">
                        <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Criado em</th>
                                <th>Alterado em</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($usuarios->all() as $u)
                                <tr>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->email }}</td>
                                    <td>{{ date('d/m/Y', strtotime($u->created_at)) }}</td>
                                    <td>{{ date('d/m/Y', strtotime($u->updated_at)) }}</td>
                                    <td class="text-center">
                                        <a class="btn btn-primary text-white btn-sm" href="{{ route('admin.alterar.usuario', ['id' => encrypt($u->id)]) }}"><i class="fas fa-marker"></i> Alterar</a>
                                        <button class="btn btn-danger text-white btn-sm btnExcluir" @if(Auth::user()->email !== 'teste@teste.com') data-href="{{ route('admin.excluir.usuario', ['id' => encrypt($u->id)]) }}" @endif data-message-confirmation="Deseja realmente excluir esse usuário?"><i class="fas fa-trash"></i> Excluir</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="col">
                        <alert class="alert alert-primary">Nenhum usuário cadastrado, cadastre um clicando <a class="alert-link" href="{{ route('admin.cadastrar.usuario') }}">aqui.</a></alert>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
