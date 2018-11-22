
<?php 

require '../html/partials/header.php';

?>
<div class="container">
<ul class="nav nav-pills  nav-justified">
  <li role="presentation" class="active"><a class="btn btn-primary btn-lg color" href="../controllers/verproveedores.php">lista de proveedores</a></li>
  <li role="presentation"><a class="btn btn-primary btn-lg color" href="javascript:history.go(-1)">Volver atrás</a></li>
</ul>
    <div class="panel panel-info">

    <div class="panel-heading">
        <h3 class="panel-title">Proveedores</h3>
    </div>
	
	<table class="table">
        <tr><th>cuit</th>
            <th>razon social</th>
            <th>direccion</th>
            <th>email</th>
            <th>telefono</th>
            <th>ver pedidos</th>
        </tr>
		<?php 
			foreach ($this->proveedores as $e) { ?>
				<tr>
                    <td><?= $e['cuit']?></td>
                    <td><?= $e['razon_social']?></td>
                    <td><?= $e['direccion']?></td>
                    <td><?= $e['email']?></td>
					<td><?= $e['telefono']?></td>
					<td><a href="verpedidosdeprov.php?busqueda=<?= $e['cuit']?>">ver pedidos</a></td>
				</tr>
			
		 <?php } ?>

         
	</table>
    </div>
</div>
<?php 

require '../html/partials/footer.php';

?>