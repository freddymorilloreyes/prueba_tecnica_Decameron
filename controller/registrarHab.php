<?php

require_once('../model/HabitacionModel.php');
$hotel_id=$_POST['hotel_id'];
$habModel= new HabitacionModel($hotel_id);
$nuevoRegistro=[];
$nuevoRegistro['tipo_id']=$_POST['tipo'];
$nuevoRegistro['acomodacion_id']=$_POST['acomodacion'];
for ($i=0;$i<$_POST['cantidad'];$i++){
    $habModel->saveHabitacion($nuevoRegistro);
}
header('location: adminhabitacion.php?hotel='.$hotel_id);