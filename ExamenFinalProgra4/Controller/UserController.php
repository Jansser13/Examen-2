<?php
namespace controller;

use controller\BaseController;
use model\SuperMercado;

class UserController implements BaseController 
{
    public static function getInstance() {
        if (!isset($_SESSION["instance"]) || !isset($_SESSION["Factura"])) 
        {
            $_SESSION["instance"] = new UserController();
            $_SESSION["Factura"] = [];
        }
        
        return $_SESSION["instance"];
    }

    public function show() {
        return "views/primeravista";
    }

    public function createFactura($Articulo,$Precio,$IVA) 
    {
        $Factura = new SuperMercado();
        $Factura->setArticulo($Articulo);
        $Factura->setPrecio($Precio);
        $Factura->setIVA($IVA);

        array_push($_SESSION["Factura"], $Factura);

        return "views/loggedIn";
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
