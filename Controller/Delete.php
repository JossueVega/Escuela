<?php
require_once '../Model/config.php';
require_once '../Model/CineModel.php';

$id=$_POST['Id'];
$query='delete from cartelera where Id="'.$id.'";';
$success=CineModel::Delete($query);
if ($success) {
  Header('Location:Operation.php');
}

 ?>
