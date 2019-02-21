<?php
require_once('../model/HotelModel.php');
require_once('../model/HabitacionModel.php');
require_once('../model/TipoHabModel.php');
require_once('../model/AcomodacionHabModel.php');

$hotel_id=isset($_GET['hotel'])?$_GET['hotel']:null;
$hotelModel= new HotelModel();
$hotel=$hotelModel->setHotel($hotel_id);
$hotel=$hotelModel->getHotel();

$habModel= new HabitacionModel($hotel_id);
$habAsignadas=$habModel->getHabAsignadas();
$habNoAsignadas=$hotel[0]['nro_habitaciones']-$habAsignadas;
$infoHabitaciones=$habModel->getInfoHab();

$tipoHabModel=new TipoHabModel;
$tiposHab=$tipoHabModel->getTipos();

$acomodacionModel = new AcomodacionHabModel();
$acomodacionesHab=$acomodacionModel->getAcomodacion();
/*echo "<pre>";
var_dump($infoHabitaciones);die;
echo "</pre>";*/


include_once ('../view/cabecera.php');
include_once ('../view/adminhabitacion.php');
include_once ('../view/pie.php');