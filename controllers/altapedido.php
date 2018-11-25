<?php 
session_start();

if(!isset($_SESSION["login"])){
    header("Location:login.php");
    exit;
}
require '../fw/fw.php'; //aca van a estar todos los requires del framework
require '../models/Productos.php';
require '../models/Proveedores.php';
require '../views/FormAltaPedido.php';
require '../models/Pedidos.php';
require '../views/AltaPedidoOk.php';

//producto[] , proveedor[], precio[], cantidad[]
//el proveedor va para pedido,agregar una fecha del pedido, nro pedido es id,, que pedidos tiene un proveedor!

if(isset($_POST['producto'])){
    if(!isset($_POST['precio'])) die("error");
    if(!isset($_POST['cantidad'])) die("error");
    
	
    foreach ($_POST['producto'] as $key => $value) {
        //if(!ctype_digit($_POST['cantidad'][$key])) die("error cantidad");		
        //if($_POST['cantidad'][$key]>0){
            $e=new Pedidos;
            $e->altaPedido($value,$_POST['precio'][$key],$_POST['cantidad'][$key],$_POST['proveedor'][$key]);
           // }
    }

    $ok=new AltaPedidoOk;
    $ok->render();
    exit;
    
}




$v=new FormAltaPedido; //controlador manda datos a la vista
$v->productos=(new Productos)->getTodos(); // le doy a la variable productos de la vista, el valor $todos
$v->proveedores=(new Proveedores)->getTodos(); // le doy a la variable productos de la vista, el valor $todos
$v->render(); //permite q se dibuje en el navegador



 ?>