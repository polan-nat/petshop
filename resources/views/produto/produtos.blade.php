@include('produto.sidebar')

<!-- Criar uma table de pagina inicial com imagens ja utilizadas. -->
<div class="position-relative">
    <div class="position-absolute bottom-0 start-0">
<table class="table">
    <tbody>
        <tr>
            <td class="col-3">
                <div class="card h-70">
                  <img src="{{ asset('img/brinq.jpg')}}" class="img-thumbnail" width="150px">
                  <div class="card-body">
                    <h5 class="card-title">Brinquedos</h5>
                    <p class="card-text">Veja nossas promoções.</p>
                  </div>
                </div>
              </div>
            </td>
            <td class="col-3">
                <div class="card h-70">
                  <img src="{{ asset('img/tapet.jpg')}}" class="img-thumbnail" width="150px">
                  <div class="card-body">
                    <h5 class="card-title">Higiene</h5>
                    <p class="card-text">Veja nossas promoções.</p>
                  </div>
                </div>
              </div>
            </td> 
        </tr>
        <tr>
            <td class="col-3">
                <div class="card h-70">
                  <img src="{{ asset('img/rac.jpg')}}" class="img-thumbnail" width="150px">
                  <div class="card-body">
                    <h5 class="card-title">Ração</h5>
                    <p class="card-text">Veja nossas promoções.</p>
                  </div>
                </div>
              </div>
            </td>
            <td class="col-3">
                <div class="card h-70">
                  <img src="{{ asset('img/remedio.jpg')}}" class="img-thumbnail" width="150px">
                  <div class="card-body">
                    <h5 class="card-title">Remédios</h5>
                    <p class="card-text">Veja nossas promoções.</p>
                  </div>
                </div>
              </div>
            </td>
        </tr>
    </tbody>
</table></div></div>