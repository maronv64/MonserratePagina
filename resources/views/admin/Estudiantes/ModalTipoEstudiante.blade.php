
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Modificar</button> -->

<div class="modal fade TipoE bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">

    <div class="modal-content">
        <div class="modal-header" style="background-color: #007bff;">
            <h5 class="card-title text-white">Tipos de Estudiantes</h5>
        </div>
        <form action="{{url('/relacion_tipoe_est')}}" method="POST">
            @csrf
            @method('POST')
        <div class="modal-body">
        

            <input type="hidden" id="idEstudiante_" name="idEstudiante"> 
            <input type="hidden" id="listaTiposId" name="listaTiposId"> 
            <input type="hidden" id="listaCargo" name="listaCargo">

            <table class="table">
                <thead class="thead bg-primary text-white">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Escoger</th>
                        <th scope="col">Cargo</th>
                    </tr>
                </thead>
                <tbody id="tabla_tipos_estudiantes">
                    
                </tbody>
            </table>
       
        </div>
        <div class="modal-footer">
            <input type="submit" class="btn btn-outline-info btn-lg btn-block" value="Agregar">
        </div>
        </form> 
    </div>
    </div>
</div>