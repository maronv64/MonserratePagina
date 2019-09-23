
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
    <title>modal</title>
</head>
<body>
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">tipo de usuario</button>

                 <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-lg">
                        
                        <div class="modal-content">
                                 <div class="modal-header"  style="background: #007bff">
                                     
                                    <h5 class="card-title text-white">Tipo de Usuario </h5>
            
                                 </div>
                                 <div class="modal-body">
                                     <div class="input-group mb-3">
                                           <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-default">descripción</span>
                                            </div>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">                                                                                                                                    
                                     </div>  
                                 </div>
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-info">modificar</button>                                    
                                 </div>                            
                         
                         </div>
                        
                     </div>
                 </div>
             </div>

         </div>

     </div>
    
</body>
</html>
