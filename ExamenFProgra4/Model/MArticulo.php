<?php
namespace model;

class MArticulo {
 
    Private $Articulo, $Precio, $IVA ;
 
 
    function __construct ($Articulo = null,$Precio = null,$IVA = null){
        $this->Articulo= $Articulo;
        $this->Precio= $Precio;
        $this->IVA = $IVA;
    }

    public function  getArticulo(){
        return $this ->Articulo;
    }
                   
    public function  getPrecio(){
        return $this ->Precio;
    }
                
    public function  getIVA(){
        return $this ->IVA;
    }
                  
    public function setArticulo ($Articulo){
        $this ->Articulo=$Articulo;  
    }
               
    public function setPrecio ($Precio){
        $this ->Precio=$Precio;
    }
    
    public function setIVA ($IVA){
        $this ->IVA=$IVA;
    }
}
         
           /*$Articulo_Array = array(
            "Cerveza","Papas Tostadas","Arroz","Jugo de Naranja","Manzana",
            "Coca Cola","Frijoles","Pasta","Huevos","Platano"
               
           );
           
                $Precio_Array= array(
                "1000","Jose Naranjo Delgado","Daniel Aguirre Salas","Carlos Soto Madriz"
                ,"Danilo Gonzalez Castro","Jonathan Castro Castillo","Angelo Delgado Rojas"
                ,"Orlando Morales Alvarado","Joseph Fernadez Alvarado","Yuner Alvarado Jimenez"
       
       
           );
          
                    $IVA_Array = array(
                    "1300","18","17","18","17","17","20","18","17","18"
       
           );
       
           

           $Articulos;
           $Precios;
           $IVAs;
           
           
           for($i=0; $i<10; $i++ ){
               
               $Articulos = $Articulo_Array[$i];
               $Precios = $Precio_Array[$i];
               $IVAs= $IVA_Array[$i];
               $arregloSuperMercado[$i] = new SuperMercado ($Articulos,$Precios,$IVAs);
           
           
           }

           function ImprimirArticulos($arregloSuperMercado){
     
            foreach ($arregloSuperMercado as $Dato) {
               echo "<br>"."Articulos: ".$Dato->getArticulo ()                    
               ."<BR>"."Precio: ".$Dato->getPrecio()
               ."<BR>"."IVA:".$Dato->getIVA()."<BR>";
               
               
               echo  "______________";
               echo"<br>";
           }
            
        
        }
        
         
          ImprimirArticulos($arregloSuperMercado);
        
               
    
        // ImprimirSuperMercado($arregloSuperMercado);
        // print_r($arregloSuperMercado);
         
        */