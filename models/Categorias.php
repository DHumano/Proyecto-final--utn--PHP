<?php 
//los nombres de las clases van con mayúscula
class Categorias extends Model{
/*	private $db;
	public function __construct(){
		$this->db=Database::getInstance();
	}*/  //lo comento, hago herencia para heredar de model


	public function getTodos(){
		$this->db->query("SELECT * from categoria_producto");
		return $this->db->fetchAll();
	}
	
	public function existeCategoria($id){
		if(!ctype_digit($id)) return false;
		//if($_POST["sala"]<1) die("no corresponde");
		$this->db->query("select * from categoria_producto
						where id_categoria=$id
						limit 1");
		if($this->db->numRows()!=1) return false;   //si hay un limit1, un solo resultado, va esto!!!!

		return true;
	}


}

?>