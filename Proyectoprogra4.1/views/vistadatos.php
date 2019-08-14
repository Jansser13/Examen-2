<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Incidentes</title>
</head>
<body>
<style>
 h1 { color: #FFFFFF; }
    body {
      background: url(https://www.solofondos.com/wp-content/uploads/2015/11/Imagen-de-fondo-html.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
     

    }
  </style>
  
    <div class="container mt-5">
        <form action="index.php" method="GET">
        <input type="hidden" name="page" value="vistadatos">

            <div class="row">
                <div class="col-12 mb-2">
                    <h1>Crear Incidente
                </div>
                <div class="col-12 mb-2">
    
                <p style="color:white;">Nombre Completo 
                    <input type="text" class="form-control" name="Nombre Completo"   >
                </div>
                <div class="col-12 mb-2">
                <p style="color:white;">Telefono
                    <input type="text" class="form-control" name="Telefono">
                </div>
                <div class="col-12 mb-2">
                <p style="color:white;">Telefono Alternativo
                    <input type="text" class="form-control" name="Telefono alternativo">
                </div>
                <div class="col-12 mb-2">
                <p style="color:white;">Correo
                    <input type="text" class="form-control" name="Correo">
                </div>
                <div class="col-12 mb-2">
                <p style="color:white;">Direccion
                    <input type="text" class="form-control" name="Direccion">
                </div>
                <div class="col-12 mb-2">
                <p style="color:white;"> Reporte
                    <input type="text" class="form-control" name="Reporte">
                </div>
                <div class="col-12 mb-2">
                <p style="color:white;">Estado 
                </div>
                <div class="col-12 mb-2">
                <p style="color:white;"> <input type="radio" name="estado" value="leve"> Leve<br>
                    </div>
                <div class="col-12 mb-2">    
                <p style="color:white;">  <input type="radio" name="estado" value="grave"> Grave<br>
                    </div>
                <div class="col-12 mb-2">   
                <p style="color:white;"><input type="radio" name="estado" value="muy grave"> Muy Grave 
                    </div>
                
                    <div class="col-12 mb-2">
                    <input type="hidden" name="page" value="vistaincidentes">
                    <input type="submit" class="btn btn-success" value="Enviar">
                </div>
            </div>
        </form>
      

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>