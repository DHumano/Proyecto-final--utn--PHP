
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
		<h3 class="panel-title">productos</h3>
	</div>
	<table class="table">
        <tr><th>codigo</th>
            <th>nombre</th>
            <th>precio</th>
            <th>punto de reposición</th>
            <th>stock</th>
            <th>pedir stock</th>
            <th>editar producto</th>
        </tr>
		<?php 
			foreach ($this->Bproductos as $e) { ?>
				<tr>
                    <td><?= $e['codigo_producto']?></td>
                    <td><?= $e['nombre']?></td>
					<td><?= $e['precio_venta']?></td>
					<td><?= $e['pto_reposicion']?></td>
					<td><?= $e['stock']?></td>
					<?php if($e['stock']<=$e['pto_reposicion'])  {?>
						<td><a href="altapedido.php">Pedir stock</a></td>
					<?php }
					else {?>
					 <td> no necesita </td>
					 <?php } ?>
					 <form action="modificarproducto.php" method ="post">
						 <td>
							 <input type="hidden" name="codigo_producto" value="<?= $e['codigo_producto']?>">
							 <input type="submit">
						</td>
					 </form>
					
				</tr>
			
		 <?php } ?>

         
	</table>
	</div>
</div>
<?php 

require '../html/partials/footer.php';

?>