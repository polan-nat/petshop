@include('layout')

    @include('erros', ['errors' => $errors])

<form method="post">
    @csrf 

    <div class="card mt-4 mx-auto" style="width: 30rem;">
        <div class="card-body">
          <h5 class="card-title text-center">Faça login</h5>

          <div class="mb-3">
            <label class="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="seuemail@exemplo.com">
          </div>

          <div class="mb-3">
            <label class="password">Senha</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Insira a sua senha">
            <span class="bi bi-eye" style="position: absolute; top: 156px; right: 30px;"></span>
          </div>

          <button type="submit" class="btn btn-outline fw-bold" style="background-color: #d4bbe8; color: #fff">Entrar</button>

          <p class="card-text mt-2">Ainda não possui cadastro?<a href="{{ url('/cadastro') }}" style="text-decoration: none"> Cadastre-se </a></p>

        </div>
      </div>
      
</form>

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