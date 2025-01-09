@extends('layouts.main')

@section('title', 'Contato')

@section('content')

<div class="container">

  <div class="card mx-auto" style="width: 25rem; height: 25rem; margin: 10px;">
    <div class="card-body">
      <h3 class="card-title text-center">Faça o seu cadastro</h3>
      <h6 class="card-subtitle mb-2 text-body-secondary"></h6>
      <p class="card-text text-center" style="color: white;">Faça já o seu cadastro e mergulhe de cabeça nessa incrível jornada de entretenimento com filmes e vídeos! Aqui, a diversão nunca acaba. Cadastre-se agora mesmo e desfrute de uma vasta biblioteca de conteúdos emocionantes, prontos para serem explorados a qualquer momento. Seja parte dessa experiência única e comece a sua aventura cinematográfica hoje mesmo.</p>
    </div>
  </div>

  <form action="" method="get" class="mx-auto">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label" style="color: white;">Nome</label>
      <input type="text" name="nome" class="form-control" id="nome" style="width: 50%; height: 40px; margin-left: 160px;">
    </div>
    <div class="mb-3">
      <label for="telefone" class="form-label" style="color: white;">Telefone</label>
      <input type="number" name="telefone" class="form-control" id="telefone" style="width: 50%; height: 40px; margin-left: 160px;">
    </div>  
    <div class="mb-3">
      <label for="endereco" class="form-label" style="color: white;">Endereço</label>
      <input type="text" name="endereco" class="form-control" id="endereco" style="width: 50%; height: 40px; margin-left: 160px;">
    </div> 
      <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="masculino" value="Masculino" checked>
    <label class="form-check-label" for="masculino">
      Masculino
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="feminino" value="Feminino">
    <label class="form-check-label" for="feminino">
      Feminino
  </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>

{{-- Exibindo os dados --}}
  @if(isset($nome))
    <div class="card mt-4" style="width: 25rem; margin: 0 auto;">
      <div class="card-body">
        <h5 class="card-title">Dados do Cadastro:</h5>
        <p class="card-text" style="color: white;"><strong>Nome:</strong> {{ $nome }}</p>
        <p class="card-text" style="color: white;"><strong>Telefone:</strong> {{ $telefone }}</p>
        <p class="card-text" style="color: white;"><strong>Endereço:</strong> {{ $endereco }}</p>
        <p class="card-text" style="color: white;"><strong>Gênero:</strong> {{ $exampleRadios }}</p>
      </div>
    </div>
  @endif

@endsection