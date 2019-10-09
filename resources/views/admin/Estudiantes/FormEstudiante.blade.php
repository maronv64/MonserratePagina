@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            @include('admin.dashboard')
        </div>
        <div class="col-md-9">
        <form class="needs-validation" action="{{url('/estudiante')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST') 
            <div class="card">
                <div class="card-header" style="background-color: #007bff;">
                    <h5 class="card-title text-white">Estudiantes</h5>
                </div>
                <div class="card-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nombres y Apellidos</span>
                        </div>
                        <input type="text" aria-label="First name" class="form-control" name="nombre" required>
                        <input type="text" aria-label="Last name" class="form-control" name="apellido" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Cedula &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                        </div>
                            <input type="text" class="form-control solonumeros"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="cedula" maxlength="10"  required>
                    </div> 
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Especialidades &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                        </div>
                        <select  class="custom-select" id="inputGroupSelect01" name="idespecialidad" required>
                        <!-- <option disabled="true" selected>Escoja...</option>                   -->
                            @foreach($lista_TipoEspecialidad as $item)
                                <option value="{{$item['id']}}">{{$item['descripcion']}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Archivo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="file" required>
                            <label class="custom-file-label" for="inputGroupFile01">Escoger Archivo...</label>
                        </div>
                    </div>
                    <div class="input-group-mb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-outline-info btn-lg btn-block" value="Guardar">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </form>  

        <div class="table-responsive">                   
            <table class="table">
            <thead class="thead bg-primary text-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">Tipo Estudiante</th>
                    <th scope="col">Opciones</th>
                    </tr>
            </thead>
              
                @foreach($listaEstudiante as $item)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$item["nombre"]}}</td>
                        <td>{{$item["apellido"]}}</td>
                        <td>{{$item["cedula"]}}</td>
                        <td>{{$item["especialidad"]["descripcion"]}}</td>
                        <td>
                        @foreach($item["lista_tipos"] as $item2)
                            {{$item2["tipo"]["descripcion"]}} <?php echo "<br>" ?>
                        @endforeach
                        </td>
                        <td>
                        <button type="button" onclick='GE_CargarTablaTipoE(<?php echo $item["id"] ?>)' class="btn btn-outline-info" >Tipo Estudiante</button>
                        <button type="button" onclick='GE_verEstudiantes(<?php echo $item["id"] ?>)' class="btn btn-outline-info" >Modificar</button>
                            <form action="{{route('estudiante.destroy',$item['id'])}}" method="POST">
                                @csrf    
                                @method("DELETE")                
                                <input type="submit" class="btn btn-outline-danger" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                @endforeach  
            </table>
            </div>
                @include('admin.Estudiantes.ModalTipoEstudiante') 
                @include('admin.Estudiantes.ModalEstudiante')  
            </div>
        </div>
    </div>
</div>
@endsection