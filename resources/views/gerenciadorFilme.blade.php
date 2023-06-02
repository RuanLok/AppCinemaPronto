@extends('padrao')

@section('content')

<link href="/css/style.css" rel="stylesheet"> 

<div class="container mt-5">
<form method="get" action="{{route('gerenciar-filme')}}">
  <div class="mb-3 row">
    <label for="inputPesquisar" class="col-sm-2 col-form-label">Pesquisar:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nomefilme" id="inputPesquisar" placeholder="Digite o nome do funcionário" >
    </div>
    <div class="col-sm-2"> <button type="submit" class="btn btn-outline-primary">Pesquisar</button> </div>
  </div>
</form>

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome do filme</th>
      <th scope="col">Atores</th>
      <th scope="col">Sinopse</th>
      <th scope="col">Data de lançamento</th>
      <th scope="col">Alterar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>


     
    @if(empty($_GET['nomefilme']))
   
    @else
    
    @foreach($dadosfilme as $dadosfilmes)
    

    
    <tr>
    
      <th scope="row">{{$dadosfilmes->id}}</th>
      <td>{{$dadosfilmes->nomefilme}}</td>
      <td>{{$dadosfilmes->atoresfilme}}</td>
      <td>{{$dadosfilmes->sinopsefilme}}</td>
      <td>{{$dadosfilmes->datalancamentofilme}}</td>
      <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAlterarFilme-{{$dadosfilmes->id}}">Alterar</button>
      @include('modal.filmeAlterar')
      </td>
      <td>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Excluir
</button>
      </td>  

    </tr>

    

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Deseja excluir este Filme?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form method="post" action="{{route('apagar-filme',$dadosfilmes->id)}}">
  @method('delete')
  @csrf
  <button type="submit" class="btn btn-danger" name="excluir">Excluir</button>
</form>
      </div>
    </div>
  </div>
</div>
   @endforeach
  </tbody>
</table>

</div>
@endif




@endsection