
<?php 

require '../html/partials/header.php';

?>
<div class="container">
<ul class="nav nav-pills nav-justified">
  <li role="presentation" class="active">
    <a class="btn btn-primary btn-lg color" href="../controllers/crearproducto.php">Alta de producto</a>
  </li>
	<li role="presentation">
		<a class="btn btn-primary btn-lg color" href="javascript:history.go(-1)">Volver atrás</a>
	</li>
</ul>


	<div class="panel panel-info">

	<div class="panel-heading">
		<h3 class="panel-title">Alta de producto</h3>
	</div>
	</div>
	<form action="" method="post">
	<div class="container">
    <div class="row">
        <div class="col-lg-6">
        <div class="input-group">
        <span class="input-group-btn">
            <label class="btn btn-default" for="n">Nombre:</label>
		</span>
	<input class="form-control" type="text" name="nombre" id="n">
		</div>
        </div>
    </div>
	<div class="row">
        <div class="col-lg-6">
        <div class="input-group">
        <span class="input-group-btn">
            <label class="btn btn-default" for="c">Categoria:</label>
		</span>
	<select class="form-control" name="categoria" id="c">
		<?php foreach($this->categorias as $c){ ?>
		<option value="<?=$c['id_categoria'] ?>"><?=$c['nombre'] ?></option>
		<?php }?>
	</select>
		</div>
        </div>
	</div>
	<div class="row">
        <div class="col-lg-6">
        <div class="input-group">
        <span class="input-group-btn">
            <label class="btn btn-default" for="p">Precio:</label>
		</span>
	<input class="form-control" type="text" name="precio" id="p">
		</div>
        </div>
	</div>
	<div class="row">
        <div class="col-lg-6">
        <div class="input-group">
        <span class="input-group-btn">
            <label class="btn btn-default" for="s">Stock:</label>
		</span>
	<input class="form-control" type="text" name="stock" id="s">
		</div>
        </div>
	</div>
	<div class="row">
        <div class="col-lg-6">
        <div class="input-group">
        <span class="input-group-btn">
            <label class="btn btn-default" for="pr">Punto reposicion:</label>
		</span>
	<input class="form-control" type="text" name="pto_reposicion" id="pr">
		</div>
        </div>
    </div>
    
	<br>
	
	<button class="btn btn-button">Crear</button>
	</div>
	</form>
	<br>

</div>
<?php 

require '../html/partials/footer.php';

?>