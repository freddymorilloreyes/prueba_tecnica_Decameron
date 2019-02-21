<?php
/**
 * Created by PhpStorm.
 * User: manuel
 * Date: 21/02/2019
 * Time: 12:34 PM
 */
require_once('Conexion.php');

 class HotelModel
 {
    private $hotel;
    private $hoteles;

    public function __construct()
    {
        $this->setHoteles();
    }

    private function setHoteles()
    {
        $conexion=new Conexion();
        $conexion=$conexion->getConexion();
        $statement=$conexion->prepare("SELECT * FROM hotel");
        $statement->execute();
        $arreglo=$statement->fetchAll(PDO::FETCH_ASSOC);
        $this->hoteles=$arreglo;
    }

     public function setHotel($hotel_id)
     {
         $conexion=new Conexion();
         $conexion=$conexion->getConexion();
         $statement=$conexion->prepare("SELECT * FROM hotel WHERE id=:id");
         $statement->bindparam(':id',$hotel_id);
         $statement->execute();
         $arreglo=$statement->fetchAll(PDO::FETCH_ASSOC);
         $this->hotel=$arreglo;
     }

    public function getHotel(){
        return $this->hotel;
    }
     public function getHoteles(){
         return $this->hoteles;
     }
 }
