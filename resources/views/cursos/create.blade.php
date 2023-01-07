@extends('layouts.plantilla')

@section('title', 'Crear curso')

@section('content')
    <div class="col-12">
    <h5>Agregar curso</h5>
    <a href="{{ route('cursos.index') }}"><span class="fa-solid fa-chevron-left"></span></a>


    <form action="{{ route('cursos.store') }}" method="post" class="form-horizontal from-create" method="POST">

        @csrf
        @include('cursos.form', ['modo' => 'Crear'])

    </form>
    </div>
@endsection
