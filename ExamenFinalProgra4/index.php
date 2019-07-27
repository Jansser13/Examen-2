<?php 
//require_once('Views/primeravista.php');

require_once 'vendor/autoload.php';

session_start();

use controller\UserController;

$uri = explode("/", $_SERVER['REQUEST_URI']);

if (!isset($_GET['page']))
    die('imposible de encontrar la ruta.');

$usrController = UserController::getInstance();

switch ($_GET['page']) {
    case 'primeravista':
        require_once($usrController->createFactura($_GET['Articulo'] ?? null, $_GET['Precio'] ?? null , $_GET['IVA'] ?? null) . ".php");
        break;
    default:
        require_once($usrController->show() . ".php");
        break;
}