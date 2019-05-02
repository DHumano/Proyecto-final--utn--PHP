<?php 
session_start();

if(!isset($_SESSION["login"])){
    header("Location:login.php");
    exit;
}
require '../fw/fw.php'; //aca van a estar todos los requires del framework
require '../models/Productos.php';
require '../models/Categorias.php';
require '../views/FormModificacionProducto.php';
require '../views/ModificacionProductoOk.php';


if(isset($_POST['codigo_producto'])){ //solo mandé esto,ahora tengo q acceder

    
    if(isset($_POST['nombre'])){
        //validaciones !isset
        if(!isset($_POST['categoria'])) die("error");
        if(!isset($_POST['precio'])) die("error");
        if(!isset($_POST['stock'])) die("error");
        if(!isset($_POST['pto_reposicion'])) die("error");
        
         $f=new Productos;
         $f->modificacionProducto($_POST['nombre'],$_POST['codigo_producto'],$_POST['categoria'],$_POST['precio'],$_POST['stock'],$_POST['pto_reposicion']);
         $m=new ModificacionProductoOk;
         $m->render();
         exit;
    }

    //if(!isset($_POST['codigo_producto'])) die("error");
    $e=new Productos;
    $todos=$e->productoEspecifico($_POST['codigo_producto']); //aca tengo la info del producto
    //var_dump($todos);
    //
    $v=new FormModificacionProducto; //controlador manda datos a la vista
    $v->producto=$todos; // le doy a la variable productos de la vista, el valor $todos
    $v->categoria=(new Categorias)->getTodos();
    //var_dump($v);
    $v->render(); //permite q se dibuje en el navegador
    //aca le mando la info de ese producto a la pantalla,

    //faltan demás validaciones

    exit;
}


 ?>