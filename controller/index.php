<?php
require_once('../model/HotelModel.php');

$hotelModel= new HotelModel();
$hoteles=$hotelModel->getHoteles();

include_once ('../view/cabecera.php');
include_once ('../view/hoteles.php');
include_once ('../view/pie.php');