@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')

    <div class="col-12">
        <div class="container contenedor">
        <h5>Cursos</h5>

        @if(Session::has('destroy'))
            <div id="mensaje" class="alert alert-danger">
                <p>{{Session::get('destroy')}} </p>
            </div>

        @endif

        <!--BOTÓN AGREGAR CURSO -->   
        <a class="btn btn-light ml-auto" href="{{ url('cursos/create') }}">
            <span class="fa-solid fa-plus"></span> Agregar
        </a>
        
        <br>
        <!------------TABLA CURSOS-------------->
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr class="table-dark">
                    <th scope="col"><small>N°</small></th>
                    <th scope="col"><small>Área Curricular</small></th>
                    <th scope="col"><small>Código</small></th>
                    <th scope="col"><small>Asignatura</small></th>
                    <th scope="col"><small>Ciclo</small></th>
                    <th scope="col"><small>Tipo</small></th>
                    <th scope="col"><small>HP</small></th>
                    <th scope="col"><small>HT</small></th>
                    <th scope="col"><small>Hotas Totales</small></th>
                    <th scope="col"><small>Opciones</small></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                    <tr>
                        <th scope="row"><small>{{ $curso->id }}</small></th>
                        <td><small>{{ $curso->codigoC }}</small></td>
                        <td><small>{{ $curso->areaC }}</small></td>
                        <td><small>{{ $curso->nombre }}</small></td>
                        <td><small>{{ $curso->cicloC }}</small></td>
                        <td><small>{{ $curso->tipoC }}</small></td>
                        <td><small>{{ $curso->horasP }}</small></td>
                        <td><small>{{ $curso->horasT }}</small></td>
                        <td><small>{{ $curso->horasTotales }}</small></td>
                        <td>
                            <!----OPCIÓN EDITAR---->

                            <a class="btn btn-light btn-sm" href="{{ url('/cursos/' . $curso->id . '/edit') }}"
                                role="button"><span class="fa-solid fa-pen-to-square" ></span></a>

                            <button type="submit" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{$curso->id}}">
                                <span class="fa-solid fa-trash"></span>    
                            </button>

                           
                            <form action="{{ url('/cursos/'. $curso->id) }}" method="POST">
                                @csrf 
                                {{ method_field('DELETE') }}

                               <!-- <button type="submit" class="btn btn-danger data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-whatever="@mdo"">Borrar</button>  
                               
                               <input class="btn btn-danger data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{$curso->id}}" type="submit"
                                    onclick="return confirm('¿Estás seguro de borrar el registro?')" value="Borrar"> -->
                            </form> 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
<!------MODAL DE CONFIRMACIÓN-------------->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>¿Estas seguro de eliminar el curso?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <form id="formDelete" action="{{route('cursos.destroy', 1)}}" data-action="{{route('cursos.destroy', 1)}}" method="POST">
            @csrf @method('DELETE')
            <button type="submit" class="btn btn-danger ">Eliminar</button>
        </form>
        
      </div>
    </div>
   </div>
</div>
</div>

<!--- MODAL CONFIRMACION JS -->
<script>
            
        const deleteModal = document.getElementById('deleteModal')
        deleteModal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const recipient = button.getAttribute('data-bs-id')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        action = $('#formDelete').attr('data-action').slice(0,-1);

        action += recipient;

        $('#formDelete').attr('action', action);

        console.log(action);
        // Update the modal's content.
        const modalTitle = deleteModal.querySelector('.modal-title')

        modalTitle.textContent = `Se eliminará el curso: ${recipient}`
        
        })

        setTimeout(function () {
            $('#mensaje').fadeOut(1000);
        }, 1000);
</script>




    <!--
        <a href="{{ route('cursos.create') }}">Agregar curso</a>
        <ul>
            @foreach ($cursos as $curso)
    <li>{{ $curso->nombre }}</li>
    @endforeach
        </ul>


        {{ $cursos->links() }} -->

@endsection
