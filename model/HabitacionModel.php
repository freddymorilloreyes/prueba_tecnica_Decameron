<?php
/**
 * Created by PhpStorm.
 * User: manuel
 * Date: 21/02/2019
 * Time: 12:34 PM
 */
require_once('Conexion.php');

 class HabitacionModel
 {

    private $hotel_id;
    private $cantHabitacionesAsignadas;
    private $cantHabitacionesNoasignadas;
    private $infoHab;

    public function __construct($hotel_id)
    {
        $this->hotel_id=$hotel_id;
        $this->setHabAsignadas();
        $this->setInfoHab();

    }

    private function setHabAsignadas()
    {
        $conexion=new Conexion();
        $conexion=$conexion->getConexion();
        $statement=$conexion->prepare("SELECT Count(*) AS cant FROM habitacion WHERE hotel_id=:id");
        $statement->bindparam(':id',$this->hotel_id);
        $statement->execute();
        $arreglo=$statement->fetchObject();
        $this->cantHabitacionesAsignadas=$arreglo->cant;
    }
     private function setInfoHab()
     {
         $conexion=new Conexion();
         $conexion=$conexion->getConexion();
         $statement=$conexion->prepare("
            SELECT tipo_hab.nombre as tipo,acomodacion_hab.nombre as acomodacion,COUNT(*) as cant ,habitacion.tipo_id,habitacion.acomodacion_id
            FROM `habitacion`
                INNER JOIN `tipo_hab`
                    ON habitacion.tipo_id=tipo_hab.id
                INNER JOIN `acomodacion_hab`
                    ON habitacion.acomodacion_id=acomodacion_hab.id
            WHERE `hotel_id`=:id 
            GROUP BY `tipo_id`,`acomodacion_id`
             ");
         $statement->bindparam(':id',$this->hotel_id);
         $statement->execute();
         $arreglo=$statement->fetchAll(PDO::FETCH_ASSOC);
         $this->infoHab=$arreglo;
     }

    public function getHabAsignadas()
    {
        return $this->cantHabitacionesAsignadas;
    }
     public function getInfoHab()
     {
         return $this->infoHab;
     }

     public function saveHabitacion(array $infoHabitacion)
     {
         $conexion=new Conexion();
         $conexion=$conexion->getConexion();
         $statement= $conexion->prepare("INSERT INTO  `habitacion`(`tipo_id`, `acomodacion_id`, `hotel_id`) VALUES (:tipo_id, :acomodacion_id, :hotel_id)");
         $statement->bindParam(':tipo_id', $infoHabitacion['tipo_id'], PDO::PARAM_STR);
         $statement->bindParam(':acomodacion_id', $infoHabitacion['acomodacion_id'], PDO::PARAM_STR);
         $statement->bindParam(':hotel_id', $this->hotel_id, PDO::PARAM_STR);
         $statement->execute();

     }

     public function eliminarHabitacion(array $infoHabitacion){
         $conexion=new Conexion();
         $conexion=$conexion->getConexion();
         $statement= $conexion->prepare("DELETE FROM `habitacion` WHERE `tipo_id`=:tipo_id AND `acomodacion_id`=:acomodacion_id AND `hotel_id`=:hotel_id");
         $statement->bindParam(':tipo_id', $infoHabitacion['tipo_id'], PDO::PARAM_STR);
         $statement->bindParam(':acomodacion_id', $infoHabitacion['acomodacion_id'], PDO::PARAM_STR);
         $statement->bindParam(':hotel_id', $this->hotel_id, PDO::PARAM_STR);
         $statement->execute();
     }
 }