<?php 

require '../html/partials/header.php';

?>
<div class="container">
<ul class="nav nav-pills  nav-justified">
  <li role="presentation" class="active"><a class="btn btn-primary btn-lg color" href="#">Editar proveedor</a></li>
  <li role="presentation"><a class="btn btn-primary btn-lg color" href="../html/proveedores.php">Volver a proveedores</a></li>
</ul>


    <div class="panel panel-info">

    <div class="panel-heading">
        <h3 class="panel-title">Editar proveedor</h3>
    </div>
    <form action="" method="post">
	    <table class="table">
            <tr>
                <th>Razon social</th>
                <th>Cuit</th>
                <th>Persona de contacto</th>
                <th>Direccion</th>
                <th>Email</th>
                <th>Telefono</th>
            </tr>
			<tr> 
                <td><input style="width:95px"  type="text" value="<?= $this->proveedor['razon_social']?>" name="razon_social"></td>
                <td><input style="width:95px"  type="text" value="<?= $this->proveedor['cuit']?>" name="cuit"></td>
                <td><input style="width:95px"  type="text" value="<?= $this->proveedor['persona_de_contacto']?>" name="persona_de_contacto"></td>
                <td><input type="text" value="<?= $this->proveedor['direccion']?>" name="direccion"></td>
                <td><input type="text" value="<?= $this->proveedor['email']?>" name="email"></td>
                <td><input style="width:95px"  type="text" value="<?= $this->proveedor['telefono']?>" name="telefono"></td>
			</tr>
        </table>
    </div>
    <input type="submit">
    </form>
</div>
<?php    //esto tengo q ponerlo en otro formulario, y mandarlo a MODIFICACION OK!

require '../html/partials/footer.php';

?>