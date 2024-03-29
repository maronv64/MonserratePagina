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
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                      @include('admin.dashboard')
                    </div>
                    <div class="col-md-9">
                         <form class="needs-validation" action="{{url('/personal_form')}}" method="POST"  enctype="multipart/form-data">  
                               @csrf                
                             <div class="card">
                                <div class="card-header">
                                    Personal
                                </div>
                                <div class="card-body">

                                {{--<div class="input-group mb-3">
                                     <div class="input-group-prepend">
                                         <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
                                     </div>
                                     <select name= "idtipo" class="custom-select" id="inputGroupSelect01" required>
                                        <option selected></option>
                                        @foreach($lista_tipo_personal as $item)
                                            <option value="{{$item['id']}}">{{$item['descripcion']}} </option>
                                        @endforeach
                                     </select>
                                    </div>--}}

                                        <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="inputGroup-sizing-default">Nombres</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nombres" required>
                                        </div> 
                                        <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="inputGroup-sizing-default">Apellidos</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="apellidos" required>
                                        </div>   
                                        <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="inputGroup-sizing-default">Cedula</span>
                                                </div>
                                                <input type="text" class="form-control solonumeros" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="cedula" maxlength="10"  required>
                                        </div>
                                        <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="inputGroup-sizing-default">Titulo</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="titulo" required>
                                        </div>

                                        <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="inputGroup-sizing-default">Cargo</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="cargo" required>
                                        </div>

                                        <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="inputGroup-sizing-default">Telefono</span>
                                                </div>
                                                <input type="text" class="form-control solonumeros" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="telefono" maxlength="10"   required>
                                        </div>
                                        <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                   <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                  </div>
                                  <div class="custom-file">
                                     <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="file" required>
                                     <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                  </div>
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
                                              @foreach($item["lista_tipo_personal"] as $item2)
                                                            {{ $item2["tipo_personal"]["descripcion"]}}<?php echo ",<br>" ?>
                                                        @endforeach
                                              </th>  
                                              <td scope="row">{{$item["nombres"]}}</td>
                                              <td scope="row">{{$item["apellidos"]}}</td>
                                              <td scope="row">{{$item["cedula"]}}</td>
                                              <td scope="row">{{$item["titulo"]}}</td>
                                              <td scope="row">{{$item["telefono"]}}</td>
                                              

        
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
                    </div>
                </div>
             </div>
<!-- </body>
</html> -->
@include('admin.Personal.ModalPersonal')
@include('admin.Personal.Modal_Tipos_Personal')
@endsection