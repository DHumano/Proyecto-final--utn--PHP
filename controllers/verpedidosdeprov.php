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
require '../models/Pedidos.php';
require '../views/VerPedidosDeProv.php';

if(isset($_GET['busqueda'])){

//validaciones aca
    if(!isset($_GET['busqueda'])) die("error");

    $e=new Pedidos;  //controlador pide datos a modelo
    //$e->busquedaproducto($_GET['busqueda']);
    //$todos=$e->getTodos();
    $todos=$e->pedidosDeProveedores($_GET['busqueda']);

    $v=new VerPedidosDeProv; //controlador manda datos a la vista
    $v->Bproveedores=$todos; // le doy a la variable productos de la vista, el valor $todos
    $v->render(); //permite q se dibuje en el navegador
    
    exit;  //faltaba esto!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
}



 ?>