<?php
/**
 * Created by PhpStorm.
 * User: manuel
 * Date: 21/02/2019
 * Time: 12:34 PM
 */
require_once('Conexion.php');

 class TipoHabModel
 {
    private $tipos;

    public function __construct()
    {
        $this->setTipos();
    }

    private function setTipos()
    {
        $conexion=new Conexion();
        $conexion=$conexion->getConexion();
        $statement=$conexion->prepare("SELECT * FROM tipo_hab");
        $statement->execute();
        $arreglo=$statement->fetchAll(PDO::FETCH_ASSOC);
        $this->tipos=$arreglo;
    }


    public function getTipos(){
        return $this->tipos;
    }

 }
