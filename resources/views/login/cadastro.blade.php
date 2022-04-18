@include('layout')

<div class="card w-50">
  <div class="card-body">
    <h5 class="card-title">Preencha o formulário para realizar o cadastro</h5>
      <form action="" method="post">

      <div class="col-5 mb-3 mt-4">
        <label class="form-label">Nome completo</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o seu nome">
      </div>
      <div class="col-5 mb-3 mt-4">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="seuemail@exemplo.com">
      </div>
      <div class="col-5 mb-3 mt-4">
        <label class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" id="nascimento" name="nascimento" placeholder="name@example.com">
      </div>
      <div class="col-5 mb-3 mt-4">
        <label class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha" placeholder="name@example.com">
      </div>
      <button type="button" class="btn btn-outline" style="background-color: #d4bbe8; color: #fff">Cadastrar</button>

    </form>
  </div>
</div>