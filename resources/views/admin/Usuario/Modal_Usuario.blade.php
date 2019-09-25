
               
                 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Modificar</button> -->

                 <div class="modalUsuario modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-lg">
                       
                         <div class="modal-content">
                                 <div class="modal-header"  style="background: #007bff">
                                    
                                    <h5 class="card-title text-white">Usuario </h5>
           
                                 </div>
                                 <div class="modal-body">

                                 <input type="hidden" id="idUsuario" name="id">
                                     <div class="input-group mb-3">
                                             <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">Id de Tipo</label>
                                             </div>
                                             <select class="custom-select" id="inputGroupSelect01">
                                                   <option selected>Escoja...</option>
                                                   <option value="1">admin</option>
                                                   <option value="2">secretary</option>
                                                   <option value="3">otros</option>
                                             </select>
                                          </div>
           
                                     <div class="input-group mb-3">
                                         <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                                         </div>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nombre">                                                                                                                                    
                                     </div> 

                                     <div class="input-group mb-3">
                                         <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default">E-mail</span>
                                         </div>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="email">                                                                                                                                    
                                     </div> 

                                     <div class="input-group mb-3">
                                         <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Contraseña</span>
                                         </div>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="contraseña">                                                                                                                                    
                                     </div> 


                                 </div>
                                 <div class="modal-footer">
                                       <button type="button" class="btn btn-info">modificar</button>                                    
                                 </div>                            
                        
                         </div>
                       
                     </div>
                 </div>
            