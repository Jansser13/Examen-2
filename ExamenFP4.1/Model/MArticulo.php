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
         
           