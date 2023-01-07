@extends('layouts.plantilla')

@section('title', 'Editar curso')

@section('content')
    <h1>Editar curso</h1>
    <a href="{{ route('cursos.index') }}">Volver</a>
    <br>
    <form action="{{ url('/cursos/' . $curso->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}

        @include('cursos.form', ['modo' => 'Editar']);
    </form>
@endsection
