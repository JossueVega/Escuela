
<?php include 'layouts/head.php';  ?>

<!-- Esta parte es codigo -->
<!--<div class="jumbotron">
  <h1 class="display-4">Bienvenidos a University</h1>
  <p class="lead">Educando con Amor</p>
  <hr class="my-4">
  <p>Superate Hoy</p>


  <p class="lead">
    <a class="btn btn-primary btn-sm" href="#" role="button">Mas..</a>
  </p>
</div> -->
<section>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="resources/img/Promo1.jpg" class="d-block w-100 carh" alt="...">
              </div>
              <div class="carousel-item">
                <img src="resources/img/Promo2.jpg" class="d-block w-100 carh" alt="...">
              </div>
              <div class="carousel-item">
                <img src="resources/img/Promo3.jpg" class="d-block w-100 carh" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </section>


  <?php include 'Controller/Operation.php' ?>

<?php include'layouts/footer.php'; ?>
