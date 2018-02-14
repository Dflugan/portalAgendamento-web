@extends('layout.system')

@section('titulo', 'Conjunto')

@section('corpo')
<div class="container">
  <h3 class="center">Conjuntos/ torres</h3>
  <div class="row">
    <div class="col s12 m12 l12">
      @foreach($registros as $registro)
      <div class="card col s12 m4 l4">
        <div class="card-image waves-effect waves-block waves-light">
          <img width="50px" class="activator" src="/{{$registro->imagem}}">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4 center">{{$registro->titulo}}<i class="material-icons right">more_vert</i></span>
          <!-- <p><a href="#"><i class="material-icons"></i> This is a link</a></p> -->
          <div class="center">
          <a href="" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar">
            <i class="material-icons" style="font-size:2rem">create</i></a>
          <a href=""class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Visitantes">
            <i class="large material-icons" style="font-size:2rem">view_agenda</i></a>
          <a href=""class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Deletar">
            <i class="large material-icons" style="font-size:2rem">delete_forever</i></a>
          </div>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">{{$registro->tipo}}<i class="material-icons right">close</i></span>
          <p>{{$registro->descricao}}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>

</div>


@endsection
