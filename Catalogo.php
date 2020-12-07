<?php include 'layouts/head.php'; ?>

<div class="row justify-content-center">
  <div class="col-md-5">
    <div class="card">
      <div class="card-header bg-dark py-1">
          <h6 class="text-white">Peliculas en escibicion</h6>
      </div>
      <div class="card-body">
        <form class="" action="Controller/Save.php" method="post">
          <div class="form-group">
            <label class="col-sm-6 col-form-label" for="pelicula">Pelicula</label>
            <div class="col-sm-12">
              <input type="text" name="pelicula" value="" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-6 col-form-label" for="descripcion">Descripcion</label>
            <div class="col-sm-12">
              <input type="text" name="descripcion" value="" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-6 col-form-label" for="horario">Horario</label>
            <div class="col-sm-12">
              <input type="text" name="horario" value="" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="row justify-content-center">
              <input type="submit" name="submit" value="Enviar" class="btn btn-primary btn-sm">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include 'layouts/footer.php'; ?>
