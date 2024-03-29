@extends('layouts.app')

@section('content')



            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        @include('admin.dashboard')
                    </div>
                    <div class="col-md-9">
                        <div class ="content">
                                <form class="needs-validation" action ="{{url('/users')}}" method="POST">
                                @csrf 
                                @method('POST')                     
                                    <div class="card ">
                                    <div class="card-header" style="background: #007bff" >
                                    <h5 class="card-title text-white">Usuario</h5>
                                        </div>
                                            <div class="card-body">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                                                    </div>
                                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nombre" required>                                                                                  
                                                </div> 
                                                
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
                                                    </div>
                                                    <select name= "idtipo" class="custom-select" id="inputGroupSelect01" required>
                                                        <!-- <option selected></option> -->
                                                        @foreach($lista_tipoUsuario as $item)
                                                            <option value="{{$item['id']}}">{{$item['descripcion']}} </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroup-sizing-default">E-mail</span>
                                                    </div>
                                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="email" required>                                                                                 
                                                </div> 

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroup-sizing-default">contraseña</span>
                                                    </div>
                                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name = "contraseña" required>                                                                                 
                                                </div> 

                                                <div class="input-group mb-3">
                                                <input class="btn btn-info" type="submit" value="agregar">       
                                                <!-- <button type="button" class="btn btn-info">Agregar</button>                                                                         -->
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </form> 
                                <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead bg-primary text-white" >
                                        <tr>
                                        <th scope="col">tipo </th>
                                        <th scope="col">nombre</th>
                                        <th scope="col">E-mail</th>
                                        {{-- <th scope="col">Contraseña</th> --}}
                                        <th scope="col">opciones</th>
                                        
                                        </tr>
                                    </thead>                    
                                    <tbody>
                                    @foreach ($lista_usuario as $item)
                                            <tr>
                                                
                                                <td>{{$item['tipo_usuario']['descripcion']}}</td>
                                                <td>{{$item['name']}}</td>
                                                <td>{{$item['email']}}</td>
                                                {{-- <td>{{$item['password']}}</td> --}}
                                                <td>
                                                <button type="button" class="btn btn-info" onclick = "verUsuario(<?php echo $item['id'] ?>)">Modificar</button>
                                                
                                                    <form action="{{route('users.destroy',$item['id'])}}" method="POST">
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
                @include ('admin.Usuario.Modal_Usuario')
                </div>
        </div>
    </div>
</div>
@endsection