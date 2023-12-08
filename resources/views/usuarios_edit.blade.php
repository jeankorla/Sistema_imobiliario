@extends('master')
@section('content')

<div class="card mt-5 mb-5 p-5 shadow-lg">
  <div class="col-12 mb-5">
  <a class="btn btn-danger" href="<?php echo route('usuarios.index') ?>">Voltar</a>
</div>
    <h1 class="mb-5">Editar Usuário</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form class="row g-3 " action="<?php echo route('usuarios.update', [$usuario -> id]) ?>" method="POST" enctype="multipart/form-data">
@csrf
<input type="hidden" name="_method" value="PUT">
 <div class="col-md-6">
    <label for="nome" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $usuario -> nome ?>">
  </div>
  <div class="col-md-6">
    <label for="apelido" class="form-label">Apelido:</label>
    <input type="text" class="form-control" id="apelido" name="apelido" value="<?php echo $usuario -> apelido ?>">
  </div>
   <div class="col-md-12">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" name="email" value="<?php echo $usuario -> email ?>">
  </div>
    <div class="col-md-6">
        <label for="password" class="form-label">Senha:</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="col-md-6">
        <label for="confirmar_password" class="form-label">Confirmar Senha:</label>
        <input type="password" class="form-control" id="confirmar_password" name="confirmar_password">
    </div>
  <div class="col-md-6">
    <label for="nascimento" class="form-label" >Data de Nascimento:</label>
    <input type="date" class="form-control" id="nascimento" name="nascimento" value="<?php echo $usuario -> nascimento ?>">
  </div>
  <div class="col-md-6">
    <label for="sexo" class="form-label">Sexo:</label>
        <select class="form-select" aria-label="Default select example" id="sexo" name="sexo">
            <option selected>Select</option>
            <option value="Masculino" <?php echo $usuario->sexo == 'Masculino' ? 'selected' : ''; ?>>Masculino</option>
            <option value="Feminino" <?php echo $usuario->sexo == 'Feminino' ? 'selected' : ''; ?>>Feminino</option>
            <option value="Outros" <?php echo $usuario->sexo == 'Outros' ? 'selected' : ''; ?>>Outros</option>
        </select>
  </div>
  <div class="col-md-6">
    <label for="cargo" class="form-label">Cargo:</label>
        <select class="form-select" aria-label="Default select example" id="cargo" name="cargo">
            <option selected>Select</option>
            <option value="Admin" <?php echo $usuario->cargo == 'Admin' ? 'selected' : ''; ?>>Admin</option>
            <option value="Gerente" <?php echo $usuario->cargo == 'Gerente' ? 'selected' : ''; ?>>Gerente</option>
            <option value="Corretor" <?php echo $usuario->cargo == 'Corretor' ? 'selected' : ''; ?>>Corretor</option>
            <option value="Captador" <?php echo $usuario->cargo == 'Captador' ? 'selected' : ''; ?>>Captador</option>
        </select>
  </div>
  <div class="col-md-6">
    <label for="foto" class="form-label">Foto:</label>
    <input type="file" class="form-control" id="foto" name="foto" value="<?php echo $usuario -> foto ?>">
  </div>


<!-- FAZER O PREVIEW PRA IMAGEM !!!!!!!!! -->


   <div class="col-md-12">
    <label for="cpf" class="form-label">Cpf:</label>
    <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $usuario -> cpf ?>">
  </div>
  <div class="col-12">
    <label for="creci" class="form-label">Creci:</label>
    <input type="text" class="form-control" id="creci" name="creci" value="<?php echo $usuario -> creci ?>">
  </div>


  <div class="col-12">
    <a class="btn btn-danger" href="<?php echo route('usuarios.index') ?>">Cancelar</a>
    <button type="submit" class="btn btn-primary">Atualizar</button>
  </div>
</form>
</div>
@endsection