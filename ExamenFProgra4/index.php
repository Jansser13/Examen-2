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
        case 'segundavista':
  
    echo '<body style="background-color:CEEEEE">';

        echo "
        ¿Qué es el I.V.A? <br> <br>

        El IVA (Impuesto sobre el Valor Añadido) es un impuesto indirecto que grava el consumo. <br>

        Es un incremento de un porcentaje en el precio de cada artículo que compramos y de cada servicio que recibimos. <br>
        
        En cada compra pagamos el precio del bien más el porcentaje de impuestos que se le aplica a su coste.  <br>
        
        El ingreso obtenido por este impuesto sirve para proporcionar recursos al Estado. <br> <br>

        El que vende o presta un servicio no se queda con el importe de este impuesto, ya que cada 3 meses debe ingresar en Hacienda la diferencia entre el impuesto repercutido en las facturas emitidas a sus clientes y el impuesto soportado en las facturas de gastos necesarios para desarrollar su actividad (lo que se conoce como gastos deducible).<br> <br> <br> <br> <br> <br>
        
        ¿Como trabaja el I.V.A en el día a día ? <br> <br>

        Para el contribuyente (condición que tienen todos los particulares, como hemos visto) el funcionamiento es muy sencillo: lo paga y se acabó.<br> <br>

    Para el sujeto pasivo (empresario o profesional en ejercicio de su actividad) el proceso es algo más complejo y podría resumirse más o menos así:<br> <br>

    Primera Fase: <br> <br>
        Al vender sus bienes o servicios cobra el IVA a sus clientes, este IVA se llama IVA repercutido. <br> <br>
     
    Segunda Fase: <br> <br>

    El IVA que paga por los servicios que adquiere en el desarrollo de su actividad se lo deducira en sus liquidaciones, se llama IVA soportado.<br> <br>

    Tercera Fase: <br> <br>

    Trimestralmente (o mensualmente en algunos casos) debe de presentar la liquidacion correspondiente que tendra un resultado a pagar si el IVA que ha repercutido es superior al que ha soportado o un resultado a su favor si el soportado es mayor que el repercutido.
        
        ";
        
        break;
    default:
        require_once($smCtrlr->show() . ".php");
        break;
}