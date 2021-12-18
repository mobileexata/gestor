<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Http\Requests\EmpresaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class EmpresaController extends Controller
{
    public function index()
    {
        $empresas = Auth::user()->empresas()->get();

        return view('admin.empresas.index', compact('empresas'));
    }

    public function cadastrar()
    {
        return view('admin.empresas.cadastrar-empresa');
    }

    public function inserir(EmpresaRequest $request)
    {
        $data = $request->all();

        $validator = $request->validated();

        $user = Auth::user();
        $user->empresas()->create($data);

        flash('Empresa cadastrada com sucesso')->important();

        return redirect()->route('admin.empresas');
    }

    public function alterar($slug)
    {
        $empresa = Auth::user()->empresas()->whereSlug($slug)->get()->first();
        return view('admin.empresas.alterar-empresas', compact('empresa'));
    }

    public function update(Request $request, $slug)
    {
        $data = $request->all();

        $empresa = Auth::user()->empresas()->whereSlug($slug)->get()->first();

        $empresaRequest = new EmpresaRequest();

        $validator = Validator::make($data, [
            'cnpj' => ['required', 'min:18', Rule::unique('empresas')->ignore($empresa->id)],
            'razao' => 'required|max:255',
            'fantasia' => 'required|max:255'
        ], $empresaRequest->messages());

        $validator->validated();
        $empresa->update($data);

        flash('Empresa alterada com sucesso')->important();
        return redirect()->route('admin.empresas');
    }

    public function excluir($slug)
    {
        $empresa = Empresa::whereSlug($slug);
        $empresa->delete();

        flash('Empresa excluida com sucesso')->important();
        return redirect()->route('admin.empresas');
    }

}
