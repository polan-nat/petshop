@include('layout')

<div class="row justify-content-center" style="width: 70rem; margin-left: 160px">
    <div class="col">
      <div class="card mt-5">
        <img src="{{ asset('img/gato.jpeg')}}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Cuidados com o seu pet</h5>
          <p class="card-text">Uma equipe especializada garatindo os melhores cuidados.</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card mt-5">
        <img src="{{ asset('img/bed.jpg')}}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Produtos feitos pra eles</h5>
          <p class="card-text">Invista no entrenimento animal, eles também merecem!</p>
        </div>
      </div>
    </div>
</div>

<div class="card mt-3" style="width: 18rem; margin-left: 560px">
    <div class="card-body text-center px-4">
        <h5 class="card-title">Faça o cadastro</h5>
        <a href="{{ url('/cadastro')}}" class="btn btn-outline-primary">Cadastro</a><br>
        <p class="card-text">Já possui cadastro?<a href="#">Entre</a></p>
    </div>
</div>