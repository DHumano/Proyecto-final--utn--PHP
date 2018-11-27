<?php 

require '../html/partials/header.php';

?>
<div class="container">
<ul class="nav nav-pills  nav-justified">
  <li role="presentation" class="active"><a class="btn btn-primary btn-lg color" href="../controllers/verproductos.php">Alta de pedido</a></li>
  <li role="presentation"><a class="btn btn-primary btn-lg color" href="../html/productos.php">Volver a productos</a></li>
</ul>

    <div class="panel panel-info">

    <div class="panel-heading">
        <h3 class="panel-title">Alta de pedido</h3>
    </div>
    <button id="agregar">agregar producto</button>
    <form action="" method="post">
	<table class="table" id="table">
        <thead>
        <tr>
            <th>nombre</th>
            <th>Seleccionar proveedor</th>
            <th>seleccionar cantidad</th>
            <th>precio de compra</th>
            <th>precio x cantidad</th>
        </tr>
        </thead>
        <tbody id="">
				<tr id="tr1">
                    <td> 
                        <select name="producto[]" id="producto1">
                            <?php 
                            foreach ($this->productos as $e) { ?>
                            <option value="<?= $e['codigo_producto']?>"><?= $e['nombre']?></option>
                            <?php } ?>
                        </select> 
                    </td>
                    <td>
                        <select name="proveedor[]" id="proveedor1">
                        </select>
                    </td>
                    <td>
                        <input style="width:55px" type="text" value='0' name="cantidad[]" id="cantidad1" required  pattern="^[1-9][0-9]*$" oninput="check(this)">
                    </td>
                    <td>
                        <div name="precio[]" id="precio1">
                        </div>
                    </td>
                    <td> <input style="width:55px" type="text" value=0 id="prexcant1" name="precio[]" ></td>
                </tr>
                <tr id="tr2">
                <td> 
                        <select name="producto[]" id="producto2">
                            <?php 
                            foreach ($this->productos as $e) { ?>
                            <option value="<?= $e['codigo_producto']?>"><?= $e['nombre']?></option>
                            <?php } ?>
                        </select> 
                    </td>
                    <td>
                        <select name="proveedor[]" id="proveedor2">
                        </select>
                    </td>
                    <td>
                        <input style="width:55px" type="text" value='0'  name="cantidad[]" id="cantidad2"  oninput="check(this)">
                    </td>
                    <td>
                        <div id="precio2">
                        </div>
                    </td>
                    <td> <input style="width:55px" type="text" value=0 id="prexcant2" name="precio[]" ></td>
                </tr>
                <tr id="tr3">
                <td> 
                        <select name="producto[]" id="producto3">
                            <?php 
                            foreach ($this->productos as $e) { ?>
                            <option value="<?= $e['codigo_producto']?>"><?= $e['nombre']?></option>
                            <?php } ?>
                        </select> 
                    </td>
                    <td>
                        <select name="proveedor[]" id="proveedor3">
                        </select>
                    </td>
                    <td>
                        <input style="width:55px" type="text" value=0 name="cantidad[]" id="cantidad3"  oninput="check(this)">
                    </td>
                    <td>
                        <div id="precio3">
                        </div>
                    </td>
                <td> <input style="width:55px" type="text" value=0 id="prexcant3" name="precio[]"></td>                
            </tr>
            <tr id="tr4">
                <td> 
                        <select name="producto[]" id="producto4">
                            <?php 
                            foreach ($this->productos as $e) { ?>
                            <option value="<?= $e['codigo_producto']?>"><?= $e['nombre']?></option>
                            <?php } ?>
                        </select> 
                    </td>
                    <td>
                        <select name="proveedor[]" id="proveedor4">
                        </select>
                    </td>
                    <td>
                        <input style="width:55px" type="text" value=0  name="cantidad[]" id="cantidad4"  oninput="check(this)">
                    </td>
                    <td>
                        <div  id="precio4">
                        </div>
                    </td>
                    <td> <input style="width:55px" type="text" value=0 id="prexcant4" name="precio[]"></td>                
                </tr>
                <tr id="tr5">
                <td> 
                        <select name="producto[]" id="producto5">
                            <?php 
                            foreach ($this->productos as $e) { ?>
                            <option value="<?= $e['codigo_producto']?>"><?= $e['nombre']?></option>
                            <?php } ?>
                        </select> 
                    </td>
                    <td>
                        <select name="proveedor[]" id="proveedor5">
                        </select>
                    </td>
                    <td>
                        <input style="width:55px" type="text" value=0  name="cantidad[]" id="cantidad5"  oninput="check(this)">
                    </td>
                    <td>
                        <div id="precio5">
                        </div>
                    </td>
                    <td> <input style="width:55px" type="text" value=0 id="prexcant5" name="precio[]"></td>                
                </tr>

        </tbody>	
    </table>
    <h2 id="total">precio total=</h2>
    
    <button>comprar</button>
    </form>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="../js/pedido.js"></script>
<script>

 function check(input) {
   if (input.value == 0 && input.style.display!='none') {
     input.setCustomValidity('Ingrese un valor mayor a 0. máx 999');
     //input.setAttribute('pattern', "^[1-9][0-9]*$");
   } else {
     // input is fine -- reset the error message    pattern="^[1-9][0-9]*$" 
     input.setCustomValidity('');
   }
 }

</script>
<?php 

require '../html/partials/footer.php';

?>