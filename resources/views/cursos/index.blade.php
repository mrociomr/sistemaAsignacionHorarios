@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')

    @if (Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif



    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <div class="columns">


        <h1>Cursos</h1>
        <!---CAMPO BUSCAR-->
        <br>

        <!--BOTÓN AGREGAR CURSO -->
        <a class="btn btn-success" href="{{ url('cursos/create') }}" role="button">Agregar curso</a>
        <br>
        <br>


        <!------------TABLA CURSOS-------------->
        <table id="example" class="table table-striped table-bordered nowrap dataTable no-footer dtr-inline collapsed" style="width: 100%;" aria-describedby="example_info">
            <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Código</th>
                    <th scope="col">Área Curricular</th>
                    <th scope="col">Asignatura</th>
                    <th scope="col">Ciclo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">HP</th>
                    <th scope="col">HT</th>
                    <th scope="col">Hotas Totales</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                    <tr>
                        <th scope="row">{{ $curso->id }}</th>
                        <td>{{ $curso->codigoC }}</td>
                        <td>{{ $curso->areaC }}</td>
                        <td>{{ $curso->nombre }}</td>
                        <td>{{ $curso->cicloC }}</td>
                        <td>{{ $curso->tipoC }}</td>
                        <td>{{ $curso->horasP }}</td>
                        <td>{{ $curso->horasT }}</td>
                        <td>{{ $curso->horasTotales }}</td>
                        <td>
                            <!----OPCIÓN EDITAR---->

                            <a class="btn btn-light btn-sm" href="{{ url('/cursos/' . $curso->id . '/edit') }}"
                                role="button"><span class="fa-solid fa-pen-to-square" ></span></a>

                            <button type="submit" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{$curso->id}}">
                                <span class="fa-solid fa-trash"></span>    
                            </button>

                            <form action="{{ url('/cursos/' . $curso->id) }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                             
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
