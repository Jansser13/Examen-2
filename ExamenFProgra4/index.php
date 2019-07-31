<?php 
//require_once('Views/primeravista.php');

require_once 'vendor/autoload.php';

session_start();

use controller\SupermercadoController;

$uri = explode("/", $_SERVER['REQUEST_URI']);

if (!isset($_GET['page']))
    die('imposible de encontrar la ruta.');

$smCtrlr = SupermercadoController::getInstance();

switch ($_GET['page']) {
    case 'primeravista':
        require_once($smCtrlr->agregarArticulo($_GET['articulos']) . ".php");
        break;
    default:
        require_once($smCtrlr->show() . ".php");
        break;
}