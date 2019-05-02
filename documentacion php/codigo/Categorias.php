<?php 
/**
* Clase para obtener información de categorias
*
* Clase que permite obtener 
* información relacionada con categorias
*
* @package admingim
* @author Dario <darioh.dev@gmail.com>
* @version 0.02
*/
class Categorias extends Model{
	/**
	* Función que devuelve todas las categorias.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @return array retorna un array con la información de la query.
	*/
	public function getTodos(){
		$this->db->query("SELECT * from categoria_producto");
		return $this->db->fetchAll();
	}
	
	/**
	* Función que verifica la categoría.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @param int $id obtiene la categoría para verificar existencia
	* @return bool retorna true or false dependiendo si falla o no.
	*/
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