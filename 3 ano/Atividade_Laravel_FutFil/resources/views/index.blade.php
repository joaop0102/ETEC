@extends('layouts.main')

@section('title', 'Página inicial')

@section('content')

<div class="container text-center">
  <div class="row nav-im">
    <div class="col img">
    <img src="/img/neymar-capa.jpg" width="380" height="240" class="rounded" alt="...">
    </div>
    <div class="col img">
    <img src="/img/filme-capa.jpg" width="380" height="240" class="rounded" alt="...">
    </div>
    <div class="col img">
    <img src="/img/zidane.jpg" width="380" height="240" class="rounded" alt="...">
    </div>
  </div>
  <div class="container text-center nav-im">
  <div class="row">
    <div class="col img">
    <div class="card" style="width: 20rem;">
    <img width="480" height="320" src="/img/uefaIMG.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <strong class="card-text">Assista as melhores partidas da UEFA Champions League.</strong>
        <br><br>
        <button type="button" class="btn btn-outline-primary"><a href="/partidas">Entrar</a></button>
    </div>
    </div>
    </div>
    <div class="col img"  style="margin-left: 572px;">
    <div class="card card2" style="width: 20rem;">
    <img width="535" height="340" src="/img/filmes.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
        <strong class="card-text">Assista os melhores filmes.</strong>
        <br><br>
        <button type="button" class="btn btn-outline-primary"><a href="/filmes">Entrar</a></button>
    </div>
    </div>
    </div>
  </div>
  <div class="row">
    <div class="col">

        <div class="accordion" id="accordionExample">
        <div class="accordion-item" style="background-image: url('/img/champions-capa.jpg'); ">
            <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Partidas de futebol 
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>
                <strong>venha sentir a emoção dos jogos da Champions League!</strong> Os times mais tops do mundo se enfrentam em partidas incríveis pelo título mais cobiçado do futebol. Não deixe de assistir as jogadas incríveis, os lances de tirar o fôlego e os momentos que vão ficar na história do esporte. Não perca essa chance de vivenciar o melhor do futebol de elite da Champions League!
                </p>
            </div>
            </div>
        </div>
        <div class="accordion-item" style="background-image: url('/img/ofilme2.jpg');">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Filmes
            </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>
                <strong>Descubra a magia do cinema!</strong> Prepare-se para se envolver em histórias emocionantes, personagens inesquecíveis e momentos que vão te surpreender. Não perca a chance de se emocionar com aventuras incríveis, romances apaixonantes e mistérios envolventes. Junte-se a nós e experimente a diversão do cinema como nunca antes!
                </p>
            </div>
            </div>
        </div>
        <div class="accordion-item" style="background-image: url('/img/aimagem.jpg'); ">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                FutFil
            </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>
                <strong>Venha para o FutFil e descubra um mundo de diversão</strong> Aqui, você tem acesso aos jogos emocionantes da Champions League e aos melhores filmes. Não perca tempo procurando em vários lugares, tudo está aqui! Junte-se a nós agora e comece a aproveitar!
                </p>
            </div>
            </div>
        </div>
        </div>


    </div>
  </div>
</div>
</div>
  
@endsection