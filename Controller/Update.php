<?php include '../layouts/head.php'; ?>
<?php
require_once '../Model/config.php';
require_once '../Model/CineModel.php';

$id=$_GET['Id'];

$query='select * from cartelera where Id= '.$id.';';

$coffee=CineModel::Editcartelera($query);


 ?>
<div class="row justify-content-center">
  <div class="col-md-5">
    <div class="card">
      <div class="card-header bg-dark py-1">
          <h6 class="text-white">Actualizar CAFE</h6>
      </div>
      <div class="card-body">
        <form class="" action="Upgrade.php" method="post">
          <div class="form-group">
            <input type="hidden" name="Id" value="<?php echo $coffee->Id; ?>">
            <label class="col-sm-6 col-form-label" for="pelicula">Nombre de la funcion</label>
            <div class="col-sm-12">
              <input type="text" name="pelicula" value="<?php echo $coffee->pelicula ?>" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-6 col-form-label" for="descripcion">Descripcion</label>
            <div class="col-sm-12">
              <input type="text" name="descripcion" value="<?php echo $coffee->descripcion ?>" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-6 col-form-label" for="horario">Horario</label>
            <div class="col-sm-12">
              <input type="text" name="horario" value="<?php echo $coffee->horario?>" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="row justify-content-center">
              <input type="submit" name="submit" value="Actualizar" class="btn btn-primary btn-sm">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include '../layouts/footer.php'; ?>
