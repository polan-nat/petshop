<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Petshop</title>
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d4bbe8">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('/') }}" style="color: #fff; font-size: 30px; font-weight: bold"><img src="{{ asset('img/logo.png')}}" width="40"> Petshop</a>
          <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/cadastro') }}"><button type="button" class="btn btn-outline-light">
                    Cadastro </button></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><button type="button" class="btn btn-outline-light">
                    Entrar </button></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#"><button type="button" class="btn btn-outline-light">
                    Produtos </button></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><button type="button" class="btn btn-outline-light">
                    Contato </button></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</body>
</html>