<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function index()
    {
        $this->middleware('auth');
        return view('admin.index');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $validacoes = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($id)]
        ];

        $mensagens = [
            '*.required' => 'Este campo é obrigatório',
            '*.string' => 'O valor informado para o campo não é valido',
            '*.max' => 'Informe no máximo 255 caracteres',
            'email.email' => 'Informe um e-mail válido',
            'email.unique' => 'Este e-mail já se encontra utilizado'
        ];

        if ($data['password'])
        {
            $validacoes['password'] = ['required', 'string', 'min:6', 'confirmed'];
            $mensagens['password.min'] = 'A senha deve conter no mínimo 6 dígitos';
            $mensagens['password.confirmed'] = 'As senhas digitadas não conferem';
        }

        $validator = Validator::make($data, $validacoes, $mensagens);
        $validator->validated();

        $user = User::findOrFail($id);
        $data['password'] =($data['password']) ? bcrypt(($data['password'])) : $user->password;
        $user->update($data);

        flash('Dados atualizados com sucesso')->important();
        return redirect()->route('admin');
    }

    public function usersAdmin()
    {
        $usuarios = User::where('user_id', Auth()->user()->id)->get();
        return view('admin.usuarios.index', compact('usuarios'));
    }

    public function cadastrarUsuario()
    {
        $empresas = Auth()->user()->empresas()->get();
        return view('admin.usuarios.cadastrar-usuario', compact('empresas'));
    }

    public function alterarUsuario($idCriptografado)
    {
        $id = decrypt($idCriptografado);
        $user = User::where(['id' => $id])->get()->first();

        return view('admin.usuarios.alterar-usuario', compact('user'));
    }

    public function inserirUsuario(UserRequest $request)
    {
        $data = $request->all();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_id' => Auth()->user()->id
        ])->id;

        $this->insereEmpresasUser($data['empresas'], $user);

        flash('Usuário cadastrado com sucesso')->important();

        return redirect()->route('admin.usuario');
    }

    public function updateUsuario(Request $request, $idCriptografado)
    {
        $data = $request->all();
        $data['empresas'] = isset($data['empresas']) ? $data['empresas'] : null;
        $id = decrypt($idCriptografado);

        $validacoes = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($id)],
            'empresas' => ['required']
        ];

        if ($data['password'])
        {
            $validacoes['password'] = ['required', 'string', 'min:6', 'confirmed'];
        }

        $userRequest= new UserRequest();

        $validator = Validator::make($data, $validacoes, $userRequest->messages());
        $validator->validated();

        $user = User::findOrFail($id);

        $data['password'] = ($data['password']) ? bcrypt(($data['password'])) : $user->password;

        $user->update($data);

        DB::table('user_empresas')->where(['user_id' => $user->id])->delete();

        $this->insereEmpresasUser($data['empresas'], $user->id);

        flash('Usuário alterado com sucesso')->important();
        return redirect()->route('admin.usuario');
    }

    public function excluirUsuario($idCriptografado)
    {
        $id = decrypt($idCriptografado);

        DB::table('users')->delete($id);

        flash('Usuário excluído com sucesso')->important();

        return redirect()->route('admin.usuario');
    }

    private function insereEmpresasUser($empresas, $userId)
    {
        $empresas = array_map('decrypt', $empresas);
        foreach ($empresas as $e)
        {
            DB::table('user_empresas')->insert([
                'user_id' => $userId,
                'empresa_id' => $e
            ]);
        }
    }
}
