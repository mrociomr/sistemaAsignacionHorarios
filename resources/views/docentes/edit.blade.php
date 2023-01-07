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
                <input class="form-control" name="dni" value="{{old('dni', $docente->dni)}}">
                @error('dni')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
              <div class="col">
                <label class="label">Grado: </label>
                <input class="form-control" name="grado" value="{{old('grado', $docente->grado)}}">
                @error('grado')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
            </div>
            <div class="form-group">
              <div class="col">
                <label class="label">Nombre (s): </label>
                <input class="form-control" name="nombre" value="{{old('nombre', $docente->nombre)}}">
                @error('nombre')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
              <div class="col">
                <label class="label">Apellidos: </label>
                <input class="form-control" name="apellidos" value="{{old('apellidos', $docente->apellidos)}}">
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
                  <option value="Investigador"{{ old('tipoD', $docente->docent) == 'Investigador' ? 'selected' : '' }}>Investigador</option>
                  <option value="Docente"{{ old('tipoD', $docente->docent) == 'Docente' ? 'selected' : '' }}>Docente</option>
                </select>
                @error('tipoD')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
              <div class="col">
                <label class="label">Cargo: </label>
                <input class="form-control" name="cargo" value="{{old('cargo', $docente->cargo)}}">
                @error('cargo')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <div class="col">
                <label>Categoría:</label>
                {{-- <input class="form-control" name="tipoD" value="{{old('tipoD')}}" > --}}
                <select class="form-select" name="tipoD" value="{{old('tipoD')}}"  aria-label="Example select with button addon">
                  <option selected>Seleccionar...</option>
                  <option value="principal"{{ old('tipoD', $docente->docent) == 'Principal' ? 'selected' : '' }}>Principal</option>
                  <option value="asociado"{{ old('tipoD', $docente->docent) == 'Asociado' ? 'selected' : '' }}>Asociado</option>
                  <option value="auxiliar"{{ old('tipoD', $docente->docent) == 'Auxiliar' ? 'selected' : '' }}>Auxiliar</option>
                </select>
              @error('categoria')
              <small class="text-danger">{{$message}}</small>
              @enderror
              </div>
              <div class="col">
                <label class="label">Celular: </label>
                <input class="form-control" name="celular" value="{{old('celular', $docente->celular)}}">
                @error('celular')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
            </div>
            <div class="form-group">
              <label>Correo:</label>
              <input class="form-control" name="correo" value="{{old('correo',$docente->correo)}}">
              @error('correo')
              <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-success m-3 col-md-3">Enviar</button>
    </form>
@endsection
