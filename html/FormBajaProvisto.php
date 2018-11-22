<?php 

require '../html/partials/header.php';

?>
<div class="container">
<ul class="nav nav-pills  nav-justified">
  <li role="presentation" class="active"><a class="btn btn-primary btn-lg color" href="bajaproductoprovisto.php">Baja de producto proveido</a></li>
  <li role="presentation"><a class="btn btn-primary btn-lg color" href="javascript:history.go(-1)">Volver atrás</a></li>
</ul>


    <div class="panel panel-info">

    <div class="panel-heading">
        <h3 class="panel-title">producto</h3>
    </div>
    </div>
    <form action="" method="post">
        <div class="col-lg-6">
        <div class="input-group">
        <span class="input-group-btn">
            <label class="btn btn-default" for="razon">razon social</label>
        </span>
            <select class="form-control" name="cuit" id="razon">
            <?php 
			foreach ($this->proveedores as $e) { ?>
                <option value="<?= $e['cuit']?>"><?= $e['razon_social']?></option>
		    <?php } ?>
            </select>
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