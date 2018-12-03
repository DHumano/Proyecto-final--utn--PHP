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
require '../views/FormAltaProveedor.php';
require '../views/AltaProveedorOk.php';

if(isset($_POST['razon_social'])){

    if(!isset($_POST['direccion'])) die("error");
    if(!isset($_POST['p_contacto'])) die("error");
    if(!isset($_POST['email'])) die("error");
    if(!isset($_POST['telefono'])) die("error");
    //aca van todas las sinoexiste

    $e=new Proveedores;
    $e->altaProveedor($_POST['cuit'],$_POST['razon_social'],$_POST['p_contacto'],$_POST['direccion'],$_POST['email'],$_POST['telefono']);

    $ok=new AltaProveedorOk;
    $ok->render();
    exit;

}

$v=new FormAltaProveedor; //controlador manda datos a la vista
$v->render(); //permite q se dibuje en el navegador

 ?>