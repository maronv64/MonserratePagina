<!DOCTYPE html>
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
    <title>usuarios</title>
</head>
<body>
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <form>                    
                    <div class="card ">
                     <div class="card-header" style="background: #007bff" >
                     <h5 class="card-title text-white">Usuario</h5>
                         </div>
                             <div class="card-body">
                                 <div class="input-group mb-3">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                                     </div>
                                         <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">                                                                                 
                                  </div> 
                                  
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
                                         <span class="input-group-text" id="inputGroup-sizing-default">E-mail</span>
                                     </div>
                                         <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">                                                                                 
                                 </div> 

                                 <div class="input-group mb-3">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text" id="inputGroup-sizing-default">contraseñora</span>
                                     </div>
                                         <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">                                                                                 
                                 </div> 

                                 <div class="input-group mb-3">
                                        <button type="button" class="btn btn-info">Agregar</button>                                                                        
                                 </div> 
                             </div>
                         </div>
                     </div>
                 </form> 
             </div>

         </div>
     </div>
</body>
</html>