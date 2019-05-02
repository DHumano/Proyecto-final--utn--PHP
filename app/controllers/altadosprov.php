<?php 

require '../fw/fw.php'; //aca van a estar todos los requires del framework
require '../models/Proveedores.php';
require '../views/FormAltaProveedor2.php';
require '../views/AltaProveedorOk.php';

if(isset($_POST['razon_social'])){
    if(!isset($_POST['cuit'])) die("error");

    foreach ($_POST['razon_social'] as $key => $value) {
        //echo $value . "<br />".$_POST['cuit'][$key];
        $e=new Proveedores;
        $e->alta2Proveedor($value,$_POST['cuit'][$key]);
    }

    //foreach ($_POST['razon_social'] as $key) {
        //$e=new Proveedores;
        //$e->alta2Proveedor($_POST['razon_social'],$_POST['cuit']);
   // }    

    $ok=new AltaProveedorOk;
    $ok->render();
    exit;
    
}


$v=new FormAltaProveedor2; //controlador manda datos a la vista
$v->render(); //permite q se dibuje en el navegador



 ?>