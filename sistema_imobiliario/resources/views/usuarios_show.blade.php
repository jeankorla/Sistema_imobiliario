@extends('master')
@section('content')

<div class="card p-5 m-5">
     <div class="col-12 mb-5">
  <a class="btn btn-danger" href="<?php echo route('usuarios.index') ?>">Voltar</a>
</div>

    <h1>Informações do Usuário</h1>

    <p><strong>Nome:</strong> {{ $usuario->nome }}</p>
    <p><strong>Apelido:</strong> {{ $usuario->apelido }}</p>
    <p><strong>Email:</strong> {{ $usuario->email }}</p>
    <p><strong>Data de Nascimento:</strong> {{ $usuario->nascimento }}</p>
    <p><strong>Sexo:</strong> {{ $usuario->sexo }}</p>
    <p><strong>Foto:</strong> <img src="{{ $usuario->foto }}" alt="Foto do usuario"></p>
    <p><strong>Cargo:</strong> {{ $usuario->cargo }}</p>
    <p><strong>Cpf:</strong> {{ $usuario->cpf}}</p>
    <p><strong>Creci:</strong> {{ $usuario->creci }}</p>
</div>

@endsection