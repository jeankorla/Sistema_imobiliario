@extends('master')
@section('content')

<div class="card p-5 m-5">

    <h1>Informações do Cliente</h1>

    <p><strong>Nome:</strong> {{ $cliente->nome }}</p>
    <p><strong>Email:</strong> {{ $cliente->email }}</p>
    <p><strong>Sexo:</strong> {{ $cliente->sexo }}</p>
    <p><strong>Data de Nascimento:</strong> {{ $cliente->nascimento }}</p>
    <p><strong>Foto:</strong> <img src="{{ $cliente->foto }}" alt="Foto do cliente"></p>
    <p><strong>CEP:</strong> {{ $cliente->cep }}</p>
    <p><strong>Endereço:</strong> {{ $cliente->endereco }}</p>
    <p><strong>Número:</strong> {{ $cliente->numero }}</p>
    <p><strong>Complemento:</strong> {{ $cliente->complemento }}</p>
    <p><strong>Bairro:</strong> {{ $cliente->bairro }}</p>
    <p><strong>Cidade:</strong> {{ $cliente->cidade }}</p>
    <p><strong>Estado:</strong> {{ $cliente->estado }}</p>
    <p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>
    <p><strong>Celular:</strong> {{ $cliente->celular }}</p>
    <p><strong>Anotações:</strong> {{ $cliente->anotacoes }}</p>

</div>

@endsection