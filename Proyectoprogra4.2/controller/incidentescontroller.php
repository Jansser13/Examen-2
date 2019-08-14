<?php namespace controller;

use controller\BaseController;
use model\MIncidentes;

class incidentescontroller implements BaseController {
    public static function getInstance() {
        if ( !isset($_SESSION["instance"]) || !isset($_SESSION["Ticket"])) {
            $_SESSION["instance"]=new incidentescontroller();
            $_SESSION["Ticket"]=[];
        }

        return $_SESSION["instance"];
    }

    public function show() {
        $_SESSION['Ticket']=[];
        return "views/vistadatos";
    }

    public function createIncidente($nombrecompleto, $telefono,
        $telefonoalternativo, $correo, $direccion, $reporte, $estado) {

        $report=new MIncidentes();
        $report->setnombrecompleto($nombrecompleto);
        $report->settelefono($telefono);
        $report->settelefonoalternativo($telefonoalternativo);
        $report->setcorreo($correo);
        $report->setdireccion($direccion);
        $report->setreporte($reporte);
        $report->setestado($estado);
        array_push($_SESSION["Ticket"], $report);



        return "views/vistaincidentes";
    }
}