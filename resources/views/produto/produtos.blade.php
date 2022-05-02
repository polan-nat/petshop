@include('produto.sidebar')

<!-- Criar uma table de pagina inicial com imagens ja utilizadas. -->
<table class="table table-borderless" style="position: fixed; top: 170px; left: 350px">
    <tbody>
        <tr class="d-flex">
            <td class="col-4">
                <div class="card h-70 bg-dark text-white">
                  <img src="{{ asset('img/brinq.jpg')}}" class="img-thumbnail" width="150px">
                  <div class="card-body">
                    <h5 class="card-title">Brinquedos</h5>
                    <p class="card-text">Veja nossas promoções.</p>
                  </div>
                </div>
              </div>
            </td>
            <td class="col-4">
                <div class="card h-70 bg-dark text-white">
                  <img src="{{ asset('img/tapet.jpg')}}" class="img-thumbnail" width="150px">
                  <div class="card-body">
                    <h5 class="card-title">Higiene</h5>
                    <p class="card-text">Veja nossas promoções.</p>
                  </div>
                </div>
              </div>
            </td> 
        </tr>
        <tr class="d-flex">
            <td class="col-4">
                <div class="card h-70 bg-dark text-white">
                  <img src="{{ asset('img/rac.jpg')}}" class="img-thumbnail" width="150px">
                  <div class="card-body">
                    <h5 class="card-title">Ração</h5>
                    <p class="card-text">Veja nossas promoções.</p>
                  </div>
                </div>
              </div>
            </td>
            <td class="col-4">
                <div class="card h-70 bg-dark text-white">
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
</table>