<?php 
session_start();

if(!isset($_SESSION["login"])){
    header("Location:login.php");
    exit;
}
require '../fw/fw.php'; //aca van a estar todos los requires del framework
require '../models/Productos.php';
require '../models/Proveedores.php';
require '../views/FormBajaProvisto.php';
require '../views/FormConfirmarBajaProvisto.php';
require '../views/BajaProvistoOk.php';



if(isset($_POST['cuit'])){ //solo mandé esto,ahora tengo q acceder
    //faltan los demás issets
    if(isset($_POST['codigo_producto'])){ //solo mandé esto,ahora tengo q acceder
        //faltan los demás issets HACER ESTE ORDEN!
    
        if(!isset($_POST['cuit'])) die("cuit no esta");
        $a=new Productos;
        $a->bajaProvisto($_POST['cuit'],$_POST['codigo_producto']);
        $m=new BajaProvistoOk;
        $m->render();
    
        exit;
    }
    
    $a=new Productos;
    $todos1=$a->productoDeProveedor($_POST['cuit']);

    $e=new Proveedores;
    $todos2=$e->proveedorEspecifico($_POST['cuit']);

    $b=new FormConfirmarBajaProvisto;
    $b->productos=$todos1;
  //-----------
    $b->proveedores=$todos2;
    $b->render();

    exit;
}

$e=new Proveedores;
$todos=$e->getTodos(); //aca tengo la info del proveedor
$v=new FormBajaProvisto; //controlador manda datos a la vista
$v->proveedores=$todos; 
$v->render(); //permite q se dibuje en el navegador
    

 ?>