<?php
namespace controller;

use controller\BaseController;
use model\MArticulo;

class SupermercadoController implements BaseController 
{
    public static function getInstance() {
        if (!isset($_SESSION["instance"]) || !isset($_SESSION["Factura"])) 
        {
            $_SESSION["instance"] = new SupermercadoController();
            $_SESSION["Factura"] = [];
        }
        
        return $_SESSION["instance"];
    }

    public function show() {
        $_SESSION['Factura'] = [];
        return "views/primeravista";
    }

    public function agregarArticulo($Articulo) 
    {
        foreach ($Articulo as $articulo) {
            $art = new MArticulo();
            $art->setArticulo(explode("-", $articulo)[0]);
            $art->setPrecio(explode("-",$articulo)[1]);
            $art->setIVA(0);

            array_push($_SESSION["Factura"], $art);
        }
        return "views/VistaFactura";
    }

    //public static function getUserByName($name) 
    //{
        //for ($i = 0; $i < sizeof($_SESSION["usuarios"]); $i++)
        //{
           // if ($_SESSION["usuarios"][$i]->getUser() == $name)
                //return $_SESSION["usuarios"][$i];
        //}
   // }
}
