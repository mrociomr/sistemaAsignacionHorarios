@extends('layouts.plantilla')

@section('title', 'Docentes')

@section('content')




    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <div class="columns">


        <h3>Docentes</h3>
        <!---CAMPO BUSCAR-->
        <br>

        <!--BOTÓN AGREGAR DOCENTE -->
        <a class="btn btn-success" href="{{ url('docentes/create') }}" role="button">Añadir nuevo <i class="fa-solid fa-plus"></i></a>
        <br>
        <br>


        <!------------TABLA DOCENTES-------------->
        <div class="table-responsive">

        <table id="example" class="table table-striped table-bordered nowrap dataTable no-footer dtr-inline collapsed" style="width: 100%;" aria-describedby="example_info">

            <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Grado</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($docentes as $docente)
                    <tr>
                        <th scope="row">{{ $docente->id }}</th>
                        <td>{{ $docente->dniD }}</td>
                        <td>{{ $docente->gradoD }}</td>
                        <td>{{ $docente->nombresD }}</td>
                        <td>{{ $docente->apellidosD }}</td>
                        <td>{{ $docente->categoriaD }}</td>
                        <td>{{ $docente->tipoD }}</td>
                        <td>{{ $docente->cargoD }}</td>
                        <td>{{ $docente->celularD }}</td>
                        <td>{{ $docente->correoD}}</td>
                        <td>
                            <!----OPCIÓN EDITAR---->
                            <a  class="btn btn-outline-dark btn-sm" href="{{ url('/docentes/' . $docente->id . '/edit') }}"
                                role="button"><span class="fa-solid fa-pen-to-square" ></span></a>


                            <form action="{{route('docentes.destroy', $docente)}}" method="post" style="display: inline" class="eliminar"> @csrf @method('delete') <button type="submit" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-trash"></i> </button></form>
                             

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>

</div>

        
@endsection


@section('js')
@if(session('eliminar') == 'delete')
<script>
 Swal.fire(
          '¡Eliminado!',
          'El registro ha sido eliminado.',
          'success'
        )
</script>
@endif
<script>

$('.eliminar').submit(function(e){
    e.preventDefault();
    Swal.fire({
      title: '¿Estas seguro?',
      text: "No podrás revertir esto!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: '¡Si, eliminarlo!',
      cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.isConfirmed) {
        this.submit();
      }
    })
  });
</script>

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

@endsection