<?php 

require '../html/partials/header.php';

?>
<div class="container">
<ul class="nav nav-pills  nav-justified">
  <li role="presentation" class="active"><a class="btn btn-primary btn-lg color" href="../controllers/verproductos.php">Editar producto</a></li>
  <li role="presentation"><a class="btn btn-primary btn-lg color" href="../html/productos.php">Volver a productos</a></li>
</ul>


    <div class="panel panel-info">

    <div class="panel-heading">
        <h3 class="panel-title">Editar producto</h3>
    </div>
    <form action="" method="post">
	    <table class="table">
            <tr>
                <th>codigo producto</th>
                <th>Nombre</th>
                <th>Categoria actual</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Punto de reposicion</th>
            </tr>
			<tr> 
                 <td><input type="text" value="<?= $this->producto['codigo_producto']?>" name="codigo_producto"></td>
                <td><input type="text" value="<?= $this->producto['nombre']?>" name="nombre"></td>
                <td>
                	
                     <select name="categoria" id="c">
                        <?php foreach($this->categoria as $c){ 
                            if($this->producto['id_categoria']==$c['id_categoria']) { ?>
                                <option selected value="<?=$c['id_categoria'] ?>"><?=$c['nombre']?></option>
                            <?php } 
                            else if($this->producto['id_categoria']!=$c['id_categoria']) { ?>
                        <option value="<?=$c['id_categoria'] ?>"><?=$c['nombre'] ?></option>
                        <?php }}?>
	                 </select>
                </td>
                <td><input type="text" value="<?= $this->producto['precio_venta']?>" name="precio"></td>
                <td><input type="text" value="<?= $this->producto['stock']?>" name="stock"></td>
                <td><input type="text" value="<?= $this->producto['pto_reposicion']?>" name="pto_reposicion"></td>           
			</tr>
        </table>
    </div>
    <input type="submit">
    </form>
</div>
<?php    //esto tengo q ponerlo en otro formulario, y mandarlo a MODIFICACION OK!

require '../html/partials/footer.php';

?>