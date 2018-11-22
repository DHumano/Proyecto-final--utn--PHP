<?php 

require '../html/partials/header.php';

?>

<div class="container">
<ul class="nav nav-pills nav-justified">
  <li role="presentation">
    <a class="btn btn-primary btn-lg color" href="../controllers/crearproveedor.php">Alta de proveedor</a>
  </li>
  <li role="presentation">
    <a class="btn btn-primary btn-lg color" href="../html/provistos.php">Agregar o quitar productos a un proveedor</a>
  </li>
  <li role="presentation">
    <a class="btn btn-primary btn-lg color" href="../controllers/buscarproveedor.php">Buscar un proveedor</a>
  </li>
</ul>
</div>

<?php 

require '../html/partials/footer.php';

?>