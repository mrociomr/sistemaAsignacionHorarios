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
                        <input class="form-control" name="area" value="{{old('area')}}">
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
                        <input class="form-control" name="ciclo" value="{{old('ciclo')}}" >
                      @error('ciclo')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                      </div>
                      <div class="col">
                        <label>Tipo: </label>
                        <input class="form-control"  name="tipo" value="{{old('tipo')}}" >
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
