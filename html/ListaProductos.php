
<?php 

require '../html/partials/header.php';

?>
<div class="container">
<ul class="nav nav-pills  nav-justified">
  <li role="presentation" class="active"><a class="btn btn-primary btn-lg color" href="../controllers/verproductos.php">lista de productos</a></li>
  <li role="presentation"><a class="btn btn-primary btn-lg color" href="../html/informesprodprov.php">Volver atrás</a></li>
</ul>

    <div class="panel panel-info">

        <div class="panel-heading">
            <h3 class="panel-title">producto</h3>
        </div>

	    <table class="table">
        <tr><th>codigo</th>
            <th>nombre</th>
            <th>precio</th>
            <th>categoria</th>
            <th>stock</th>
        </tr>
		<?php 
			foreach ($this->productos as $e) { ?>
				<tr>
                    <td><?= $e['codigo_producto']?></td>
                    <td><?= $e['nombre']?></td>
					<td><?= $e['precio_venta']?></td>
					<td><?= $e['id_categoria']?></td>
					<td><?= $e['stock']?></td>
                    <td><a href="verproveedoresdeprod.php?busqueda=<?= $e['codigo_producto']?>">ver proveedores</a></td>
				</tr>
			
		 <?php } ?>

         
		 </table>
	</div>
</div>
<?php 

require '../html/partials/footer.php';

?>