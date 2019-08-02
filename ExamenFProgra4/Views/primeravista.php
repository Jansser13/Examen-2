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
      background: url(http://www.gsfdcy.com/data/img1/57/1786051-microsoft-wallpaper.png);
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
      
      <input type="checkbox" name="articulos[]" value="Cerveza Imperial-1000-130"> Cerveza ₡1000 + IVA cantidad     <input type="text" size="5" name="a" value="" /></br>
      <input type="checkbox" name="articulos[]" value="Papa Tostadas-650-84.5"> Papas Tostadas ₡650 + IVA cantidad  <input type="text" size="5" name="b" value="" /></br> 
      <input type="checkbox" name="articulos[]" value="Arroz-2000-0"> Arroz ₡2000                                   <input type="text" size="5" name="c" value="" /></br> 
      <input type="checkbox" name="articulos[]" value="Jugo de Naranja-800-104"> Jugo de Naranja ₡800 + IVA         <input type="text" size="5" name="d" value="" /></br> 
      <input type="checkbox" name="articulos[]" value="Manzana-500-65"> Manzana ₡500 + IVA                          <input type="text" size="5" name="e" value="" /></br> 
      <input type="checkbox" name="articulos[]" value="Coca Cola-1200-156"> Coca Cola ₡1200 + IVA                   <input type="text" size="5" name="f" value="" /></br> 
      <input type="checkbox" name="articulos[]" value="Frijoles-800-0"> Frijoles ₡800                               <input type="text" size="5" name="g" value="" /></br> 
      <input type="checkbox" name="articulos[]" value="Pasta de dientes-1500-195"> Pasta de dientes ₡1500           <input type="text" size="5" name="h" value="" /></br> 
      <input type="checkbox" name="articulos[]" value="Carton de 5 Huevos-3000-0"> Carton de 5 Huevos ₡3000 + IVA   <input type="text" size="5" name="i" value="" /></br> 
      <input type="checkbox" name="articulos[]" value="Cargador iphone-7000-910"> Cargador iphone ₡7000 + IVA       <input type="text" size="5" name="j" value="" /></br>  <br/>
      <input type="submit" class="btn btn-success" value="Agregar al carrito"><br/> <br/>

     </form>
     <form action="index.php" method="GET">
      <input type="hidden" name="page" value="segundavista">

      <input type="submit" class="btn btn-success" value="Informacion IVA">
      </form>
      <!-- Librería jQuery requerida por los plugins de JavaScript -->
      <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js'></script>
  </body>

</html>