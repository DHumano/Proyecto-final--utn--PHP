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
require '../views/FormAltaPedido.php';
require '../models/Pedidos.php';
require '../views/AltaPedidoOk.php';

//producto[] , proveedor[], precio[], cantidad[]
//el proveedor va para pedido,agregar una fecha del pedido, nro pedido es id,, que pedidos tiene un proveedor!

if(isset($_POST['producto'])){
    if(!isset($_POST['precio'])) die("error");
    if(!isset($_POST['cantidad'])) die("error");
    
	
    //foreach ($_POST['producto'] as $key => $value) { //aca tira pedido ok aunque tenga un cantidad =0 porque no hay un die aca,pero si pongo die mato todo
        //if(!ctype_digit($_POST['cantidad'][$key])) die("error asd");	
        //if($_POST['cantidad'][$key]=='0') die("error cantidad");	
        $e=new Pedidos;
        if($_POST['cantidad'][0]>0 && $_POST['cantidad'][1]>0 && $_POST['cantidad'][2]>0 && $_POST['cantidad'][3]>0 && $_POST['cantidad'][4]>0){
            
            $e->altaPedido($_POST['producto'][0],$_POST['precio'][0],$_POST['cantidad'][0],$_POST['proveedor'][0]);
            $e->altaPedido($_POST['producto'][0],$_POST['precio'][1],$_POST['cantidad'][1],$_POST['proveedor'][1]);
            $e->altaPedido($_POST['producto'][0],$_POST['precio'][2],$_POST['cantidad'][2],$_POST['proveedor'][2]);
            $e->altaPedido($_POST['producto'][0],$_POST['precio'][3],$_POST['cantidad'][3],$_POST['proveedor'][3]);
            $e->altaPedido($_POST['producto'][0],$_POST['precio'][4],$_POST['cantidad'][4],$_POST['proveedor'][4]);
        }

        else if($_POST['cantidad'][0]>0 && $_POST['cantidad'][1]>0 && $_POST['cantidad'][2]>0 && $_POST['cantidad'][3]>0 ){
                        
            $e->altaPedido($_POST['producto'][0],$_POST['precio'][0],$_POST['cantidad'][0],$_POST['proveedor'][0]);
            $e->altaPedido($_POST['producto'][0],$_POST['precio'][1],$_POST['cantidad'][1],$_POST['proveedor'][1]);
            $e->altaPedido($_POST['producto'][0],$_POST['precio'][2],$_POST['cantidad'][2],$_POST['proveedor'][2]);
            $e->altaPedido($_POST['producto'][0],$_POST['precio'][3],$_POST['cantidad'][3],$_POST['proveedor'][3]);
           
        }

        else if($_POST['cantidad'][0]>0 && $_POST['cantidad'][1]>0 && $_POST['cantidad'][2]>0 ){
                        
            $e->altaPedido($_POST['producto'][0],$_POST['precio'][0],$_POST['cantidad'][0],$_POST['proveedor'][0]);
            $e->altaPedido($_POST['producto'][0],$_POST['precio'][1],$_POST['cantidad'][1],$_POST['proveedor'][1]);
            $e->altaPedido($_POST['producto'][0],$_POST['precio'][2],$_POST['cantidad'][2],$_POST['proveedor'][2]);
            
        }


        else if($_POST['cantidad'][0]>0 && $_POST['cantidad'][1]>0){
                        
            $e->altaPedido($_POST['producto'][0],$_POST['precio'][0],$_POST['cantidad'][0],$_POST['proveedor'][0]);
            $e->altaPedido($_POST['producto'][0],$_POST['precio'][1],$_POST['cantidad'][1],$_POST['proveedor'][1]);
            
        }

        else if($_POST['cantidad'][0]>0 ){
                        
            $e->altaPedido($_POST['producto'][0],$_POST['precio'][0],$_POST['cantidad'][0],$_POST['proveedor'][0]);
            
        }
        else die("error en cantidad");

    //}

    $ok=new AltaPedidoOk;
    $ok->render();
    exit;
    
}




$v=new FormAltaPedido; //controlador manda datos a la vista
$v->productos=(new Productos)->getTodos(); // le doy a la variable productos de la vista, el valor $todos
$v->proveedores=(new Proveedores)->getTodos(); // le doy a la variable productos de la vista, el valor $todos
$v->render(); //permite q se dibuje en el navegador



 ?>