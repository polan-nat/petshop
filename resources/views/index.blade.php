@include('layout')

@if(session('status'))
  <div class="col-3 mt-3 mx-auto alert alert-success ">
      {{ session('status') }}
  </div>
@endif

<div class="row justify-content-center" style="width: 70rem; margin-left: 160px">
    <div class="col">
      <div class="card mt-3">
        <img src="{{ asset('img/gato.jpeg')}}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Cuidados com o seu pet</h5>
          <p class="card-text">Uma equipe especializada garatindo os melhores cuidados.</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card mt-3">
        <img src="{{ asset('img/bed.jpg')}}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Produtos feitos pra eles</h5>
          <p class="card-text">Invista no entrenimento animal, eles também merecem!</p>
        </div>
      </div>
    </div>
</div>

<!-- Adicionar uma linha aqui -->
<hr>
<h5 class="d-flex justify-content-center mt-3">Nossos produtos</h5>

<div class="d-flex justify-content-around mt-4">
<div class="card text-white bg-success mb-3" style="width: 15rem;">
  <div class="card-body">
    <h5 class="card-title text-center"><a href="#" style="text-decoration: none; color: #fff;" data-toggle="tooltip" data-placement="right" title="Ir para brinquedos">Brinquedos</h5>
    <img src="{{ asset('img/brinq.jpg')}}" class="img-thumbnail">
    <p class="card-text">Além de divertir, os brinquedos têm uma função importante no aprendizado e até na saúde do animal.</p>
    </a>
  </div>
</div>

<div class="card text-white bg-success mb-3" style="width: 15rem;">
  <div class="card-body">
    <h5 class="card-title text-center"><a href="#" style="text-decoration: none; color: #fff;" data-toggle="tooltip" data-placement="right" title="Ir para ração">Ração</h5>
    <img src="{{ asset('img/rac.jpg')}}" class="img-thumbnail">
    <p class="card-text">A escolha da ração é uma das mais importantes para garantir a saúde do seu amiguinho.</p>
    </a>
  </div>
</div>

<div class="card text-white bg-success mb-3" style="width: 15rem;">
  <div class="card-body">
    <h5 class="card-title text-center"><a href="#" style="text-decoration: none; color: #fff;" data-toggle="tooltip" data-placement="right" title="Ir para higiene">Higiene</h5>
    <img src="{{ asset('img/tapet.jpg')}}" class="img-thumbnail">
    <p class="card-text">Manter a higiene do seu animal é uma das melhores formas de evitar procedimentos cirúrgicos e complicações no futuro.</p>
  </a>
  </div>
</div>

<div class="card text-white bg-success mb-3" style="width: 15rem;">
  <div class="card-body">
    <h5 class="card-title text-center"><a href="#" style="text-decoration: none; color: #fff;" data-toggle="tooltip" data-placement="right" title="Ir para remédios">Remédios</h5>
    <img src="{{ asset('img/remedio.jpg')}}" class="img-thumbnail">
    <p class="card-text">Cada dia mais desenvolvida, a indústria de remédio para animais oferece opções seguras para manter seu pet saudável e combater enfermidades.</p>
    </a>
  </div>
</div>
</div>

<hr>
@guest
<div class="card text-dark bg-light mb-3 mt-4" style="width: 18rem; margin-left: 580px">
    <div class="card-body text-center px-4">
        <h5 class="card-title">Faça o cadastro</h5>
        <a href="{{ url('/cadastro')}}" class="btn btn-outline-primary">Cadastro</a>
        <p class="card-text mt-2">Já possui cadastro? <a href="{{ url('/entrar') }}" style="text-decoration: none">Entre</a></p>
    </div>
</div>
@endguest