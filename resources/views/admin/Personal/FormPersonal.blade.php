@extends('layouts.app')

@section('content')
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body> -->
        <!-- <div class="container">
                <div class="row">
                    <div class="col-md-12"> -->
                         <form action="{{url('/personal_form')}}" method="POST">  
                               @csrf                
                             <div class="card">
                                <div class="card-header">
                                    Personal
                                </div>
                                <div class="card-body">

                                   <div class="input-group mb-3">
                                     <div class="input-group-prepend">
                                         <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
                                     </div>
                                     <select name= "idtipo" class="custom-select" id="inputGroupSelect01">
                                        <option selected></option>
                                        @foreach($lista_tipo_personal as $item)
                                            <option value="{{$item['id']}}">{{$item['descripcion']}} </option>
                                        @endforeach
                                     </select>
                                    </div>

                                        <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="inputGroup-sizing-default">Nombres</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nombres">
                                        </div> 
                                        <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="inputGroup-sizing-default">Apellidos</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="apellidos">
                                        </div>   
                                        <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="inputGroup-sizing-default">Cedula</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="cedula">
                                        </div>
                                        <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="inputGroup-sizing-default">Titulo</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="titulo">
                                        </div>
                                        <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="inputGroup-sizing-default">Telefono</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="telefono">
                                        </div>
                                              
                                        
                                        <input type="submit" class="btn btn-info" value="Guardar"> 

                                </div>
                             </div>
                         </form>

                         <table class="table table-bordered">
                                        <thead class="thead bg-primary text-white">
                                          <tr>
                                              <th scope="col">Tipo de Personal</th>
                                              <th scope="col">Nombres</th>
                                              <th scope="col">Apellidos</th>
                                              <th scope="col">Cedula</th> 
                                              <th scope="col">Titulo</th>
                                              <th scope="col">Telefono</th>  
                                              <th scope="col">Acciones</th> 

                                          </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($lista_personal as $item)
                                          <tr>
                                              <th scope="row">
                                                 
                                              </th>  
                                              <th scope="row">{{$item["nombres"]}}</th>
                                              <th scope="row">{{$item["apellidos"]}}</th>
                                              <th scope="row">{{$item["cedula"]}}</th>
                                              <th scope="row">{{$item["titulo"]}}</th>
                                              <th scope="row">{{$item["telefono"]}}</th>
        
                                              <td>
                                                    <a href="#" onclick='gp_verTipoPersonal(<?php echo $item["id"] ?>)' class="btn btn-info">Agregar Tipo Personal</a>
                                                     <a href="#" onclick="verPersonal(<?php echo $item['id']?>)" class="btn btn-info" >Modificar</a>
                                                    <form action="{{route('personal_form.destroy',$item['id'])}}" method="POST">
                                                              @csrf    
                                                              @method("DELETE")                
                                                         <input type="submit" class="btn btn-danger" value="Eliminar">
                                                    </form>
                                                    
                                              </td>

                                          </tr> 
                                        @endforeach
                                        </tbody> 
                                </table>                      
                    <!-- </div>
                </div>
             </div>
</body>
</html> -->
@include('admin.Personal.ModalPersonal')
@include('admin.Personal_TipoPersonal.Modal_personal_tipopersonal')
@endsection