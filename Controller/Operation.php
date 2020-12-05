<?php include '../layouts/head.php'; ?>
<?php
require_once '../Model/config.php';
require_once '../Model/CineModel.php';


$Cine=CineModel::ListaCine();

if (isset($Cine)) {


}
else{

}
 ?>
<div class="row justify-content-left mt-3">
  <div class="container">
    <a href="../index.php" class="btn btn-sm btn-outline-primary">Carteleras/a>
  </div>

</div>
<div class="row justify-content-center">


  <div class="col-md-10 mt-4">
    <table class="table table-striped table-hover table-sm">
      <thead>
        <tr>
          <th>Id</th>
          <th>Pelicula</th>
          <th>Descripcion</th>
          <th>Horario</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($Cine as $c): ?>
          <tr>
            <td><?php echo $c[0]; ?></td>
            <td><?php echo $c[1]; ?></td>
            <td><?php echo $c[2]; ?></td>
            <td><?php echo $c[3];?></td>


            </form>

          </td>
          </tr>
        <?php endforeach; ?>

      </tbody>
    </table>
  </div>
</div>


<?php include '../Layouts/footer.php'; ?>
