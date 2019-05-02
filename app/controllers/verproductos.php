<?php 


session_start();

if(!isset($_SESSION["login"])){
    header("Location:login.php");
    exit;
}


require '../fw/fw.php'; //aca van a estar todos los requires del framework
require '../models/Productos.php';
require '../views/ListaProductos.php';


$e=new Productos;  //controlador pide datos a modelo
$todos=$e->getTodos();


$v=new ListaProductos; //controlador manda datos a la vista
$v->productos=$todos; // le doy a la variable productos de la vista, el valor $todos
$v->render(); //permite q se dibuje en el navegador



 ?>