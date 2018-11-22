
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
        <tr><th>razon social</th>
            <th>Precio</th>
            <th>direccion</th>
            <th>email</th>
            <th>telefono</th>
        </tr>
		<?php 
			foreach ($this->Bproveedores as $e) { ?>
				<tr>
                    <td><?= $e['razon_social']?></td>
                    <td><?= $e['precio_compra']?></td>
                    <td><?= $e['direccion']?></td>
                    <td><?= $e['direccion']?></td>
                    <td><?= $e['email']?></td>
					<td><?= $e['telefono']?></td>
				</tr>
			
		 <?php } ?>

         
	</table>
    </div>
</div>
<?php 

require '../html/partials/footer.php';

?>