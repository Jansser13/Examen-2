<?php
    use controller\incidentescontroller;
    
?>
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
    h1 {
      color: #FFFFFF;
    }

    body {
      background: url(http://rfegimnasia.org/images/backgrounds/fondo-archivo.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
    }
  </style>

  <?php 
    
for ($i = 0; $i < sizeof($_SESSION['Ticket']); $i++) {
    $d=rand(1,9999);
    
    echo  "<font size=10  >Incidentes</font>"."<br>"."<br>"."Nombre Completo: ". $_SESSION['Ticket'][$i]->getnombrecompleto()."<br>"."<br>"." Telefono: ". $_SESSION['Ticket'][$i]->gettelefono() ."<br>"."<br>". " Telefono Alternativo: ".$_SESSION['Ticket'][$i]->gettelefonoalternativo().
    "<br>"."<br>"." Correo: ".$_SESSION['Ticket'][$i]->getcorreo()."<br>"."<br>"." Direccion: ". $_SESSION['Ticket'][$i]->getdireccion(). "<br>"."<br>"." Reporte: " . $_SESSION['Ticket'][$i]->getreporte()."<br>"."<br>". " Estado: ". $_SESSION['Ticket'][$i]->getestado(). "<br>"."<br>";
    
    echo "Ticket # : ". $d."<br>" ;
}
       
    ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>