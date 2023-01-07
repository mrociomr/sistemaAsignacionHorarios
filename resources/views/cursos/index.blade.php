@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')

    @if (Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif



    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <div class="columns">
        <h1>Cursos</h1>
        <!---CAMPO BUSCAR-->
        <br>
        <!--BOTÓN AGREGAR CURSO -->
        <a class="btn btn-success" href="{{ url('cursos/create') }}" role="button">Agregar curso</a>
        <br>
        <br>


        <!------------TABLA CURSOS-------------->
        <table id="example" class="table table-striped table-bordered nowrap dataTable no-footer dtr-inline collapsed" style="width: 100%;" aria-describedby="example_info">
            <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Código</th>
                    <th scope="col">Área Curricular</th>
                    <th scope="col">Asignatura</th>
                    <th scope="col">Ciclo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">HP</th>
                    <th scope="col">HT</th>
                    <th scope="col">Hotas Totales</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                    <tr>
                        <th scope="row">{{ $curso->id }}</th>
                        <td>{{ $curso->codigoC }}</td>
                        <td>{{ $curso->areaC }}</td>
                        <td>{{ $curso->nombre }}</td>
                        <td>{{ $curso->cicloC }}</td>
                        <td>{{ $curso->tipoC }}</td>
                        <td>{{ $curso->horasP }}</td>
                        <td>{{ $curso->horasT }}</td>
                        <td>{{ $curso->horasTotales }}</td>
                        <td>
                            <!----OPCIÓN EDITAR---->
                            <i class="fa-solid fa-pen"></i>
                            <a class="btn btn-success" href="{{ url('/cursos/' . $curso->id . '/edit') }}"
                                role="button">Editar</a>
                            |
                            <form action="{{ url('/cursos/' . $curso->id) }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <i class="fa-solid fa-trash"></i>
                                <input class="btn btn-danger" type="submit"
                                    onclick="return confirm('¿Estás seguro de borrar el registro?')" value="Borrar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        
    </div>






    <!--
        <a href="{{ route('cursos.create') }}">Agregar curso</a>
        <ul>
            @foreach ($cursos as $curso)
    <li>{{ $curso->nombre }}</li>
    @endforeach
        </ul>

        {{ $cursos->links() }} -->
        
@endsection
