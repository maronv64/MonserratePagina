@extends('layouts.app')

@section('content')

<!-- <!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> -->
        <!-- <div class="container">
                <div class="row">
                    <div class="col-md-12"> -->
                        <form action="{{url('/materia_control')}}" method="POST">
                            |@csrf
                            <div class="card">
                                <div class="card-header">
                                    Materias
                                </div>
                                <div class="card-body">
                                        
                                        <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">Descripcion</label>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                
                                            </div>
                                    
                                    <!-- <a href="#" class="btn btn-info">Guardar</a> -->
                                    <input type="submit" class="btn btn-info" value="Guardar">
                                    
                                </div>  
        
                            </div>
                        </form>
                        <!-- <form action=""> -->
                                <table class="table table-bordered">
                                        <thead class="thead bg-primary text-white" >
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">Accion</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($lista_materias as $item)
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>{{$item["descripcion"]}}</td>
                                                    <td>
                                                        <a href="#" class="btn btn-info">Agregar Docente</a>
                                                        <a href="#" onclick='verMateria(<?php echo $item["id"] ?>)' class="btn btn-info">Modificar</a>
                                                        <form action="{{route('materia_control.destroy',$item['id'])}}" method="POST">
                                                              @csrf    
                                                              @method("DELETE")                
                                                            <input type="submit" class="btn btn-danger" value="Eliminar">
                                                        </form>
                                                        
                                                    </td>
                                                </tr>
                                                
                                             @endforeach
                                        </tbody>
                                </table>    
        
                                
                        <!-- </form> -->
        
                    <!-- </div>
                </div>
            </div> -->
<!-- </body>
</html> -->
@include('admin.Materias.ModalMaterias')
@endsection