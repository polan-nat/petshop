@include('layout')

<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height: 716px">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">Menu</span>
    </a>
    <hr>

    <h5>Departamentos</h5>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="#" class="nav-link text-white">
                <img src="{{ asset('img/brinquedos.png')}}" width="50" height="50">
                Brinquedos
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white" >
                <img src="{{ asset('img/banho.png')}}" width="50" height="50">
                Higiene
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white">
                <img src="{{ asset('img/racao.png')}}" width="50" height="50">
                Ração
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white">
                <img src="{{ asset('img/medicamentos.png')}}" width="50" height="50">
                Remédios
            </a>
        </li>
    </ul>

    <hr>
   
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/polan-nat.png" width="40" height="40" class="rounded-circle me-2">
            <strong><!-- Nome do usuario --></strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li>
                <a href="#" class="dropdown-item">Perfil</a>
            </li>
            <li>
                <a href="#" class="dropdown-item">Sair</a>
            </li>
        </ul>
    </div>
</div>