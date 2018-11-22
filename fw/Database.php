<?php 

class Database{
	private $res;
	private $cn=false;
	private static $instance=false;
	public static function getInstance(){ //metodo no de instancia(objetos), sino de la clase
		if(!self::$instance) self::$instance= new database; //porque cn es un metodo privado
		return self::$instance;  //self es para hablar de metodos y variables de la clase

	}
	//constructor
	private function __construct(){

	}

	private function connect(){
		$this->cn=mysqli_connect("localhost","root","","proyecto");
	}

	public function query($q){
		if(!$this->cn) $this->connect(); // llamada a un metodo del mismo objeto se usa el this también
		$this->res=mysqli_query($this->cn,$q); // sin el this, crea otra variable res,no usa la de arriba

		if(mysqli_error($this->cn)!="") {
			die("error consulta $q --". mysqli_error($this->cn));
		}

	}
	public function fetch(){
		return mysqli_fetch_assoc($this->res);
	}

	public function numRows(){
		return mysqli_num_rows($this->res);
	}

	public function fetchAll(){
		$aux=array();
		while($fila=$this->fetch()) $aux[]=$fila;
		return $aux;
	}

	public function escapeString($str){
		if(!$this->cn) $this->connect(); //necesito estar conectado para haer la query
		return mysqli_escape_string($this->cn,$str);
	}

}


 ?>