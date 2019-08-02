<?php
    use controller\UserController;
    use model\MArticulo;
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
    <title>SuperMercado La Microsoft</title>

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

<h1>Lista de productos agregados</h1>
    <?php 
        for ($i = 0; $i < sizeof($_SESSION['Factura']); $i++) {            
            echo $i . " - " . $_SESSION['Factura'][$i]->getArticulo() . " (" . $_SESSION['Factura'][$i]->getPrecio() . ") ".  " +IVA "  ."  (" . $_SESSION['Factura'][$i]->getIVA() .")" ."<br/>"."<br/>";
        }
        
        $pr = $_GET['articulos']; 
        
        if ($pr == ""){ 
        echo '<script> alert ("Debe seleccionar al menos una casilla"); history.back (-1);</script>'; 
        }
        $pe = $_GET['a']; 
        
        if ($pe == ""){ 
        echo '<script> alert ("Debe selecionar cuantos productos desea"); history.back (-1);</script>'; 
        }

        $a = (int)$_GET['a']; 
        $b = (int)$_GET['b']; 
        $c = (int)$_GET['c']; 
        $d = (int)$_GET['d']; 
        $e = (int)$_GET['e']; 
        $f = (int)$_GET['f']; 
        $g = (int)$_GET['g']; 
        $h = (int)$_GET['h']; 
        $i = (int)$_GET['i']; 
        $j = (int)$_GET['j']; 
        $precioa=0;
        $preciob=0;
        $precioc=0;
        $preciod=0;
        $precioe=0;
        $preciof=0;
        $preciog=0;
        $precioh=0;
        $precioi=0;
        $precioj=0;
        $iva=0;
        $totala=0;
        $totalb=0;
        $totalc=0;
        $totald=0;
        $totale=0;
        $totalf=0;
        $totalg=0;
        $totalh=0;
        $totali=0;
        $totalj=0;
        $subtotal=0;
        $totalfinal=0;
        if ($a>0) { 
        $precioa= $a*1000;
        $iva=$precioa*0.13;
        $totala= $precioa+$iva;
        
       echo "
       Super mercado La microsoft <br/>
       Factura Digital <br/>";
            
             $sdate=date("d")."/".date("m")."/".date("Y");
            
             echo $sdate."<br/>.<br/>";
         
       
        echo "Cerveza: ".$totala." Colones" ."<br/>" ; 
        
    } 

        if ($b>0) { 
            $preciob= $b*650;
            $iva=$preciob*0.13;
            $totalb= $preciob+$iva;
            echo "Papas Tostadas: ".$totalb." Colones". "<br/>"; } 

            if ($c>0) { 
                $precioc= $c*2000;
                
                $totalc= $precioc;
                echo "Arroz: ".$totalc. " Colones"."<br/>"; } 



             if ($d>0) { 
                $preciod= $d*800;
                $iva=$preciod*0.13;
                $totald= $preciod+$iva;
                echo "Jugo de Naranja: ".$totald." Colones". "<br/>"; } 


                if ($e>0) { 
                    $precioe= $e*500;
                    $iva=$precioe*0.13;
                    $totale= $precioe+$iva;
                    echo "Manzana: ".$totale." Colones". "<br/>"; } 
                      
                    if ($f>0) { 
                        $preciof= $f*1200;
                        $iva=$preciof*0.13;
                        $totalf= $preciof+$iva;
                        echo "Coca Cola: ".$totalf." Colones". "<br/>"; } 

                        if ($g>0) { 
                            $preciog= $g*800;
                            
                            $totalg= $preciog;
                            echo "Frijoles: ".$totalg. " Colones"."<br/>"; } 


                            if ($h>0) { 
                                $precioh= $h*1500;
                                
                                $totalh= $precioh;
                                echo "Pasta de Dientes: ".$totalh." Colones". "<br/>"; } 

                                if ($i>0) { 
                                    $precioi= $i*3000;
                                    $iva=$precioi*0.13;
                                    $totali= $precioi+$iva;
                                    echo "Carton de 30 huevos: ".$totali." Colones". "<br/>"; } 

                                    if ($j>0) { 
                                        $precioj= $j*7000;
                                        $iva=$precioj*0.13;
                                        $totalj= $precioj+$iva;
                                        echo "Cargador de Iphone: ".$totalj." Colones" ; } 

                                        $subtotal= $precioa+ $preciob+ $precioc+ $preciod+ $precioe+ $preciof+ 
                                        $preciog+ $precioh+ $precioi+ $precioj; 

                                        echo "<br/>"."<br/>"."El subtotal  de los Productos es: ".$subtotal." Colones";

                                        $totalfinal= $totala + $totalb + $totalc + $totald + $totale +$totalf +
                                        $totalg + $totalh + $totali + $totalj;

                                         echo "<br/>"."El total de los Productos es: ".$totalfinal." Colones";
?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>