
<?php 

require '../html/partials/header.php';

?>

<div class="container">
<ul class="nav nav-pills  nav-justified">
  <li role="presentation" class="active"><a class="btn btn-primary btn-lg color" href="../controllers/buscarproducto.php">Búsqueda de producto</a></li>
  <li role="presentation"><a class="btn btn-primary btn-lg color" href="javascript:history.go(-1)">Volver atrás</a></li>
</ul>
    
    <div class="panel panel-info">

        <div class="panel-heading">
            <h3 class="panel-title">búsqueda de productos</h3>
        </div>
    </div>
        <form action="" method="post">
            <!-- <input type="text" name="busqueda"> -->
            <div class="col-lg-6">
            <div class="input-group">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Buscar Producto</button>
            </span>
            <input type="text" name="busqueda" class="form-control" placeholder="buscar producto...">
            </div><!-- /input-group -->
            </div><!-- /input-group -->
        </form>



</div>
<?php 

require '../html/partials/footer.php';

?>