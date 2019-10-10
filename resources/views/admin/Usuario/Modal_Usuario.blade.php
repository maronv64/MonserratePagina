
               
                 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Modificar</button> -->

                 <div class="modalUsuario modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-lg">
                       
                         <div class="modal-content">
                                 <div class="modal-header"  style="background: #007bff">
                                    
                                    <h5 class="card-title text-white">Usuario </h5>
           
                                 </div>

                                 <form class="needs-validation" action="{{route('users.update',1)}}" method="POST">
                                    @method('PATCH')
                                    @csrf
                                    <div class="modal-body">

                                    <input type="hidden" id="idUsuario" name="id">
                                       <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                      <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
                                                </div>
                                                <select id="cmbTusuario" name= "idtipo" class="custom-select" >
                                                   <!-- <option disabled ="true" selected>Escoja...</option> -->
                                                   @foreach($lista_tipoUsuario as $item)
                                                         <option value="{{$item['id']}}">{{$item['descripcion']}} </option>
                                                   @endforeach
                                                </select>
                                             </div>
            
                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                             <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                                          </div>
                                             <input id="nombreUsuario" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nombre" required>                                                                                                                                    
                                       </div> 

                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                             <span class="input-group-text" id="inputGroup-sizing-default">E-mail</span>
                                          </div>
                                             <input id="email" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="email" required>                                                                                                                                    
                                       </div> 

                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                             <span class="input-group-text" id="inputGroup-sizing-default">Contraseña</span>
                                          </div>
                                             <input id="contraseña" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="contraseña" required>                                                                                                                                    
                                      </div>
                                 
                                 <div class="modal-footer">
                                 <input type="submit" class="btn btn-info" value ="modificar">                                      
                                 </div>                            
                                 </form>
                                 </div>                                      
                                 </div>
                         </div>
                       
                     </div>
                 </div>
            