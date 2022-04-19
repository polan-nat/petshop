@include('layout')

<form method="post">
    @csrf 

    <div class="card mt-4 mx-auto" style="width: 30rem;">
        <div class="card-body">
          <h5 class="card-title text-center">Faça login</h5>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="seuemail@exemplo.com">
          </div>
          <div class="mb-3">
            <label class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Insira a sua senha">
          </div>
          <button type="submit" class="btn btn-outline-primary">Entrar</button>
          <p class="card-text mt-2">Ainda não possui cadastro?<a href="{{ url('/cadastro') }}"> Cadastre-se </a></p>
        </div>
      </div>
      
</form>