@include('layout')

@include('mensagem')
<!--Criar o perfil do usuario, permitir que ele exclua, (coloque foto)->teste ainda, edite os dados -->

<div class="container">
    
    <div class="row justify-content-start mt-5">
      <div class="col-1">
        <img src="{{ url('img/user.png')}}" width="150" height="150" class="rounded-circle">
        <h4>{{ $user }}</h4>
        <input type="file" name="foto-id">
      </div>
    </div>

    <form action="{{ url('/usuario/att') }}" method="post">
        @csrf
                <div class="col-5 mb-3 mt-4">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome atual: {{ $user }}">
                </div>
            
                <div class="col-5 mb-3 mt-4">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" disabled>
                </div>
            
                <div class="col-5 mb-3 mt-4">
                    <label class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" >
                </div>
            
                <button type="submit" class="btn btn-outline fw-bold" style="background-color: #d4bbe8; color: #fff;">Atualizar</button>
    </form>
            
                <form action="{{ url('/usuario/del')}}" method="post">
                    @csrf 
                    @method('DELETE')
                <button class="btn btn-outline-danger fw-bold mt-3">Excluir</button>
                 </form>
</div>

<!-- Olhar esse site: https://acervolima.com/laravel-apagar-registros/#:~:text=Segundo%20M%C3%A9todo%3A%20A%20segunda%20maneira,Modelo%20de%20Usu%C3%A1rio%20(F%C3%A1cil).&text=%2D%3Ename(%20'users.,destroy'%20)%3B-->