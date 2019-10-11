
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tipo Estudiante</button> -->

<div class="modal fade TipoEstudiante bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header" style="background-color: #007bff;">
                <h5 class="card-title text-white">Tipos de Estudiantes</h5>
            </div>
                <form class="needs-validation" action="{{route('tipo_estudiante.update',1)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Descripción</span>
                            </div>
                            <input type="hidden" id="idTipoEstudiante" name="id">   
                            <input id="descripcionTipoEstudiante" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="descripcion" required>
                             &nbsp;
                            <input type="submit" class="btn btn-outline-info" value="Guardar">
                        </div>    
                    </div>
                </form>
        </div>
    </div>

</div>
      