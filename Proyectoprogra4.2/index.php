<?php require_once 'vendor/autoload.php';

session_start();

use controller\incidentescontroller;

$uri=explode("/", $_SERVER['REQUEST_URI']);

if ( !isset($_GET['page'])) die('imposible de encontrar la ruta.');

$incCtrlr=incidentescontroller::getInstance();

switch ($_GET['page']) {
    case 'vistadatos':

        require_once($incCtrlr->createIncidente($_GET['nombrecompleto'] ?? null, $_GET['telefono'] ?? null, $_GET['telefonoalternativo'] ?? null, $_GET['correo'] ?? null, $_GET['direccion'] ?? null, $_GET['reporte'] ?? null, $_GET['estado'] ?? null) . ".php");

    break;

    case'vistaincidentes':

        break;

    default:
        require_once($incCtrlr->show() . ".php");
    break;
}