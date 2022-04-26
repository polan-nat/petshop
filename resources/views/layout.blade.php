<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Petshop</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d4bbe8">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('/') }}" style="color: #fff; font-size: 30px; font-weight: bold"><img src="{{ asset('img/logo.png')}}" width="40"> Petshop</a>
          <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
               @guest 
                <a class="nav-link" href="{{ url('/cadastro') }}"><button type="button" class="btn btn-outline-light fw-bold">
                    Cadastro </button></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/entrar')}}"><button type="button" class="btn btn-outline-light fw-bold">
                    Entrar </button></a>
              </li>
              @endguest
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/produtos') }}"><button type="button" class="btn btn-outline-light fw-bold">
                    Produtos </button></a>
              </li>
              @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/contato') }}"><button type="button" class="btn btn-outline-light fw-bold">
                    Contato </button></a>
              </li>
              @endguest
              @auth
                <a href="/sair" class="nav-link"><button type="button" class="btn btn-outline-danger fw-bold"><i class="bi bi-box-arrow-right"></i> Sair</button></a>
              @endauth
            </ul>
          </div>
        </div>
      </nav>
    <!-- Implementar metodo de acessar o perfil do usuario e atraves do IF auth -->
</body>
</html>