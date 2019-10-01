@extends('layouts.app')

@section('content')

                                <form action="{{url('/tipopersonal_form')}}" method="POST">       
                                        @csrf             
                                     <div class="card ">
                                        <div class="card-header" style="background: #ffeed" >
                                          <h5>Tipo de Personal </h5>
                                        </div>
                                        <div class="card-body">
                                                <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text" id="inputGroup-sizing-default">Descripción</span>
                                                        </div>
                                                          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="descripcion"> 
                                                           &nbsp;
                                                           <input type="submit" class="btn btn-info" value="Guardar">
                                                </div>
                                        </div>
                                     </div>
                                </form> 
                               
                                <table class="table table-bordered">
                                    <thead class="thead bg-primary text-white" >
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Descripcion</th>
                                        
                                        <th scope="col">Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($lista_tipo_personal as $item)
                                            <tr>
                                                <th scope="row">1</th>
                                                    <th>
                                                        {{$item["descripcion"]}}
                                                    </th>
                                                    
                                            
                                                <td>
                                                    
                                                    <button  onclick="verTipoPersonals(<?php echo $item['id']?>)" class="btn btn-info" >Modificar</button>
                                                    <form action="{{route('tipopersonal_form.destroy',$item['id'])}}" method="POST">
                                                                    @csrf    
                                                                    @method("DELETE")                
                                                        <input type="submit" class="btn btn-danger" value="Eliminar">
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>  
                                </table>
                        
@include('admin.TipoPersonal.ModalTipoPersonal')
@endsection
