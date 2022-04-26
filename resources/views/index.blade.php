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

<a href="{{ url('/produtos')}}" style="text-decoration: none"><h5 class="text-end mt-2 px-5">Veja mais <i class="bi bi-arrow-right-circle"></i></h5></a>

<div class="row justify-content-center mt-4">
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
@guest
<div class="card text-dark bg-light mb-3 mt-4" style="width: 18rem; margin-left: 580px">
    <div class="card-body text-center px-4">
        <h5 class="card-title">Faça o cadastro</h5>
        <a href="{{ url('/cadastro')}}" class="btn btn-outline-primary">Cadastro</a>
        <p class="card-text mt-2">Já possui cadastro? <a href="{{ url('/entrar') }}" style="text-decoration: none">Entre</a></p>
    </div>
</div>
@endguest