@extends('layouts/main')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-12 mt-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Início</a></li>
            <li class="breadcrumb-item active" aria-current="page">Medidas Cadastradas</li>
          </ol>
        </nav>
      </div>
      <div class="col-12">
        <div class="card shadow-sm">
          <div class="card-header bg-primary text-white">
            <h1>Medidas Cadastradas</h1>
          </div>
          <div class="card-body">
            <div class="container px-3 my-3">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Data da medição</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($measurements as $measurement)
                  <tr>
                    <th scope="row">{{$measurement->id}}</th>
                    <td>{{$measurement->date}}</td>
                    <td>
                      <button class="btn btn-secondary">Editar</button>
                      
                      <button  type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" data-teste="{{$measurement->id}}">
                       Excluir
                      </button>

                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
          </div>

          </div>
        </div> <!-- fim do card -->
      </div> <!-- fim da coluna -->
    </div> <!-- fim da row-->
  </div> <!-- fim da container -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atenção!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Deseja Realmente excluir essa medida?
        <p id="paragrafo" ></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        
        <form action="" method="" id="">
          <button type="button" class="btn btn-primary">Sim</button>

        </form>
      </div>
    </div>
  </div>
</div>

<script>
let confirmationModal = document.getElementById('exampleModal')

confirmationModal.addEventListener('show.bs.modal' , function (event) {

  let botao = event.relatedTarget
  let paragrafo = document.getElementById('paragrafo')

  paragrafo.innerHTML = botao.getAttribute('data-teste')
});


</script>


@endsection
