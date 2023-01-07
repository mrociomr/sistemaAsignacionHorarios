@extends('layouts.plantilla')

@section('title', 'Crear docente')

@section('content')
    <div class="col-12">
    <h5>Agregar docente</h5>
    <a href="{{ route('docentes.index') }}"><span class="fa-solid fa-chevron-left"></span></a>


    <form action="{{ route('docentes.store') }}" method="post" class="form-horizontal from-create">

        @csrf
        @include('docentes.form', ['modo' => 'Crear'])

    </form>
    </div>
@endsection
