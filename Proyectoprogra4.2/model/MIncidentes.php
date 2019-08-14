<?php namespace model;

class MIncidentes {

    public $nombrecompleto,
    $telefono,
    $telefonoalternativo,
    $correo,
    $direccion,
    $reporte,
    $estado;


    public function __construct () {}

    public function getnombrecompleto() {
        return $this ->nombrecompleto;
    }

    public function gettelefono() {
        return $this ->telefono;
    }

    public function gettelefonoalternativo() {
        return $this ->telefonoalternativo;
    }

    public function getcorreo() {
        return $this ->correo;
    }

    public function getdireccion() {
        return $this ->direccion;
    }

    public function getreporte() {
        return $this ->reporte;
    }

    public function getestado() {
        return $this ->estado;
    }

    public function setnombrecompleto($nombrecompleto) {
        $this->nombrecompleto=$nombrecompleto;
    }

    public function settelefono($telefono) {
        $this->telefono=$telefono;
    }

    public function settelefonoalternativo($telefonoalternativo) {
        $this->telefonoalternativo=$telefonoalternativo;
    }

    public function setcorreo($correo) {
        $this->correo=$correo;
    }

    public function setdireccion($direccion) {
        $this->direccion=$direccion;
    }

    public function setreporte($reporte) {
        $this->reporte=$reporte;
    }

    public function setestado($estado) {
        $this->estado=$estado;
    }

}