@include('layout')

<div class="card w-50 mx-auto mt-4">
  <div class="card-body">
    <h5 class="card-title">Preencha o formulário para realizar o cadastro</h5>
      <form action="{{ url('/cadastro/registro') }}" method="post">
        @csrf

      <div class="col-5 mb-3 mt-4">
        <label class="form-label">Nome completo</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Insira o seu nome">
      </div>

      <div class="col-5 mb-3 mt-4">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="seuemail@exemplo.com">
      </div>

      <div class="col-5 mb-3 mt-4">
        <label class="form-label">Senha</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Insira sua senha">
        <span class="bi bi-eye" style="position: absolute; top: 290px; right: 430px;"></span>
      </div>

      <button type="submit" class="btn btn-outline fw-bold" style="background-color: #d4bbe8; color: #fff">Cadastrar</button>

    </form>
  </div>
</div>

<script>
  let btn = document.querySelector('.bi-eye');

  btn.addEventListener('click', function() {
    
    let input = document.querySelector('#password');

    if(input.getAttribute('type') == 'password') {
      input.setAttribute('type', 'text');
    } else {
      input.setAttribute('type', 'password');
    } 

  });
</script>