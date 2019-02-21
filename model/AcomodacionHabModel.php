<?php
/**
 * Created by PhpStorm.
 * User: manuel
 * Date: 21/02/2019
 * Time: 12:34 PM
 */
require_once('Conexion.php');

 class AcomodacionHabModel
 {
    private $acomodacion;

    public function __construct()
    {
        $this->setAcomodacion();
    }

    private function setAcomodacion()
    {
        $conexion=new Conexion();
        $conexion=$conexion->getConexion();
        $statement=$conexion->prepare("SELECT * FROM acomodacion_hab");
        $statement->execute();
        $arreglo=$statement->fetchAll(PDO::FETCH_ASSOC);
        $this->acomodacion=$arreglo;
    }


    public function getAcomodacion(){
        return $this->acomodacion;
    }

 }
