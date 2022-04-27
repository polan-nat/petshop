@include('layout')

<form action="post">
<div class="card w-50 mx-auto mt-4">
    <div class="card-body">
      <h5 class="card-title">O que achou do nosso atendimento?</h5>
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Digite seu email">
    </div>
    <div class="card-body">
          <label class="form-label">Descreva</label>
          <textarea name="descricao" id="descricao" class="form-control" cols="20" rows="5"></textarea>
          <button class="btn btn-outline fw-bold mt-3" style="background-color: #d4bbe8; color: #fff">Enviar</button>
           <!-- Estrelas de avaliação -->
      </div>
</div>
</form>a