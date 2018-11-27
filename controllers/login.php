<?php

require '../fw/fw.php'; //aca van a estar todos los requires del framework
require '../views/FormLogin.php';
require '../models/Login.php';


session_start(); //no olvidar
//$cn=mysqli_connect("localhost","root","","dario");

if(isset($_POST["email"])){
    $e=new Login;
    $todos=$e->logueo($_POST["email"],$_POST["password"]);


    if($todos){
        $_SESSION["login"]=true; //flag 
        header("Location:../index.php");
        exit;
    }
        else{$huboerror=true;} 
     

}



$e=new FormLogin;  //controlador pide datos a modelo
$e->render();

?>
