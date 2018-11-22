<?php 

require '../fw/fw.php'; //aca van a estar todos los requires del framework
require '../models/Productos.php';
require '../models/Proveedores.php';
require '../views/FormAltaPedido.php';
//require '../views/AltaPedidoOk.php';



//   if(isset($_GET['p'])){

//     $e=new Productos;
//     echo json_encode($e->test1($_GET['p']));
//     exit;
//  }
if(isset($_GET['proveedor'])){

  $e=new Productos;
  echo json_encode($e->proveedoresDeProducto($_GET['proveedor']));
  exit;
}


 if(isset($_GET['precio'])){

  $b=new Productos;
  echo json_encode($b->precio($_GET['precio'],$_GET['proveedor'])); //no sirve esto, modificar el preico
  exit;
}





 ?>