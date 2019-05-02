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
* @version 1.6
*/
class Database{
	private $res;
	private $cn=false;
	private static $instance=false;

		/**
	* Función que devuelve la instancia.
	*
	* @return database retorna la instancia de la base.
	*/
	public static function getInstance(){ //metodo no de instancia(objetos), sino de la clase
		if(!self::$instance) self::$instance= new database; //porque cn es un metodo privado
		return self::$instance;  //self es para hablar de metodos y variables de la clase

	}
		/**
	* Función constructor.
	*
	*/
	private function __construct(){

	}

	/**
	* Función que conecta la base de datos.
	*
	*/
	private function connect(){
		$this->cn=mysqli_connect("localhost","root","","proyecto");
	}

		/**
	* Función que permite realizar querys.
	*
	* @param query $q query que se obtiene
	*/
	public function query($q){
		if(!$this->cn) $this->connect(); // llamada a un metodo del mismo objeto se usa el this también
		$this->res=mysqli_query($this->cn,$q); // sin el this, crea otra variable res,no usa la de arriba

		if(mysqli_error($this->cn)!="") {
			die("error consulta $q --". mysqli_error($this->cn));
		}

	}

	/**
	* Función que devuelve un array de la query
	*
	* @return array retorna el resultado de la query en array.
	*/
	public function fetch(){
		return mysqli_fetch_assoc($this->res);
	}


	/**
	* Función que comprueba numero de filas
	*
	* @return int retorna el numero de filas
	*/
	public function numRows(){
		return mysqli_num_rows($this->res);
	}


	/**
	* Función que devuelve un array de la query
	*
	* @return array retorna el resultado de la query en array.
	*/
	public function fetchAll(){
		$aux=array();
		while($fila=$this->fetch()) $aux[]=$fila;
		return $aux;
	}

		/**
	* Función que checkea comillas.
	*
	* Esta función permite escapar comillas para evitar
	* inyecciones
	* 
	* @param string $str otro string que tampoco sirve
	* @return string retorna el string escapando.
	*/
	public function escapeString($str){
		if(!$this->cn) $this->connect(); //necesito estar conectado para haer la query
		return mysqli_escape_string($this->cn,$str);
	}

}


 ?>