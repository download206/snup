<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoMensagem;

class ContatoController extends Controller
{
    /**
     * Mostra o formulário de contato
     */
    public function index()
    {
        return view('contato');
    }

    /**
     * Processa o envio do formulário
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|min:3|max:100',
            'email' => 'required|email|max:100',
            'telefone' => 'nullable|string|max:20',
            'mensagem' => 'required|min:10|max:2000'
        ]);

        try {
            Mail::to(config('mail.from.address'))
                ->send(new ContatoMensagem($validated));

            return back()->with([
                'success' => 'Mensagem enviada com sucesso!',
                'scroll' => true
            ]);

        } catch (\Exception $e) {
            logger()->error('Erro no formulário: '.$e->getMessage());
            return back()
                ->withInput()
                ->with('error', 'Erro ao enviar. Tente novamente.');
        }
    }
}