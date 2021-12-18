<?php

namespace App\Http\Controllers;

use App\Contato;
use App\Http\Requests\ContatoRequest;
use App\Mail\MailContato;
use App\Mail\MailContatoAdm;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function contato(ContatoRequest $request)
    {
        $data = $request->all();

        $contato = new Contato($data);
        try
        {
            Mail::to($contato->email)->send(new MailContato($contato));
            Mail::to('exata@casotti.com.br')->send(new MailContatoAdm($contato));
            flash('Sua mensagem foi enviada com sucesso, logo entraremos em contato')->success();
        } catch (\Swift_TransportException $e)
        {
            flash('Houve um erro enviando a solicitação de contato, verifique os dados e tente novamente')->error();
        } finally
        {
            return redirect('/');
        }

    }
}
