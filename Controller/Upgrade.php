<?php

require_once '../Model/config.php';
require_once '../Model/CineModel.php';

$idcartelera=$_POST['Id'];
$pelicula=$_POST['peliculae'];
$descripcion=$_POST['descripcion'];
$horario=$_POST['horario'];

 $query='update cartelera set pelicula="'.$pelicula.'",descripcion="'.$descripcion.'",horario="'.$horario.'" where Id='.$id.';';


$update=CineModel::Updatecartelera($query);
if ($update) {
  Header('Location:Operation.php');
}
