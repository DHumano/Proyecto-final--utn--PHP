<?php 
/**
* Clase para obtener información de proveedores
*
* Clase que permite obtener 
* información relacionada con proveedores
*
* @package admingim
* @author Dario <darioh.dev@gmail.com>
* @version 0.1
*/
class Proveedores extends Model{
	/**
	* Función que devuelve todas las proveedores.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @return array retorna un array con la información de la query.
	*/
	public function getTodos(){
		$this->db->query("select * from proveedores");
		return $this->db->fetchAll();
	}
	
			/**
	* Función que busca un determinado proveedor.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @param string $razon una string obtenida al buscar la razon de proveedor 
	* @return array retorna el array de la query
	*/
	public function busquedaProveedor($razon){
		//el isset se hace antes en el controlador, aca ya estarían seteadas...
		if(strlen($razon)<1) die("error1");
		$razon=substr($razon,0,40);
		$razon=$this->db->escapeString($razon);
		$razon = str_replace("%", "\%", $razon);
		$razon = str_replace("_", "\_", $razon);
		$this->db->query("select * from proveedores
							where razon_social LIKE '%$razon%'");

		return $this->db->fetchAll();
	}

	/**
	* Función que da de alta un proveedor.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @param string $cuit otro string que representa al proveedor nuevo
	* @param string $razon una string que representa la razón nueva de proveedor
	* @param string $contacto otro string que representa el nuevo contacto
	* @param string $direccion otro string que representa la nueva dirección
	* @param string $email una string que representa el email nuevo
	* @param string $telefono otro string que representa el telefono nuevo
	*/
	public function altaProveedor($cuit,$razon,$contacto,$direccion,$email,$telefono){
		if(strlen($razon)<2) die("error1");
		$razon=substr($razon,0,30);
		$razon=$this->db->escapeString($razon);

		if(strlen($cuit)<2) die("error1");
		$cuit=substr($cuit,0,30);
		$cuit=$this->db->escapeString($cuit);

		if(strlen($contacto)<2) die("error1");
		$contacto=substr($contacto,0,30);
		$contacto=$this->db->escapeString($contacto);

		if(strlen($direccion)<2) die("error1");
		$direccion=substr($direccion,0,30);
		$direccion=$this->db->escapeString($direccion);

		if(strlen($email)<2) die("error1");
		$email=substr($email,0,30);
		$email=$this->db->escapeString($email);

		if(strlen($telefono)<2) die("error1");
		$telefono=substr($telefono,0,30);
		$telefono=$this->db->escapeString($telefono);

		
		$this->db->query("insert into proveedores	
							(cuit,razon_social,persona_de_contacto,direccion,email,telefono)
							values
							('$cuit','$razon','$contacto','$direccion','$email','$telefono')");

	}

	/**
	* Función que muestra un determinado proveedor.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @param string $id un int que representa el cuit del proveedor
	* @return array retorna un array de la query.
	*/
	public function proveedorEspecifico($id){
		
		$this->db->query("select *	from proveedores
							where cuit=$id");
		if($this->db->numRows()!=1) die("error numrows");
		return $this->db->fetch();
	}

	/**
	* Función que modifica el proveedor seleccionado.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @param string $nombre una string que representa el nombre a cambiar
	* @param string $cuit otro string que representa al proveedor seleccionado
	* @param string $persona una string que representa al contacto
	* @param string $direccion otro string que representa la direccion a cambiar
	* @param string $email una string que representa el email nuevo
	* @param string $telefono otro string que representa el telefono nuevo
	*/
	public function modificacionProveedor($nombre,$cuit,$persona,$direccion,$email,$telefono){
		
		if(strlen($nombre)<2) die("error1");
		$nombre=substr($nombre,0,30);
		$nombre=$this->db->escapeString($nombre);

		if(strlen($cuit)<2) die("error1");
		$cuit=substr($cuit,0,30);
		$cuit=$this->db->escapeString($cuit);

		if(strlen($persona)<2) die("error1");
		$persona=substr($persona,0,30);
		$persona=$this->db->escapeString($persona);

		if(strlen($direccion)<2) die("error1");
		$direccion=substr($direccion,0,30);
		$direccion=$this->db->escapeString($direccion);

		if(strlen($email)<2) die("error1");
		$email=substr($email,0,30);
		$email=$this->db->escapeString($email);

		if(strlen($telefono)<2) die("error1");
		$telefono=substr($telefono,0,30);
		$telefono=$this->db->escapeString($telefono);

			$this->db->query("UPDATE proveedores	
							SET razon_social='$nombre',cuit='$cuit',persona_de_contacto='$persona',direccion='$direccion',email='$email',telefono='$telefono'
                            WHERE cuit='$cuit'");

	}

}

?>