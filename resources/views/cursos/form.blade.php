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
                        <input class="form-control" data-inputmask="'alias': 'codigo'" type="text" name="codigoC" value="{{ isset($curso->codigoC) ? $curso->codigoC : '' }} "
                    id="codigoC">
                      </div>
                      <div class="col">
                        <label>Área Curricular:</label>
                        <input class="form-control" data-inputmask="'alias': 'areaC'" type="text" name="areaC"
                        value="{{ isset($curso->areaC) ? $curso->areaC : '' }}" id="areaC">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Asignatura:</label>
                      <input class="form-control" data-inputmask="'alias': 'nombre'" type="text" name="nombre"
                        value="{{ isset($curso->nombre) ? $curso->nombre : '' }}" id="nombre">
                    </div>
                    <div class="form-group row">
                      <div class="col">
                        <label>Ciclo:</label>
                        <input class="form-control" data-inputmask="'alias': 'email'" type="text" name="cicloC"
                        value="{{ isset($curso->cicloC) ? $curso->cicloC : '' }}" id="ciclo">
                      </div>
                      <div class="col">
                        <label>Tipo: </label>
                        <input class="form-control" data-inputmask="'alias': 'ip'"  type="text" name="tipoC"
                        value="{{ isset($curso->tipoC) ? $curso->tipoC : '' }}" id="tipo" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col">
                        <label>Horas Teóricas:</label>

                        <input class="form-control" data-inputmask="'alias': 'email'" type="number" name="horasT"
                        value="{{ isset($curso->horasT) ? $curso->horasT : '' }} " id="ht">
                      </div>
                      <div class="col">
                        <label>Horas Prácticas: </label>

                        <input class="form-control" data-inputmask="'alias': 'ip'" type="number" name="horasP"
                        value="{{ isset($curso->horasP) ? $curso->horasP : '' }} " id="hp">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Horas Totales:</label>

                      <input class="form-control" data-inputmask="'alias': 'currency'" style="text-align: left;" type="number" name="horasTotales"
                        value="{{ isset($curso->horasTotales) ? $curso->horasTotales : '' }} " id="horasTotales">
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
