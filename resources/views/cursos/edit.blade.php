@extends('layouts.plantilla')

@section('title', 'Editar curso')

@section('content')
    <h5 class="text-center">Editar curso</h5>
    <a href="{{ route('cursos.index') }}"><span class="fa-solid fa-chevron-left"></span></a>
    <br>
    <br>
    <form action="{{route('cursos.update', $curso)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <form class="forms-sample">
            <div class="form-group row">
              <div class="col">
                <label class="label">Código: </label>
                <input class="form-control" name="codigo" value="{{old('codigo', $curso->codigoC)}}">
                @error('codigo')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
              <div class="col">
                <label>Área Curricular:</label>
                {{-- <input class="form-control" name="area" value="{{old('area')}}"> --}}
                <select class="form-select" name="area" value="{{old('area')}}" aria-label="Example select with button addon">
                  <option  value="">Seleccionar...</option>
                  <option value="General" {{ old('area', $curso->areaC) == 'General' ? 'selected' : '' }}>General</option>
                  <option value="Especifico" {{ old('area', $curso->areaC) == 'Especifico' ? 'selected' : '' }}>Especifico</option>
                  <option value="Especialidad" {{ old('area', $curso->areaC) == 'Especialidad' ? 'selected' : '' }}>Especialidad</option>
                </select>
                @error('area')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
            </div>
            <div class="form-group">
              <label>Asignatura:</label>
              <input class="form-control" name="asignatura" value="{{old('asignatura', $curso->nombre)}}">
              @error('asignatura')
              <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="form-group row">
              <div class="col">
                <label>Ciclo:</label>
                {{-- <input class="form-control" name="ciclo" value="{{old('ciclo')}}" > --}}
                <select class="form-select" name="ciclo" value="{{old('ciclo')}}"  aria-label="Example select with button addon">
                  <option  value="">Seleccionar...</option>
                  <option value="I" {{ old('ciclo', $curso->cicloC) == 'I' ? 'selected' : '' }}>I Semestre</option>
                  <option value="II" {{ old('ciclo', $curso->cicloC) == 'II' ? 'selected' : '' }}>II Semestre</option>
                  <option value="III" {{ old('ciclo', $curso->cicloC) == 'III' ? 'selected' : '' }}>III Semestre</option>
                  <option value="IV" {{ old('ciclo', $curso->cicloC) == 'IV' ? 'selected' : '' }}>IV Semestre</option>
                  <option value="V" {{ old('ciclo', $curso->cicloC) == 'V' ? 'selected' : '' }}>V Semestre</option>
                  <option value="VI" {{ old('ciclo', $curso->cicloC) == 'VI' ? 'selected' : '' }}>VI Semestre</option>
                  <option value="VII" {{ old('ciclo', $curso->cicloC) == 'VII' ? 'selected' : '' }}>VII Semestre</option>
                  <option value="VIII" {{ old('ciclo', $curso->cicloC) == 'VIII' ? 'selected' : '' }}>VIII Semestre</option>
                  <option value="IX" {{ old('ciclo', $curso->cicloC) == 'IX' ? 'selected' : '' }}>IX Semestre</option>
                  <option value="X" {{ old('ciclo', $curso->cicloC) == 'X' ? 'selected' : '' }}>X Semestre</option>
                </select>
              @error('ciclo')
              <small class="text-danger">{{$message}}</small>
              @enderror
              </div>
              <div class="col">
                <label>Tipo: </label>
                {{-- <input class="form-control"  name="tipo" value="{{old('tipo')}}" > --}}
                <select class="form-select" name="tipo" value="{{old('tipo')}}" aria-label="Example select with button addon">
                  <option  value="">Seleccionar...</option>
                  <option value="Obligatorio" {{ old('tipo', $curso->tipoC) == 'Obligatorio' ? 'selected' : '' }}>Obligatorio</option>
                  <option value="Electivo" {{ old('tipo', $curso->tipoC) == 'Electivo' ? 'selected' : '' }}>Electivo</option>
                </select>
                @error('tipo')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <div class="col">
                <label>Horas Teóricas:</label>

                <input class="form-control" name="horasT" value="{{old('horasT', $curso->horasT)}}" type="number">
                @error('horasT')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
              <div class="col">
                <label>Horas Prácticas: </label>

                <input class="form-control" name="horasP" value="{{old('horasP', $curso->horasP)}}" type="number">
                @error('horasP')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
            </div>
            <div class="form-group">
              <label>Horas Totales:</label>

              <input class="form-control" name="horasTotales" value="{{old('horasTotales', $curso->horasTotales)}}" type="number">
                @error('horasTotales')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-success">Enviar</button>
    </form>
@endsection
