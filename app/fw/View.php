<?php 



abstract class View{

	public function render(){
		include '../html/'.get_class($this).'.php'; //aca uso $empleados de arriba
		//getclass  me devuelve string con el nombre de la clase del objeto q me tira, por eso poner con mismo nombre lo de views con lo de html
	} 

}

