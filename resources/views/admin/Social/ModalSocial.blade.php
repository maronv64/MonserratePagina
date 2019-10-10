<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body> -->
     <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg">Actividad</button> -->

             <div class="modal fade MSocial bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
               <div class="modal-content">
                   <div class="modal-container">
                       <div class="modal-header">
                          Modificar Social
                       </div>
                       <form  class="needs-validation" action="{{route('social_form.update',1)}}" method="POST">
                           @csrf
                           @method('PATCH')
                           <div class="modal-body">
                                        <!-- <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                          <label class="input-group-text" for="inputGroupSelect01">Tipo de Social</label>
                                                        </div>
                                                        <select class="custom-select" id="inputGroupSelect01">
                                                          <option selected></option>
                                                          <option value="1">Actividad</option>
                                                          <option value="2">Noticia</option>
                                                        </select>
                                                        <input type="hidden" id="idSocial" name="id">
                                                        <input id="tipo_socialSocial" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="tipoSocial">             

                                        </div> -->
                                        <div class="input-group mb-3">
                                     <div class="input-group-prepend">
                                         <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
                                     </div>
                                     <select name= "idtipo" class="custom-select" id="inputGroupSelect01" required>
                                        <!-- <option selected>Escoja...</option> -->
                                        @foreach($lista_tipo_social as $item)
                                            <option value="{{$item['id']}}">{{$item['descripcion']}} </option>
                                        @endforeach
                                     </select>
                                  </div>


                                <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroup-sizing-default">Titulo   </span>
                                        </div>
                                        <input id="tituloSocial" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="titulo" required>
                               </div>
                               
                               <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroup-sizing-default">Descripcion</span>
                                        </div>
                                       
                                        <input id="descripcionSocial" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="descripcion" required>
                               </div>

                               <input type="hidden" id="idSocial" name="id">
                          <div class="modal-footer">
                            <input type="submit" class="btn btn-info" value="Actualizar">
                          </div>  
                        </div>                          
                  </form>
                 
                </div>
              </div>
            </div>
          </div>
<!-- </body>
</html> -->