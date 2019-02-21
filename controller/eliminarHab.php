<?php

require_once('../model/HabitacionModel.php');

$hotel_id=$_POST['hotel_id'];
$nuevoRegistro=[];
$nuevoRegistro['tipo_id']=$_POST['tipo_id'];
$nuevoRegistro['acomodacion_id']=$_POST['acomodacion_id'];
$habModel= new HabitacionModel($hotel_id);
$habModel->eliminarHabitacion($nuevoRegistro);
