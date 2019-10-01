
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Modificar</button> -->

<div class="modal fade Estudiante bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header" style="background-color: #007bff;">
                <h5 class="card-title text-white">Estudiantes</h5>
            </div>
            <form action="{{route('estudiante.update',1)}}" method="POST">
                 @csrf
                 @method('PATCH')
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nombres y Apellidos</span>
                        </div>
                        <input type="hidden" id="idEstudiante" name="idEstudiante"> 
                        <input id="nombreEstudiante" type="text" aria-label="First name" class="form-control" name="nombre">
                        <input id="apellidoEstudiante" type="text" aria-label="Last name" class="form-control" name="apellido">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Cedula &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                        </div>
                            <input id="cedulaEstudiante" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="cedula">
                    </div> 
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Especialidades &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                    </div>
                    <select  class="custom-select" id="cmbespecialidadE" name="idespecialidad">
                    <option disabled="true" selected>Escoja...</option>                  
                        @foreach($lista_TipoEspecialidad as $item)
                            <option value="{{$item['id']}}">{{$item['descripcion']}} </option>
                        @endforeach
                    </select>
                </div>
                    <div class="input-group-mb-3"> 
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-outline-info btn-lg btn-block" value="Guardar">
                            </div>
                        </div>        
                    </div>
                            
                </div>
            </form>
        </div>
    </div>
</div>

 