
<?php include 'layouts/head.php';  ?>
<?php include 'operacion.php' ?>
<!-- Esta parte es codigo -->
<div class="jumbotron">
  <h1 class="display-4">Bienvenidos a University</h1>
  <p class="lead">Educando con Amor</p>
  <hr class="my-4">
  <p>Superate Hoy</p>


  <p class="lead">
    <a class="btn btn-primary btn-sm" href="#" role="button">Mas..</a>
  </p>
</div>
<?php echo 'este es una Suma : '.$suma; ?>
<p></p>
<?php var_dump($arreglo); ?>
<ul>
  <?php foreach ($arreglo as $item): ?>
  <li><?php echo $item; ?></li>
  <?php endforeach; ?>
</ul>

<?php print_r($arreglo);
?>
<br>
<?php echo '$'. number_format($arreglo['pesos'],'2','.',','); ?>
<?php if ($arreglo['sexo']==true): ?>
  <label for="">Cool</label>
  <?php else: ?>
    <label for="">PFFFF</label>
<?php endif; ?>
<!-- esta parte es codigo -->

<?php
$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);

print_r($flipped);
echo '<br/>';
$dosarray=array_merge($input,$arreglo);
print_r($dosarray);
echo '<br/>';
$arraytres=array_reverse($dosarray);
print_r($arraytres);

$fecha=date('d-F-Y');
echo $fecha;
?>
<?php include'layouts/footer.php'; ?>
