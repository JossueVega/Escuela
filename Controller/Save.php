<?php

require_once '../Model/config.php';
require_once '../Model/CineModel.php';

$pelicula=$_POST['pelicula'];
$descripcion=$_POST['descripcion'];
$horario=$_POST['horario'];

$query='insert into cartelera(pelicula,descripcion,horario) values("'.$pelicula.'","'.$descripcion.'","'.$horario.'")';
// insert into cafes(Name,Descripcion,Precio) values("nombre",'descripcion','23.00');

$cinemadb=CineModel::Addcartelera($query);
if ($cinemadb) {
  Header('Location: Operation.php');
}


 ?>
