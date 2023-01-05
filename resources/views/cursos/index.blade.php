@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')

@if (Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif

<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<div class="columns">
  <div class="column is-narrow">
    <!-----SIDEBAR--->
    <div class="box sidebar-main" style="width: 150px;">
      <aside class="menu">
        <ul class="menu-list">
          <li><i class="fa-solid fa-house "></i><a class="is-size-5">Inicio</a></li>
          <br>
          <li><i class="fa-solid fa-chalkboard-user"></i><a class="is-size-5">Docentes</a></li>
          <br>
          <li><i class="fa-solid fa-layer-group"></i><a class="is-size-5">Cursos</a></li>
          <br>
          <li><i class="fa-solid fa-calendar-days"></i><a class="is-size-5">Horas</a></li>
          <li><i class="fa-solid fa-code"></i><a class="is-size-5">Aulas y laboratorios</a></li>
          <li><i class="fa-solid fa-film"></i><a class="is-size-5">Horario</a></li>
          <li><i class="fa-solid fa-file"></i><a class="is-size-5">Reportes</a></li>
        </ul>
      </aside>
    </div>
  </div>
  
  <div class="column-principal">
    <div class="box">
      <div class="card-content">
        <div class="content">
            <h1>Cursos</h1>
          <!---CAMPO BUSCAR-->
            <div class="panel-block">
              <p class="control has-icons-left">
              <input class="input is-info" type="text" placeholder="Buscar">
                <span class="icon is-right">
                  <i class="fas fa-search" aria-hidden="true"></i>
                </span>
              </p>
            </div>
<!--BOTÓN AGREGAR CURSO -->  
    <a href="{{url('cursos/create')}}" class="button is-primary">Agregar curso</a>
    <br>
  <div class="modal">
  <div class="modal-background"></div>
  <div class="modal-content">
    <!-- Any other Bulma elements you want -->
  </div>
  <button class="modal-close is-large" aria-label="close"></button>
</div>

<!------------TABLA CURSOS-------------->
  <table class="table">
    <thead>
      <tr>
        <th>N°</th>
        <th>Código</th>
        <th>Área Curricular</th>
        <th>Asignatura</th>
        <th>Ciclo</th>
        <th>Tipo</th>
        <th>HP</th>
        <th>HT</th>
        <th>Hotas Totales</th>
        <th>Opciones</th>
      </tr>
      </thead>
      <tbody>
        @foreach ($cursos as $curso)
        <tr>
          <td>{{$curso->id}}</td>
          <td>{{$curso->codigoC}}</td>
          <td>{{$curso->areaC}}</td>
          <td>{{$curso->nombre}}</td>
          <td>{{$curso->cicloC}}</td>
          <td>{{$curso->tipoC}}</td>
          <td>{{$curso->horasP}}</td>
          <td>{{$curso->horasT}}</td>
          <td>{{$curso->horasTotales}}</td>
          <td>
            <!----OPCIÓN EDITAR---->
            <i class="fa-solid fa-pen"></i>
            <a href="{{url('/cursos/'.$curso->id.'/edit')}}">Editar</a>    
                | 
              <form action="{{url('/cursos/'.$curso->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <i class="fa-solid fa-trash"></i>
                <input type="submit" onclick="return confirm('¿Estás seguro de borrar el registro?')"
                     value="Borrar">
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
  </div>
</div>
</div>

    
    
    <!--
    <a href="{{route('cursos.create')}}">Agregar curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>{{$curso->nombre}}</li>
        @endforeach
    </ul>

    {{ $cursos->links()}} -->
@endsection

