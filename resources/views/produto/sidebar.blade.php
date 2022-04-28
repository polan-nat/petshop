@include('layout')

<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height: 716px">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">Menu</span>
    </a>
    <hr>

    <h5>Departamentos</h5>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ url('/produtos/toy') }}" class="nav-link text-white">
                <img src="{{ asset('img/brinquedos.png')}}" width="50" height="50">
                Brinquedos
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/produtos/higiene') }}" class="nav-link text-white" >
                <img src="{{ asset('img/banho.png')}}" width="50" height="50">
                Higiene
            </a>
        </li>
        <li class="nav-item">
           <a href="{{ url('/produtos/racao') }}" class="nav-link text-white">
                <img src="{{ asset('img/racao.png')}}" width="50" height="50">
                Ração
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/produtos/remedios') }}" class="nav-link text-white">
                <img src="{{ asset('img/medicamentos.png')}}" width="50" height="50">
                Remédios
            </a>
        </li>
    </ul>

    @auth
    <hr>
    <div class="d-flex justify-content-between">
        <a href="{{ url('/usuario')}}" class="text-white text-decoration-none" data-toggle="tooltip" data-placement="right" title="Abrir perfil">
            <i class="bi bi-person-circle fs-2"></i>
            <strong><!-- Nome do usuario --></strong>
        </a>
        <a href="{{ url('/sair') }}" class="text-white text-decoration-none">
            <i class="bi bi-box-arrow-right fs-3"></i>
        </a>
    </div>
    @endauth
</div>