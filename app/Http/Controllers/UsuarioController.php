<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    public readonly User $usuario;
    public function __construct()
    {
        $this->usuario = new User();
    }

    public function index()
    {

        $usuarios = User::all();


        return view('usuarios', ['usuarios' => $usuarios]);
    }

    public function create()
    {
        return view('usuarios_cadastro');
    }

    public function store(Request $request)
    {
        // // Validação dos dados
     $dadosValidados = $request->validate([
        'nome' => 'required|max:100', // Nome é obrigatório e tem um máximo de 100 caracteres
        'apelido' => 'nullable|max:15',
        'sexo' => 'nullable|max:10', // Sexo é opcional (nullable) e tem um máximo de 10 caracteres
        'email' => 'required|email|max:100', // Email é obrigatório, deve ser um email válido, único na tabela usuarios e tem um máximo de 100 caracteres
        'nascimento' => 'nullable|date', // Nascimento é opcional e deve ser uma data
        'password' => 'required|min:6', // Senha é obrigatória e deve ter no mínimo 6 caracteres
        'confirmar_password' => 'required_with:password|same:password', // Deve ser igual à senha
        'foto' => 'nullable|max:100', // Foto é opcional e tem um máximo de 100 caracteres
        'cargo' => 'required|max:20', // Cargo é obrigatório e tem um máximo de 20 caracteres
        'cpf' => 'nullable|max:20', // CPF é opcional, único na tabela usuarios e tem um máximo de 20 caracteres
        'creci' => 'nullable|max:20', // CRECI é opcional, único na tabela usuarios e tem um máximo de 20 caracteres
    ]);


        $usuario = new User($dadosValidados);
        $usuario->password = bcrypt($request->password);
        $usuario->save();

        // Redirecionamento após o cadastro (ajuste conforme necessário)
        return redirect()->route('usuarios.index')->with('success', 'Usuário cadastrado com sucesso!');
    }

    public function show($id)
    {
        // Busca o usuario pelo ID. Se não encontrar, retorna uma página 404.
        $usuario = User::findOrFail($id);

        // Retorna a view com o usuario encontrado.
        return view('usuarios_show', ['usuario' => $usuario]);
    }

    public function edit($id)
    {
         // Busca o usuario pelo ID. Se não encontrar, retorna uma página 404.
        $usuario = User::findOrFail($id);

        // Retorna a view com o usuario encontrado.
        return view('usuarios_edit', ['usuario' => $usuario]);
    }

    public function update(Request $request, $id)
    {
        // // Validação dos dados
        $dadosValidados = $request->validate([
            'nome' => 'required|max:100', // Nome é obrigatório e tem um máximo de 100 caracteres
            'apelido' => 'nullable|max:15',
            'sexo' => 'nullable|max:10', // Sexo é opcional (nullable) e tem um máximo de 10 caracteres
            'email' => 'required|email|max:100',
            'nascimento' => 'nullable|date', // Nascimento é opcional e deve ser uma data
            'password' => 'nullable|min:6', // Senha agora é opcional
            'confirmar_password' => 'nullable|required_with:password|same:password', // Obrigatório apenas se a senha for fornecida
            'foto' => 'nullable|max:100', // Foto é opcional e tem um máximo de 100 caracteres
            'cargo' => 'required|max:20', // Cargo é obrigatório e tem um máximo de 20 caracteres
            'cpf' => 'nullable|max:20', // CPF é opcional, único na tabela usuarios e tem um máximo de 20 caracteres
            'creci' => 'nullable|max:20', // CRECI é opcional, único na tabela usuarios e tem um máximo de 20 caracteres
    ]);

    $usuario = User::findOrFail($id); // Encontra o usuário existente

    // Atualiza os dados do usuário
    $usuario->fill($dadosValidados);

    // Verifica se uma nova senha foi fornecida
    if ($request->filled('password')) {
        $usuario->password = bcrypt($request->password);
    }

    $usuario->save(); // Salva as alterações
        return redirect()->route('usuarios.index')->with('success', 'Usuário Atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $usuario = User::findOrFail($id)->delete();;

        return redirect()->route('usuarios.index')->with('success', 'Usuário Deletado com sucesso!');

    }
}

