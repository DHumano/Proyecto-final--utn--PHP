<?php 
/**
* Clase para obtener información de categorias
*
* Esta es la descripción larga. Puedo extenderme varias líneas
* Ojo con los puntos en la descripción corta.
* Notar que estos enters no se pasan a la documentación.
*
* @package admingim
* @author Dario <darioh.dev@gmail.com>
* @version 1.3
*/
abstract class Model{ //no se puede instanciar el abstracto, es una parte significaría
	protected $db; // para q la hija pueda acceder pero no desde afuera
/**
	* Función constructor.
	*
	*/
	public function __construct(){
		$this->db=Database::getInstance();
	}
}




 