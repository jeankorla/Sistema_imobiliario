<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public readonly Cliente $cliente;
    public function __construct()
    {
        $this->cliente = new Cliente();
    }

    public function index()
    {

        $clientes = Cliente::all();


        return view('clientes', ['clientes' => $clientes]);
    }

    public function create()
    {
        return view('clientes_cadastro');
    }

    public function store(Request $request)
    {
        // // Validação dos dados
     $dadosValidados = $request->validate([
        'nome' => 'required|max:100', // Nome é obrigatório e tem um máximo de 100 caracteres
        'email' => 'nullable|email|max:100', // Email é obrigatório, deve ser um email válido e tem um máximo de 100 caracteres
        'sexo' => 'nullable|max:10', // Sexo é opcional (nullable) e tem um máximo de 10 caracteres
        'nascimento' => 'nullable|date', // Nascimento é opcional e deve ser uma data
        'foto' => 'nullable|max:255', // Foto é opcional e tem um máximo de 255 caracteres
        'cep' => 'nullable|max:10', // CEP é opcional e tem um máximo de 10 caracteres
        'endereco' => 'nullable|max:255', // Endereço é opcional e tem um máximo de 255 caracteres
        'numero' => 'nullable|max:25', // Número é opcional e tem um máximo de 25 caracteres
        'complemento' => 'nullable|max:255', // Complemento é opcional e tem um máximo de 255 caracteres
        'bairro' => 'nullable|max:255', // Bairro é opcional e tem um máximo de 255 caracteres
        'cidade' => 'nullable|max:255', // Cidade é opcional e tem um máximo de 255 caracteres
        'estado' => 'nullable|max:25', // Estado é opcional e tem um máximo de 25 caracteres
        'telefone' => 'nullable|max:25', // Telefone é opcional e tem um máximo de 25 caracteres
        'celular' => 'nullable|max:25', // Celular é opcional e tem um máximo de 25 caracteres
        'anotacoes' => 'nullable|max:255' // Anotações é opcional e tem um máximo de 255 caracteres
    ]);

        // Criação do cliente
        $cliente = Cliente::create($dadosValidados);

        // Redirecionamento após o cadastro (ajuste conforme necessário)
        return redirect()->route('clientes.index')->with('success', 'Cliente cadastrado com sucesso!');
    }

    public function show($id)
    {
        // Busca o cliente pelo ID. Se não encontrar, retorna uma página 404.
        $cliente = Cliente::findOrFail($id);

        // Retorna a view com o cliente encontrado.
        return view('clientes_show', ['cliente' => $cliente]);
    }

    public function edit($id)
    {
         // Busca o cliente pelo ID. Se não encontrar, retorna uma página 404.
        $cliente = Cliente::findOrFail($id);

        // Retorna a view com o cliente encontrado.
        return view('clientes_edit', ['cliente' => $cliente]);
    }

    public function update(Request $request, $id)
    {
        // // Validação dos dados
     $dadosValidados = $request->validate([
        'nome' => 'required|max:100', // Nome é obrigatório e tem um máximo de 100 caracteres
        'email' => 'required|email|max:100', // Email é obrigatório, deve ser um email válido e tem um máximo de 100 caracteres
        'sexo' => 'nullable|max:10', // Sexo é opcional (nullable) e tem um máximo de 10 caracteres
        'nascimento' => 'nullable|date', // Nascimento é opcional e deve ser uma data
        'foto' => 'nullable|max:255', // Foto é opcional e tem um máximo de 255 caracteres
        'cep' => 'nullable|max:10', // CEP é opcional e tem um máximo de 10 caracteres
        'endereco' => 'nullable|max:255', // Endereço é opcional e tem um máximo de 255 caracteres
        'numero' => 'nullable|max:25', // Número é opcional e tem um máximo de 25 caracteres
        'complemento' => 'nullable|max:255', // Complemento é opcional e tem um máximo de 255 caracteres
        'bairro' => 'nullable|max:255', // Bairro é opcional e tem um máximo de 255 caracteres
        'cidade' => 'nullable|max:255', // Cidade é opcional e tem um máximo de 255 caracteres
        'estado' => 'nullable|max:25', // Estado é opcional e tem um máximo de 25 caracteres
        'telefone' => 'nullable|max:25', // Telefone é opcional e tem um máximo de 25 caracteres
        'celular' => 'nullable|max:25', // Celular é opcional e tem um máximo de 25 caracteres
        'anotacoes' => 'nullable|max:255' // Anotações é opcional e tem um máximo de 255 caracteres
    ]);
         $cliente = Cliente::findOrFail($id);

        // Criação do cliente
         $cliente->update($dadosValidados);
        // Redirecionamento após o cadastro (ajuste conforme necessário)
        return redirect()->route('clientes.index')->with('success', 'Cliente Atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id)->delete();;

        return redirect()->route('clientes.index')->with('success', 'Cliente Deletado com sucesso!');

    }
}
