@extends('layouts.plantilla')

@section('title', 'Crear curso')

@section('content')
    <h1>Agregar curso</h1>
    <a href="{{ route('cursos.index') }}">Volver</a>


    <form action="{{ route('cursos.store') }}" method="post" class="form-horizontal from-create" method="POST">

        @csrf
        @include('cursos.form', ['modo' => 'Crear']);

    </form>

@endsection
