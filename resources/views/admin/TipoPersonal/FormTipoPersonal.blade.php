@extends('layouts.app')

@section('content')
<!-- <!DOCTYPE html>
<html lang="en">
        <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="CSS/carousel.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Tipo de Personal</title>
        </head>
            <body>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12"> -->
                                <form action="{{url('/tiposocial_form')}}" method="POST">       
                                        @csrf             
                                     <div class="card ">
                                        <div class="card-header" style="background: #f8c2f5" >
                                          <h5 class="card-title text-white">Tipo de Personal </h5>
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
                                                
                                                <a href="#" onclick='verTipoPersonal(<?php echo $item["id"]?>)' class="btn btn-info" >Modificar</a>
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
                        
                        <!-- </div>
                    </div>
                </div>
            </body>
</html> -->
@include('admin.TipoPersonal.ModalTipoPersonal')
@endsection