<!--<h1>{{ $modo }}</h1>-->

<div class="card-principal">
    <form class="box">
        <div class="field">
            <label class="label">Código</label>
            <div class="control">
                <input class="input" type="text" name="codigoC" value="{{ isset($curso->codigoC) ? $curso->codigoC : '' }} "
                    id="codigoC">
            </div>
            <div class="field">
                <label class="label">Área Curricular</label>
                <div class="control">
                    <div class="select is-normal">
                        <select name="areaC" id="areaC">
                            <option value="{{ isset($curso->areaC) ? $curso->areaC : '' }}">Seleccionar opción</option>
                            @foreach ($areaC as $area)
                                <option value="{{ $area['id'] }}">{{ $area['areaC'] }}</option>
                                <!--este fue el cambio-->
                            @endforeach
                    </div>
                    <input class="input" type="text" name="areaC"
                        value="{{ isset($curso->areaC) ? $curso->areaC : '' }}" id="areaC">
                </div>
            </div>
            <div class="field">
                <label class="label">Asignatura</label>
                <div class="control">
                    <input class="input" type="text" name="nombre"
                        value="{{ isset($curso->nombre) ? $curso->nombre : '' }}" id="nombre">
                </div>
            </div>
            <div class="field">
                <label class="label">Ciclo</label>
                <div class="control">
                    <input class="input" type="text" name="cicloC"
                        value="{{ isset($curso->cicloC) ? $curso->cicloC : '' }}" id="ciclo">
                </div>
            </div>
            <div class="field">
                <label class="label">Tipo</label>
                <div class="control">
                    <div class="select is-normal">
                        <select>
                            <option selected>Seleccionar opción</option>
                            <option>Obligatorio</option>
                            <option>Electivo</option>
                        </select>
                    </div>
                    <input class="input" type="text" name="tipoC"
                        value="{{ isset($curso->tipoC) ? $curso->tipoC : '' }}" id="tipo">
                </div>
            </div>
            <div class="field">
                <label class="label">Horas Teóricas</label>
                <div class="control">
                    <input class="input" type="text" name="horasT"
                        value="{{ isset($curso->horasT) ? $curso->horasT : '' }} " id="ht">
                </div>
            </div>
            <div class="field">
                <label class="label">Horas Prácticas</label>
                <div class="control">
                    <input class="input" type="text" name="horasP"
                        value="{{ isset($curso->horasP) ? $curso->horasP : '' }} " id="hp">
                </div>
            </div>
            <div class="field">
                <label class="label">Horas Totales</label>
                <div class="control">
                    <input class="input" type="text" name="horasTotales"
                        value="{{ isset($curso->horasTotales) ? $curso->horasTotales : '' }} " id="horasTotales">
                </div>
            </div>

            <input type="submit" value=" {{ $modo }} " class="button is-success">
            <!-- <button class="button is-primary">
    
  </button> -->
    </form>

</div>
