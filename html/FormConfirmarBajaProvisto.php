<?php 

require '../html/partials/header.php';

?>
<div class="container">
<ul class="nav nav-pills  nav-justified">
  <li role="presentation" class="active"><a class="btn btn-primary btn-lg color"  href="../controllers/verproductos.php">lista de proveedores</a></li>
  <li role="presentation"><a class="btn btn-primary btn-lg color" href="javascript:history.go(-1)">Volver atrás</a></li>
</ul>


    <div class="panel panel-info">

    <div class="panel-heading">
        <h3 class="panel-title">producto</h3>
    </div>
    </div>
    <form action="" method="POST">
        <div class="col-lg-6">
        <div class="input-group">
        <span class="input-group-btn">
            <label class="btn btn-default" for="nombre">nombre producto</label>
        </span>
            <select class="form-control" name="codigo_producto" id="nombre">
		    <?php 
			foreach ($this->productos as $p) { ?>
                <option value="<?= $p['codigo_producto']?>"><?= $p['nombre']?></option>
		    <?php } ?>  
            </select>
            <input type="hidden" value="<?= $this->proveedores['cuit']?>" name="cuit">
        </div>
        </div>
        <br>
        <br>
        <input type="submit">
    </form>
</div>
<?php    //esto tengo q ponerlo en otro formulario, y mandarlo a MODIFICACION OK!

require '../html/partials/footer.php';

?>