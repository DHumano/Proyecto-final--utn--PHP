<?php 
session_start();

if(!isset($_SESSION["login"])){
    header('Refresh:0; url=login.php');
    echo "<script>";
    echo " alert('Debe loguearse para poder acceder a nuestras funciones');
        </script>";
    exit;
}
require '../fw/fw.php'; //aca van a estar todos los requires del framework
require '../models/Productos.php';
require '../models/Proveedores.php';
require '../views/FormAltaProvisto.php';
require '../views/AltaProvistoOk.php';


if(isset($_POST['cuit'])){ //solo mandé esto,ahora tengo q acceder
    

    if(!isset($_POST['codigo_producto'])) die("error");
    $e=new Productos;
    $e->altaProvisto($_POST['cuit'],$_POST['codigo_producto'],$_POST['precio']);
    $p=new AltaProvistoOk;
    $p->render();

     exit;
}
    $e=new Proveedores;
    $todos=$e->getTodos(); //aca tengo la info del proveedor
    $v=new FormAltaProvisto; //controlador manda datos a la vista
    $v->proveedores=$todos; // le doy a la variable proveedors de la vista, el valor $todos
    $v->productos=(new Productos)->getTodos();
    $v->render(); //permite q se dibuje en el navegador

 ?>