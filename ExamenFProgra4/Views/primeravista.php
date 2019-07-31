<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Super Mercado La Microsoft</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

  <style>
    body {
      background: url(../assets/img/back.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    }
  </style>

  </head>

  <body>
    <h1>SuperMercado La Microsoft </h1>
    <form action="index.php" method="GET">
      <input type="hidden" name="page" value="primeravista">
      <input type="checkbox" name="articulos[]" value="Cerveza-1000"> Cerveza ₡1000 + IVA <br/>
      <input type="checkbox" name="articulos[]" value="Papas Tostadas-650"> Papas Tostadas ₡650 + IVA <br/>
      <input type="checkbox" name="articulos[]" value="Arroz-2000"> Arroz ₡2000 <br/>
      <input type="checkbox" name="articulos[]" value="Jugo de Naranja-800"> Jugo de Naranja ₡800 + IVA <br/>
      <input type="checkbox" name="articulos[]" value="Manzana-500"> Manzana ₡500 + IVA <br/>
      <input type="checkbox" name="articulos[]" value="Coca Cola-1200"> Coca Cola ₡1200 + IVA <br/>
      <input type="checkbox" name="articulos[]" value="Frijoles-800"> Frijoles ₡800 <br/>
      <input type="checkbox" name="articulos[]" value="Pasta-1500"> Pasta ₡1500 <br/>
      <input type="checkbox" name="articulos[]" value="Huevos-3000"> Huevos ₡3000 + IVA <br/>
      <input type="checkbox" name="articulos[]" value="Platana-200"> Platano ₡200 + IVA <br/> <br/>
      <input type="submit" class="btn btn-success" value="Agregar al carrito">
  </form>
      <!-- Librería jQuery requerida por los plugins de JavaScript -->
      <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js'></script>
  </body>

</html>