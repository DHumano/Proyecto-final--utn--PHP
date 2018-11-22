<?php 
session_start();

if(!isset($_SESSION["login"])){
    header("Location:login.php");
    exit;
}
require '../fw/fw.php'; //aca van a estar todos los requires del framework
require '../models/Productos.php';
require '../models/Categorias.php';
require '../views/FormAltaProducto.php';
require '../views/AltaProductoOk.php';

if(isset($_POST['nombre'])){

    if(!isset($_POST['categoria'])) die("error");
    if(!isset($_POST['precio'])) die("error");
    if(!isset($_POST['stock'])) die("error");
    if(!isset($_POST['pto_reposicion'])) die("error");

    $e=new Productos;
    $e->altaProducto($_POST['nombre'],$_POST['categoria'],$_POST['precio'],$_POST['stock'], $_POST['pto_reposicion']);

    $ok=new AltaProductoOk;
    $ok->render();
    exit;



}

$v=new FormAltaProducto; //controlador manda datos a la vista
$v->categorias=(new Categorias)->getTodos(); // le doy a la variable productos de la vista, el valor $todos
$v->render(); //permite q se dibuje en el navegador



 ?>