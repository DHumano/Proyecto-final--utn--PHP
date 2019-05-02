
<?php 

require '../html/partials/header.php';

?>
<div class="container">
<ul class="nav nav-pills  nav-justified">
  <li role="presentation" class="active"><a class="btn btn-primary btn-lg color" href="../controllers/crearproveedor.php">Alta de proveedor</a></li>
  <li role="presentation"><a class="btn btn-primary btn-lg color" href="javascript:history.go(-1)">Volver atrás</a></li>
</ul>
<div class="panel panel-info">

        <div class="panel-heading">
            <h3 class="panel-title">Alta de proveedor</h3>
        </div>
    </div>
	<form action="" method="post">
	<div class="container">
	<div class="row">
		<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-btn">
				<label class="btn btn-default" for="r">Razon social:</label>
			</span>
			<input type="text" class="form-control" name="razon_social" id="r">
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-btn">
				<label class="btn btn-default" for="c">Cuit:</label>
			</span>
			<input type="text" class="form-control" name="cuit" id="c">
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-btn">
				<label class="btn btn-default" for="pc">Persona de contacto:</label>
			</span>
			<input type="text" class="form-control" name="p_contacto" id="pc">
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-btn">
				<label class="btn btn-default" for="d">Direccion:</label>
			</span>
			<input type="text" class="form-control" name="direccion" id="d">
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-btn">
				<label class="btn btn-default" for="e">Email:</label>
			</span>
			<input type="email" class="form-control" name="email" id="e">
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-btn">
				<label class="btn btn-default" for="t">Telefono:</label>
			</span>
			<input type="text" class="form-control" name="telefono" id="t">
		</div>
		</div>
	</div>

		<br>
		
		<input class="btn btn-button" type="submit" value="crear">
	</div>
	</form>
	<br>

</div>
<?php 

require '../html/partials/footer.php';

?>