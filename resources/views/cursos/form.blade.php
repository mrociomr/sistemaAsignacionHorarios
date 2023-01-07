<!--<h1>{{ $modo }}</h1>-->
<!---- FORM---->

<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-lg-12 grid-margin stretch-card">
              <!--form mask starts-->

                <div class="card-body">
                  <form class="forms-sample">
                    <div class="form-group row">
                      <div class="col">
                        <label class="label">Código: </label>
                        <input class="form-control" name="codigo" value="{{old('codigo')}}">
                        @error('codigo')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                      <div class="col">
                        <label>Área Curricular:</label>
                        {{-- <input class="form-control" name="area" value="{{old('area')}}"> --}}
                        <select class="form-select" name="area" value="{{old('area')}}" aria-label="Example select with button addon">
                          <option value="">Seleccionar...</option>
                          <option value="General">General</option>
                          <option value="Especifico">Especifico</option>
                          <option value="Especialidad">Especialidad</option>
                        </select>
                        @error('area')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Asignatura:</label>
                      <input class="form-control" name="asignatura" value="{{old('asignatura')}}">
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
                          <option value="I">I Semestre</option>
                          <option value="II">II Semestre</option>
                          <option value="III">III Semestre</option>
                          <option value="IV">IV Semestre</option>
                          <option value="V">V Semestre</option>
                          <option value="VI">VI Semestre</option>
                          <option value="VII">VII Semestre</option>
                          <option value="VIII">VIII Semestre</option>
                          <option value="IX">IX Semestre</option>
                          <option value="X">X Semestre</option>
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
                          <option value="Obligatorio">Obligatorio</option>
                          <option value="Electivo">Electivo</option>
                        </select>
                        @error('tipo')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col">
                        <label>Horas Teóricas:</label>

                        <input class="form-control" name="horasT" value="{{old('horasT')}}" type="number">
                        @error('horasT')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                      <div class="col">
                        <label>Horas Prácticas: </label>

                        <input class="form-control" name="horasP" value="{{old('horasP')}}" type="number">
                        @error('horasP')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Horas Totales:</label>

                      <input class="form-control" name="horasTotales" value="{{old('horasTotales')}}" type="number">
                        @error('horasTotales')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <br>

                    <input type="submit" value=" {{ $modo }} " class="btn btn-success">

                  </form>

                </div>

              <!--form mask ends-->
            </div>

            </div>
              </div>
              <!--form mask ends-->
            </div>





<!---- FIN -->

    </form>

</div>
