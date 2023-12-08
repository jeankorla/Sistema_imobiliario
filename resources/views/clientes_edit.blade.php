@extends('master')
@section('content')

<div class="card mt-5 mb-5 p-5 shadow-lg">
  <div class="col-12 mb-5">
  <a class="btn btn-danger" href="<?php echo route('clientes.index') ?>">Voltar</a>
</div>
    <h1 class="mb-5">Editar Cliente</h1>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="row g-3 " action="<?php echo route('clientes.update', [$cliente -> id]) ?>" method="POST" enctype="multipart/form-data">
@csrf
<input type="hidden" name="_method" value="PUT">
  <div class="col-md-6">
    <label for="nome" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $cliente -> nome ?>">
  </div>
   <div class="col-md-6">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" name="email" value="<?php echo $cliente -> email ?>">
  </div>
  <div class="col-md-6">
    <label for="nascimento" class="form-label" >Data de Nascimento:</label>
    <input type="date" class="form-control" id="nascimento" name="nascimento" value="<?php echo $cliente -> nascimento ?>">
  </div>
 <div class="col-md-6">
    <label for="sexo" class="form-label">Sexo:</label>
    <select class="form-select" aria-label="Default select example" id="sexo" name="sexo">
        <option value="Masculino" <?php echo $cliente->sexo == 'Masculino' ? 'selected' : ''; ?>>Masculino</option>
        <option value="Feminino" <?php echo $cliente->sexo == 'Feminino' ? 'selected' : ''; ?>>Feminino</option>
        <option value="Outros" <?php echo $cliente->sexo == 'Outros' ? 'selected' : ''; ?>>Outros</option>
    </select>
</div>
  <div class="col-9">
    <label for="endereco" class="form-label">Endereço:</label>
    <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $cliente -> endereco ?>">
  </div>
  <div class="col-3">
    <label for="numero" class="form-label">Número:</label>
    <input type="text" class="form-control" id="numero" name="numero" value="<?php echo $cliente -> numero ?>">
  </div>
  <div class="col-6">
    <label for="bairro" class="form-label">Bairro:</label>
    <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $cliente -> bairro ?>">
  </div>
  <div class="col-6">
    <label for="complemento" class="form-label">Complemento:</label>
    <input type="text" class="form-control" id="complemento" name="complemento" value="<?php echo $cliente -> complemento ?>">
  </div>
  <div class="col-6">
    <label for="cidade" class="form-label">Cidade:</label>
    <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $cliente -> cidade ?>">
  </div>
 <div class="col-6">
    <label for="estado" class="form-label">Estado:</label>
    <select class="input-group form-control" id="estado" name="estado">
        <option value="São Paulo" <?php echo $cliente->estado == 'São Paulo' ? 'selected' : ''; ?>>São Paulo</option>
        <option value="Acre" <?php echo $cliente->estado == 'Acre' ? 'selected' : ''; ?>>Acre</option>
        <option value="Alagoas" <?php echo $cliente->estado == 'Alagoas' ? 'selected' : ''; ?>>Alagoas</option>
        <option value="Amapá" <?php echo $cliente->estado == 'Amapá' ? 'selected' : ''; ?>>Amapá</option>
        <option value="Amazonas" <?php echo $cliente->estado == 'Amazonas' ? 'selected' : ''; ?>>Amazonas</option>
        <option value="Bahia" <?php echo $cliente->estado == 'Bahia' ? 'selected' : ''; ?>>Bahia</option>
        <option value="Ceará" <?php echo $cliente->estado == 'Ceará' ? 'selected' : ''; ?>>Ceará</option>
        <option value="Distrito Federal" <?php echo $cliente->estado == 'Distrito Federal' ? 'selected' : ''; ?>>Distrito Federal</option>
        <option value="Espírito Santo" <?php echo $cliente->estado == 'Espírito Santo' ? 'selected' : ''; ?>>Espírito Santo</option>
        <option value="Goiás" <?php echo $cliente->estado == 'Goiás' ? 'selected' : ''; ?>>Goiás</option>
        <option value="Maranhão" <?php echo $cliente->estado == 'Maranhão' ? 'selected' : ''; ?>>Maranhão</option>
        <option value="Mato Grosso" <?php echo $cliente->estado == 'Mato Grosso' ? 'selected' : ''; ?>>Mato Grosso</option>
        <option value="Mato Grosso do Sul" <?php echo $cliente->estado == 'Mato Grosso do Sul' ? 'selected' : ''; ?>>Mato Grosso do Sul</option>
        <option value="Minas Gerais" <?php echo $cliente->estado == 'Minas Gerais' ? 'selected' : ''; ?>>Minas Gerais</option>
        <option value="Pará" <?php echo $cliente->estado == 'Pará' ? 'selected' : ''; ?>>Pará</option>
        <option value="Paraíba" <?php echo $cliente->estado == 'Paraíba' ? 'selected' : ''; ?>>Paraíba</option>
        <option value="Paraná" <?php echo $cliente->estado == 'Paraná' ? 'selected' : ''; ?>>Paraná</option>
        <option value="Pernambuco" <?php echo $cliente->estado == 'Pernambuco' ? 'selected' : ''; ?>>Pernambuco</option>
        <option value="Piauí" <?php echo $cliente->estado == 'Piauí' ? 'selected' : ''; ?>>Piauí</option>
        <option value="Rio de Janeiro" <?php echo $cliente->estado == 'Rio de Janeiro' ? 'selected' : ''; ?>>Rio de Janeiro</option>
        <option value="Rio Grande do Norte" <?php echo $cliente->estado == 'Rio Grande do Norte' ? 'selected' : ''; ?>>Rio Grande do Norte</option>
        <option value="Rio Grande do Sul" <?php echo $cliente->estado == 'Rio Grande do Sul' ? 'selected' : ''; ?>>Rio Grande do Sul</option>
        <option value="Rondônia" <?php echo $cliente->estado == 'Rondônia' ? 'selected' : ''; ?>>Rondônia</option>
        <option value="Roraima" <?php echo $cliente->estado == 'Roraima' ? 'selected' : ''; ?>>Roraima</option>
        <option value="Santa Catarina" <?php echo $cliente->estado == 'Santa Catarina' ? 'selected' : ''; ?>>Santa Catarina</option>
        <option value="Sergipe" <?php echo $cliente->estado == 'Sergipe' ? 'selected' : ''; ?>>Sergipe</option>
        <option value="Tocantins" <?php echo $cliente->estado == 'Tocantins' ? 'selected' : ''; ?>>Tocantins</option>
    </select>
</div>

  <div class="col-md-6">
    <label for="foto" class="form-label">Foto:</label>
    <input type="file" class="form-control" id="foto" name="foto" value="<?php echo $cliente -> foto ?>">
  </div>


<!-- FAZER O PREVIEW PRA IMAGEM !!! -->


   <div class="col-md-12">
    <label for="telefone" class="form-label">Telefone Residencial:</label>
    <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $cliente -> telefone ?>">
  </div>
  <div class="col-12">
    <label for="celular" class="form-label">Celular:</label>
    <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $cliente -> celular ?>">
  </div>
  
<div class="form-outline">
  <label class="form-label" for="anotacoes">Anotações:</label>
  <textarea class="form-control" id="anotacoes" name="anotacoes" rows="4"><?php echo htmlspecialchars($cliente->anotacoes); ?></textarea>
</div>


  <div class="col-12">
    <a class="btn btn-danger" href="<?php echo route('clientes.index') ?>">Cancelar</a>
    <button type="submit" class="btn btn-primary">Atualizar</button>
  </div>
</form>
</div>
@endsection