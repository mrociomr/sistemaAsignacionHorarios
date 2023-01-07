@extends('layouts.plantilla')

@section('title', 'Editar docente')

@section('content')
    <h1>Editar docente</h1>
    <a href="{{ route('docentes.index') }}">Volver</a>
    <br>
    <form action="{{route('docentes.update', $docente)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <form class="forms-sample">
            <div class="form-group row">
              <div class="col">
                <label class="label">DNI: </label>
                <input class="form-control" name="dni" value="{{old('dni', $docente->dniD)}}">
                @error('dni')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
              <div class="col">
                <label class="label">Grado: </label>
                <input class="form-control" name="grado" value="{{old('grado', $docente->gradoD)}}">
                @error('grado')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
            </div>
            <div class="form-group">
              <div class="col">
                <label class="label">Nombre(s): </label>
                <input class="form-control" name="nombre" value="{{old('nombre', $docente->nombresD)}}">
                @error('nombre')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
              <div class="col">
                <label class="label">Apellidos: </label>
                <input class="form-control" name="apellidos" value="{{old('apellidos', $docente->apellidosD)}}">
                @error('apellidos')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <div class="col">
                <label>Tipo de docente:</label>
                {{-- <input class="form-control" name="tipoD" value="{{old('tipoD')}}"> --}}
                <select class="form-select" name="tipoD" value="{{old('tipoD')}}" aria-label="Example select with button addon">
                  <option selected>Seleccionar...</option>
                  <option value="Investigador"{{ old('tipoD', $docente->tipoD) == 'Investigador' ? 'selected' : '' }}>Investigador</option>
                  <option value="Docente"{{ old('tipoD', $docente->tipoD) == 'Docente' ? 'selected' : '' }}>Docente</option>
                </select>
                @error('tipoD')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
              <div class="col">
                <label class="label">Cargo: </label>
                <input class="form-control" name="cargo" value="{{old('cargo', $docente->cargoD)}}">
                @error('cargo')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <div class="col">
                <label>Categoría:</label>
                {{-- <input class="form-control" name="categoria" value="{{old('categoria')}}" > --}}
                <select class="form-select" name="categoria" value="{{old('categoria')}}"  aria-label="Example select with button addon">
                  <option selected>Seleccionar...</option>
                  <option value="principal"{{ old('categoriaD', $docente->categoriaD) == 'Principal' ? 'selected' : '' }}>Principal</option>
                  <option value="asociado"{{ old('categoriaD', $docente->categoriaD) == 'Asociado' ? 'selected' : '' }}>Asociado</option>
                  <option value="auxiliar"{{ old('categoriaD', $docente->categoriaD) == 'Auxiliar' ? 'selected' : '' }}>Auxiliar</option>
                </select>
              @error('categoria')
              <small class="text-danger">{{$message}}</small>
              @enderror
              </div>
              <div class="col">
                <label class="label">Celular: </label>
                <input class="form-control" name="celular" value="{{old('celular', $docente->celularD)}}">
                @error('celular')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
            </div>
            <div class="form-group">
              <label>Correo:</label>
              <input class="form-control" name="correo" value="{{old('correo',$docente->correoD)}}">
              @error('correo')
              <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-success m-3 col-md-3">Enviar</button>
    </form>
@endsection
