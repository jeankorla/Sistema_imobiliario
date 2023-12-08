@extends('master')
@section('content')

<div class="card mt-5 mb-5 p-5 shadow-lg">
  <div class="col-12 mb-5">
  <a class="btn btn-danger" href="<?php echo route('clientes.index') ?>">Voltar</a>
</div>
    <h1 class="mb-5">Cadastrar Cliente</h1>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="row g-3 " action="<?php echo route('clientes.store') ?>" method="post" enctype="multipart/form-data">
@csrf
  <div class="col-md-6">
    <label for="nome" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="nome" name="nome">
  </div>
   <div class="col-md-6">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="col-md-6">
    <label for="nascimento" class="form-label" >Data de Nascimento:</label>
    <input type="date" class="form-control" id="nascimento" name="nascimento">
  </div>
  <div class="col-md-6">
    <label for="sexo" class="form-label">Sexo:</label>
        <select class="form-select" aria-label="Default select example" id="sexo" name="sexo">
            <option selected>Select</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outros">Outros</option>
        </select>
  </div>
  <div class="col-9">
    <label for="endereco" class="form-label">Endereço:</label>
    <input type="text" class="form-control" id="endereco" name="endereco">
  </div>
  <div class="col-3">
    <label for="numero" class="form-label">Número:</label>
    <input type="text" class="form-control" id="numero" name="numero">
  </div>
  <div class="col-6">
    <label for="bairro" class="form-label">Bairro:</label>
    <input type="text" class="form-control" id="bairro" name="bairro">
  </div>
  <div class="col-6">
    <label for="complemento" class="form-label">Complemento:</label>
    <input type="text" class="form-control" id="complemento" name="complemento">
  </div>
  <div class="col-6">
    <label for="cidade" class="form-label">Cidade:</label>
    <input type="text" class="form-control" id="cidade" name="cidade">
  </div>
  <div class="col-6">
    <label for="estado" class="form-label">Estado:</label>
    <select class="input-group form-control" id="estado" name="estado">
                <option value="São Paulo">São Paulo</option>
                <option value="Acre">Acre</option>
                <option value="Alagoas">Alagoas</option>
                <option value="Amapá">Amapá</option>
                <option value="Amazonas">Amazonas</option>
                <option value="Bahia">Bahia</option>
                <option value="Ceará">Ceará</option>
                <option value="Distrito Federal">Distrito Federal</option>
                <option value="Espírito Santo">Espírito Santo</option>
                <option value="Goiás">Goiás</option>
                <option value="Maranhão">Maranhão</option>
                <option value="Mato Grosso">Mato Grosso</option>
                <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                <option value="Minas Gerais">Minas Gerais</option>
                <option value="Pará">Pará</option>
                <option value="Paraíba">Paraíba</option>
                <option value="Paraná">Paraná</option>
                <option value="Pernambuco">Pernambuco</option>
                <option value="Piauí">Piauí</option>
                <option value="Rio de Janeiro">Rio de Janeiro</option>
                <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                <option value="Rondônia">Rondônia</option>
                <option value="Roraima">Roraima</option>
                <option value="Santa Catarina">Santa Catarina</option>
                <option value="Sergipe">Sergipe</option>
                <option value="Tocantins">Tocantins</option>
              </select>
  </div>
  <div class="col-md-6">
    <label for="foto" class="form-label">Foto:</label>
    <input type="file" class="form-control" id="foto" name="foto">
  </div>


<!-- FAZER O PREVIEW PRA IMAGEM !!! -->


   <div class="col-md-12">
    <label for="telefone" class="form-label">Telefone Residencial:</label>
    <input type="text" class="form-control" id="telefone" name="telefone">
  </div>
  <div class="col-12">
    <label for="celular" class="form-label">Celular:</label>
    <input type="text" class="form-control" id="celular" name="celular">
  </div>
  
  <div class="form-outline">
  <label class="form-label" for="anotacoes">Anotações:</label>
  <textarea class="form-control" id="anotacoes" name="anotacoes" rows="4"></textarea>
</div>

  <div class="col-12">
    <a class="btn btn-danger" href="<?php echo route('clientes.index') ?>">Cancelar</a>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</div>
@endsection