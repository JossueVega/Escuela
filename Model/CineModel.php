<?php
 /**
  *
  */
 class CineModel
 {

   public function ListaCine()
   {

     global $db;
     $query="select * from cartelera";
     $consulta=$db->query($query);
     $lineas=$consulta->fetch_All();
     // All

     if (isset($lineas)) {
       return $lineas;
     }

   else {
     return false;
   }
   }

   public function Addcartelera($query){
     global $db;

     $consulta=$db->query($query);

     if ($consulta) {
       return true;
     }
   }

   public function Editcartelera($query){
     global $db;

     $consulta=$db->query($query);
     $linea=$consulta->fetch_object();
     if (isset($linea)) {
        return $linea;
     }
     else{
       return false;
     }
   }

   public function Updatecartelera($query)
   {
     global $db;

     $consulta=$db->query($query);
     if ($consulta) {
       return true;
     }
     else{
       return false;
     }
   }

   public function Delete($query)
   {
     global $db;
     $consulta=$db->query($query);
     if ($consulta) {
       return true;
     }
     else{
       return false;
     }
   }
}


 ?>
