
<?php 

require '../html/partials/header.php';

?>
<div class="container">
<ul class="nav nav-pills  nav-justified">
  <li role="presentation" class="active"><a href="../controllers/crearproveedor.php">Alta de proveedor</a></li>
  <li role="presentation"><a href="javascript:history.go(-1)">Volver atrás</a></li>
</ul>

	<h1>Alta de proveedor</h1>
	<form action="" method="post">
	<label for="n">razon:</label>
	<input type="text" name="razon_social[]" id="n">
	<input type="text" name="cuit[]" id="n">
	<br>

	<label for="n2">razon:</label>
	<input type="text" name="razon_social[]" id="n2">
	<input type="text" name="cuit[]" id="n2">
	<br>

	<input type="submit" value="crear">

	</form>

</div>
<?php 

require '../html/partials/footer.php';

?>