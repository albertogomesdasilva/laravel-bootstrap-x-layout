<x-layout title='Listar as Maquinas' rota='Rota Raiz'>
<div class="cor-azul">
<div class="container mt-4">
    <h1>Listar as Máquinas</h1>
    <hr>


    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($machines as $machine)
    <tr>
        <td>{{ $machine->id }}</td>
        <td>{{ $machine->name }}</td>
    </tr>
    @endforeach
  
  </tbody>
</table>
    <hr>
<button type="button" class="btn btn-primary btn-lg btn-block">Novo Registro</button>
</div>
<a href="/welcome">Welcome</a>
</div>

</x-layout>