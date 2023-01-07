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
                        <label class="label">DNI: </label>
                        <input class="form-control" name="dni" value="{{old('dni')}}">
                        @error('dni')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                      <div class="col">
                        <label class="label">Grado: </label>
                        <input class="form-control" name="grado" value="{{old('grado')}}">
                        @error('grado')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col">
                        <label class="label">Nombre(s): </label>
                        <input class="form-control" name="nombre" value="{{old('nombre')}}">
                        @error('nombre')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                      <div class="col">
                        <label class="label">Apellidos: </label>
                        <input class="form-control" name="apellidos" value="{{old('apellidos')}}">
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
                          <option value="Investigador">Investigador</option>
                          <option value="Docente">Docente</option>
                        </select>
                        @error('tipoD')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                      <div class="col">
                        <label class="label">Cargo: </label>
                        <input class="form-control" name="cargo" value="{{old('cargo')}}">
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
                          <option value="Principal">Principal</option>
                          <option value="Asociado">Asociado</option>
                          <option value="Auxiliar">Auxiliar</option>
                        </select>
                      @error('categoria')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                      </div>
                      <div class="col">
                        <label class="label">Celular: </label>
                        <input class="form-control" name="celular" value="{{old('celular')}}">
                        @error('celular')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Correo:</label>
                      <input class="form-control" name="correo" value="{{old('correo')}}">
                      @error('correo')
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