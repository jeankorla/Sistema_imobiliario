@extends('master')
@section('content')


@if(session('success'))
    <div class=" mt-2 alert alert-success">
        {{ session('success') }}
    </div>
@endif


<div class="card mt-5 p-3">
    <div class="d-flex col-4">
        <a class="btn btn-primary me-2" href="<?php echo route('clientes.create') ?>">Cadastrar Cliente</a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Cadastro Rápido
        </button>
    </div>

<table class="table mt-5  shadow-lg">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Celular</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($clientes as $cliente) : ?>
    <tr>
      <th scope="row"><?php echo $cliente->id ?></th>
      <td><?php echo $cliente->nome ?></td>
      <td><?php echo $cliente->email ?></td>
      <td><?php echo $cliente->telefone ?></td>
      <td><?php echo $cliente->celular ?></td>
      <td>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ações
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
    <li><a class="dropdown-item" href="<?php echo route('clientes.show', ['id' => $cliente->id]) ?>">Detalhes</a></li>
    <li><a class="dropdown-item" href="<?php echo route('clientes.edit', ['id' => $cliente->id]) ?>">Editar</a></li>
    <li><hr class="dropdown-divider"></li>
    <li class="dropdown-item">
        <form action="<?php echo route('clientes.destroy', $cliente->id) ?>" method="POST" onsubmit="return confirmDelete()">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm" style="width: 100%; text-align: left;">Excluir</button>
        </form>
    </li>
</ul>
        </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastro Rápido</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
       @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <div class="modal-body">
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
   <div class="col-md-12">
    <label for="telefone" class="form-label">Telefone Residencial:</label>
    <input type="text" class="form-control" id="telefone" name="telefone">
  </div>
  <div class="col-12">
    <label for="celular" class="form-label">Celular:</label>
    <input type="text" class="form-control" id="celular" name="celular">
  </div>

    <input type="hidden" id="cpf" name="cpf" value="1">
   <input type="hidden" id="creci" name="creci" value="2">

  <div class="col-12 mt-4">
    <a class="btn btn-danger" href="<?php echo route('clientes.index') ?>">Cancelar</a>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
      </div>
    </div>
  </div>
</div>
</div>
<script>
function confirmDelete() {
    return confirm('Tem certeza que quer excluir o cliente "<?php echo $cliente->nome ?>" ?');
}
</script>
@endsection