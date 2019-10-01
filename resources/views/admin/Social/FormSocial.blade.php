@extends('layouts.app')

@section('content')
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
 <div class="container">
    <div class="row">

        <div class="col-md-12"> -->
             <form action="{{url('/social_form')}}" method="POST">   
                 @csrf             
                 <div class="card">
                    <div class="card-header">
                        Social
                    </div>

                    <div class="card-body">
                        <!-- <div class="input-group mb-3">
                            <div class="input-group-prepend">

                              <label class="input-group-text" for="inputGroupSelect01">Tipo de Social</label>

                            </div>

                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="tipo_de_social">

                          </div> -->

                           <div class="input-group mb-3">
                                     <div class="input-group-prepend">
                                         <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
                                     </div>
                                     <select name= "idtipo" class="custom-select" id="inputGroupSelect01">
                                        <option selected>...</option>
                                        @foreach($lista_tipo_social as $item)
                                            <option value="{{$item['id']}}">{{$item['descripcion']}} </option>
                                        @endforeach
                                     </select>
                                  </div>

                            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroup-sizing-default">Titulo   </span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="titulo">
                            </div>   
                            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroup-sizing-default">Descripcion</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="descripcion">
                            </div>
                            

                            <input type="submit" class="btn btn-info" value="Guardar"> 
                    </div>
                 </div>
             </form>
        <!-- </div>
    </div>
 </div>

 <div class="container">
                <div class="row">
                    <div class="col-md-12"> -->
                        <!-- <form> -->
                            <table class="table table-bordered">
                                        <thead class="thead bg-primary text-white">
                                              <tr>
                                                  <th scope="col">Tipo Social</th>
                                                  <th scope="col">Titulo</th>
                                                  <th scope="col">Descripcion</th> 
                                                  <th scope="col">Acciones</th>               
                                              </tr>
                                        </thead>

                                 <tbody>

                                        @foreach($lista_social as $item)
                                          <tr>
                                              <th scope="row">{{$item["tiposocial"]["descripcion"]}}</th>
                                              <th scope="row">{{$item["titulo"]}}</th>

                                              <th>{{$item["descripcion"]}}</th>

                                              <td>
                                                     <a href="#" onclick="verSocial(<?php echo $item['id']?>)" class="btn btn-info" >Modificar</a>
                                                    <form action="{{route('social_form.destroy',$item['id'])}}" method="POST">
                                                              @csrf    
                                                              @method("DELETE")                
                                                         <input type="submit" class="btn btn-danger" value="Eliminar">
                                                    </form>
                                              </td>
                                          </tr>
                                          @endforeach
                                            <!-- <tr>
                                                <th scope="row">Evento</th>
                                                <td>fggg</td>
                                                <td>bbjj</td>
                                                <td>
                                                   <button type="button" class="btn btn-info">Modificar</button>
                                                   <button type="button" class="btn btn-danger">Eliminar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Noticia</th>
                                                <td>Bbbb</td>
                                                <td>Dddd</td>
                                                <td>
                                                    <button type="button" class="btn btn-info">Modificar</button>
                                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                                </td>
                                            </tr> -->
                                  </tbody> 
                            </table>                      
                        <!-- </form> -->
                    <!-- </div>   
                </div>           
       </div>                
</body>
</html> -->
@include('admin.Social.ModalSocial')
@endsection