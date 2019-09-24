@extends('layouts.app')

@section('content')

<!-- <html lang="en">
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12"> -->
                <form action="{{url('/Especialidades_control')}}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            Especialidades
                        </div>
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                         <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="descripcion" >
                                        <option selected></option>
                                        <option value="Ciencias">Ciencias </option>
                                        <option value="Tecnico">Tecnico</option>
                                        
                                </select>
                                
                                <a href="#" class="btn btn-info">Agregar Materias</a>
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
                                    <th scope="col">Especialidad</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Accion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($lista_especialidades as $item)
                                        <tr>
                                            <th scope="row">Ciencias</th>
                                             <th>
                                                 {{$item["descripcion"]}}
                                             </th>
                                        
                                            <td>
                                                <a href="#" class="btn btn-info">Modificar</a>
                                                {{-- <form action="{{url('Especialidades_control/'.$item['id'])}}" method="POST"> --}}
                                                <form action="{{route('Especialidades_control.destroy',$item['id'])}}" method="POST">
                                                              @csrf    
                                                              @method("DELETE")                
                                                    <input type="submit" class="btn btn-danger" value="Eliminar">
                                                </form>
                                                <!-- <a href="{{route('Especialidades_control.destroy',$item['id'])}}">elim</a> -->
                                            </td>
                                        </tr>
                                    @endforeach
                                    <!-- <tr>
                                        <th scope="row">Ciencias</th>
                                        <th>jajjaa</th>
                                        <td>
                                            <a href="#" class="btn btn-info">Modificar</a>
                                            <a href="#" class="btn btn-danger">Eliminar</a>
                                         </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tecnico</th>
                                        <th>jajjaa</th>
                                        <td>
                                                <a href="#" class="btn btn-info">Modificar</a>
                                                <a href="#" class="btn btn-danger">Eliminar</a>   
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
@endsection