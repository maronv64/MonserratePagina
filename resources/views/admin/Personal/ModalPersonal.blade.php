<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
     <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg">Personal</button> -->

             <div class="modal fade MPersonal bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
               <div class="modal-content">
                   <div class="modal-container">
                       <div class="modal-header">
                          Modificar Personal
                       </div>

                       <form action="{{route('personal_form.update',1)}}" method="POST">

                               @csrf
                               @method('PATCH')

                            <div class="modal-body">
                                <!-- <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <label class="input-group-text" for="inputGroupSelect01">Tipo de Personal</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01">
                                          <option selected></option>
                                          <option value="1">Docente</option>
                                          <option value="2">Administrativo</option>
                                        </select>
                                      </div>  -->
                                      <!-- <div class="input-group mb-3">
                                     <div class="input-group-prepend">
                                         <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
                                     </div>
                                     <select name= "idtipo" class="custom-select" id="inputGroupSelect01">
                                        <option selected></option>
                                        @foreach($lista_tipo_personal as $item)
                                            <option value="{{$item['id']}}">{{$item['descripcion']}} </option>
                                        @endforeach
                                     </select>
                                  </div> -->

                                <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroup-sizing-default">Nombres</span>
                                        </div>
                                        <input type="text" id="nombresPersonal" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nombres">
                                </div> 
                                <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroup-sizing-default">Apellidos</span>
                                        </div>
                                        <input type="text" id="apellidosPersonal" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="apellidos">
                                </div>   
                                <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroup-sizing-default">Cedula</span>
                                        </div>
                                        <input type="text" id="cedulaPersonal" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="cedula">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroup-sizing-default">Titulo</span>
                                    </div>
                                    <input type="text" id="tituloPersonal" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="titulo"> 
                               </div>

                               <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroup-sizing-default">Cargo</span>
                                    </div>
                                    <input type="text" id="cargoPersonal" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="cargo"> 
                               </div>

                               <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroup-sizing-default">Telefono</span>
                                </div>
                                <input type="text" id="telefonoPersonal" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="telefono">
                               </div>
                           </div>

                           

                            <input type="hidden" id="idPersonal" name="id">
                           <div class="modal-footer">
                             <input type="submit" class="btn btn-info" value="Actualizar">
                           </div>                            
                    </form>
              </div>
           </div>
         </div>
       </div>
<!-- </body>
</html> -->