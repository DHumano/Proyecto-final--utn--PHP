<?php 
session_start();
require '../html/partials/header.php';

?>

<div class="container">
<ul class="nav nav-pills nav-justified">
  <li role="presentation">
    <a class="btn btn-primary btn-lg color" href="../controllers/crearproducto.php">Alta de producto</a>
  </li>
  <li role="presentation">
    <a class="btn btn-primary btn-lg color" href="../controllers/buscarproducto.php">Búsqueda de producto</a>
  </li>
</ul>
</div>
<?php 

require '../html/partials/footer.php';

?>