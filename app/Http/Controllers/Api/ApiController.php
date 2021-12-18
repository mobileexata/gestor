<?php

namespace App\Http\Controllers\Api;

use App\Empresa;
use App\Movimento;
use App\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function movimento(Request $request, $token)
    {
        try
        {
            $email = decrypt($token);

            $user = User::where(['email' => $email])->get();
            if(!$user)
                return response()->json(['sucesso' => false, 'mensagem' => 'Token não encontrado']);

            $data = $request->all();
            if (!isset($data['movimentos']))
                return response()->json(['sucesso' => false, 'mensagem' => 'Informe os movimentos']);

            $movimentos = json_decode($data['movimentos'], true);

            foreach ($movimentos as $cnpj => $data)
            {
                $empresa = Empresa::where(['cnpj' => $cnpj])->get()->first();
                if (!$empresa)
                    return response()->json(['sucesso' => false, 'mensagem' => 'CNPJ: ' . $cnpj . ' não encontrado']);
                foreach ($data as $dt => $m)
                {
                    Movimento::updateOrCreate([
                        'empresa_id' => $empresa->id,
                        'data' => $dt
                    ], [
                        'empresa_id' => $empresa->id,
                        'data' => $dt,
                        'qtd_vendas' => $m['qtd_vendas'],
                        'vl_total_vendas' => $m['vl_total_vendas'],
                        'pecas_vendidas' => $m['pecas_vendidas'],
                        'markup' => $m['markup'],
                        'clientes_identificados' => $m['clientes_identificados'],
                        'ly' => $m['ly']
                    ]);
                }
            }
            return response()->json(['sucesso' => true, 'mensagem' => 'Registros inseridos']);
        } catch (DecryptException $e) {
            return response()->json(['sucesso' => false, 'mensagem' => 'Token inválido']);
        }
    }
}
