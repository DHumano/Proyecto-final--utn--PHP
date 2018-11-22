<?php 
session_start();

if(!isset($_SESSION["login"])){
    header("Location:login.php");
    exit;
}
require '../fw/fw.php'; //aca van a estar todos los requires del framework
require '../models/Productos.php';
require '../views/BusquedaProductos.php';
require '../views/FormBusquedaProducto.php';

if(isset($_POST['busqueda'])){

//validaciones aca
    if(!isset($_POST['busqueda'])) die("error");

    $e=new Productos;  //controlador pide datos a modelo
    //$e->busquedaproducto($_POST['busqueda']);
    //$todos=$e->getTodos();
    $todos=$e->busquedaProducto($_POST['busqueda']);

    $v=new BusquedaProductos; //controlador manda datos a la vista
    $v->Bproductos=$todos; // le doy a la variable productos de la vista, el valor $todos
    $v->render(); //permite q se dibuje en el navegador
    exit;  //faltaba esto!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
}


$v=new FormBusquedaProducto; //controlador manda datos a la vista
//$v->cargos=(new Cargos)->getTodos(); // le doy a la variable productos de la vista, el valor $todos
$v->render(); //permite q se dibuje en el navegador



 ?>