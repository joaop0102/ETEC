@extends('layouts.main')

@section('title', 'Quem-somos')

@section('content')
<div class="container"> 
<div class="card text-center" style="margin: 10px;">
  <div class="card-header">
    FutFil
  </div>
  <div class="card-body">
    <h5 class="card-title">Quem Somos?</h5>
    <p class="card-text" style="color: white;">No Futfil, a diversão é garantida! Já imaginou ter todos os jogos de tirar o fôlego da Champions League e os filmes mais legais num só lugar? É isso que oferecemos, e queremos que você faça parte dessa festa!
            <br>
        Pense na facilidade de ter acesso a tudo o que você adora sobre futebol e cinema com apenas alguns cliques. E não para por aí - queremos construir uma comunidade onde você possa se conectar com outras pessoas que compartilham suas paixões.
            <br>
        No Futfil, estamos sempre atualizando nossa lista para garantir que você nunca fique sem opções de entretenimento. Então, se você quer se divertir de verdade, venha com a gente! Estamos ansiosos para te ver por aqui, pronto para curtir momentos incríveis juntos!.</p>
  </div>
  <div class="card-footer text-body-secondary">
    Criador: João Pedro Silva de Oliveira
  </div>
</div>
    <div class="row carde">
    <div class="card" style="width: 18rem;">
    <img width="100%" height="100%" src="/img/afoto.jpg" class="card-img-top" alt="..." style="border-radius: 15px;">
        </div>
        <!-- acordion-->
        <div class="accordion" id="accordionExample" style="width: 985px; height: 500px;">
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
@endsection    