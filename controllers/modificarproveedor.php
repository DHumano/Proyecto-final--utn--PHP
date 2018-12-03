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
require '../views/FormModificacionProveedor.php';
require '../views/ModificacionProveedorOk.php';


if(isset($_POST['cuit'])){ //solo mandé esto,ahora tengo q acceder


    
    if(isset($_POST['razon_social'])){
        if(!isset($_POST['persona_de_contacto'])) die("debe ingresar un valor valido");
        if(!isset($_POST['direccion'])) die("debe ingresar un valor valido");
        if(!isset($_POST['email'])) die("debe ingresar un valor valido");
        if(!isset($_POST['telefono'])) die("debe ingresar un valor valido");
         $f=new proveedores;
         $f->modificacionProveedor($_POST['razon_social'],$_POST['cuit'],$_POST['persona_de_contacto'],$_POST['direccion'],$_POST['email'],$_POST['telefono']);
         $m=new ModificacionproveedorOk;
         $m->render();
         exit;
    }
    //if(!isset($_POST['razon_social'])) die("error");
    $e=new proveedores;
    $todos=$e->proveedorEspecifico($_POST['cuit']); //aca tengo la info del proveedor
    $v=new FormModificacionproveedor; //controlador manda datos a la vista
    $v->proveedor=$todos; // le doy a la variable proveedors de la vista, el valor $todos
    //var_dump($v);
    $v->render(); //permite q se dibuje en el navegador
    //aca le mando la info de ese proveedor a la pantalla,
    
    //faltan demás validaciones

    exit;
}

 ?>