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
require '../models/Proveedores.php';
require '../views/BusquedaProveedores.php';
require '../views/FormBusquedaProveedor.php';

if(isset($_POST['busqueda'])){

//validaciones aca
    if(!isset($_POST['busqueda'])) die("debe ingresar término a buscar");

    $e=new Proveedores;  //controlador pide datos a modelo
    //$e->busquedaproducto($_POST['busqueda']);
    //$todos=$e->getTodos();
    $todos=$e->busquedaProveedor($_POST['busqueda']);

    $v=new BusquedaProveedores; //controlador manda datos a la vista
    $v->Bproveedores=$todos; // le doy a la variable productos de la vista, el valor $todos
    $v->render(); //permite q se dibuje en el navegador
    exit;  //faltaba esto!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
}


$v=new FormBusquedaProveedor; //controlador manda datos a la vista
//$v->cargos=(new Cargos)->getTodos(); // le doy a la variable productos de la vista, el valor $todos
$v->render(); //permite q se dibuje en el navegador



 ?>