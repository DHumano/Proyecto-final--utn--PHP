<?php 
//los nombres de las clases van con mayúscula
class Proveedores extends Model{
/*	private $db;
	public function __construct(){
		$this->db=Database::getInstance();
	}*/  //lo comento, hago herencia para heredar de model


	public function getTodos(){
		$this->db->query("select * from proveedores");
		return $this->db->fetchAll();
	}
	
	public function busquedaProveedor($razon){
		//el isset se hace antes en el controlador, aca ya estarían seteadas...
		if(strlen($razon)<1) die("debe ingresar un valor válido");
		$razon=substr($razon,0,40);
		$razon=$this->db->escapeString($razon);
		$razon = str_replace("%", "\%", $razon);
		$razon = str_replace("_", "\_", $razon);
		$this->db->query("select * from proveedores
							where razon_social LIKE '%$razon%'");

		return $this->db->fetchAll();
	}
	public function altaProveedor($cuit,$razon,$contacto,$direccion,$email,$telefono){
		if(strlen($razon)<2) die("debe ingresar un valor válido");
		$razon=substr($razon,0,30);
		$razon=$this->db->escapeString($razon);

		if(strlen($cuit)<2) die("debe ingresar un valor válido");
		$cuit=substr($cuit,0,30);
		$cuit=$this->db->escapeString($cuit);

		if(strlen($contacto)<2) die("debe ingresar un valor válido");
		$contacto=substr($contacto,0,30);
		$contacto=$this->db->escapeString($contacto);

		if(strlen($direccion)<2) die("debe ingresar un valor válido");
		$direccion=substr($direccion,0,30);
		$direccion=$this->db->escapeString($direccion);

		if(strlen($email)<2) die("debe ingresar un valor válido");
		$email=substr($email,0,30);
		$email=$this->db->escapeString($email);

		if(strlen($telefono)<2) die("debe ingresar un valor válido");
		$telefono=substr($telefono,0,30);
		$telefono=$this->db->escapeString($telefono);

		
		$this->db->query("insert into proveedores	
							(cuit,razon_social,persona_de_contacto,direccion,email,telefono)
							values
							('$cuit','$razon','$contacto','$direccion','$email','$telefono')");

	}


	public function proveedorEspecifico($id){
		
		$this->db->query("select *	from proveedores
							where cuit=$id");
		if($this->db->numRows()!=1) die("error numrows");
		return $this->db->fetch();
	}


//$_POST['razon_social'],$_POST['cuit'],$_POST['persona_de_contacto'],$_POST['direccion'],$_POST['email'],$_POST['telefono']);

	public function modificacionProveedor($nombre,$cuit,$persona,$direccion,$email,$telefono){
		
		if(strlen($nombre)<2) die("debe ingresar un valor válido");
		$nombre=substr($nombre,0,30);
		$nombre=$this->db->escapeString($nombre);

		if(strlen($cuit)<2) die("debe ingresar un valor válido");
		$cuit=substr($cuit,0,30);
		$cuit=$this->db->escapeString($cuit);

		if(strlen($persona)<2) die("debe ingresar un valor válido");
		$persona=substr($persona,0,30);
		$persona=$this->db->escapeString($persona);

		if(strlen($direccion)<2) die("debe ingresar un valor válido");
		$direccion=substr($direccion,0,30);
		$direccion=$this->db->escapeString($direccion);

		if(strlen($email)<2) die("debe ingresar un valor válido");
		$email=substr($email,0,30);
		$email=$this->db->escapeString($email);

		if(strlen($telefono)<2) die("debe ingresar un valor válido");
		$telefono=substr($telefono,0,30);
		$telefono=$this->db->escapeString($telefono);

			$this->db->query("UPDATE proveedores	
							SET razon_social='$nombre',cuit='$cuit',persona_de_contacto='$persona',direccion='$direccion',email='$email',telefono='$telefono'
                            WHERE cuit='$cuit'");

	}

	public function alta2Proveedor($razon,$cuit){
			
			if(strlen($razon)<2) die("debe ingresar un valor válido");
			$razon=substr($razon,0,30);
			$razon=$this->db->escapeString($razon);

			if(strlen($cuit)<2) die("debe ingresar un valor válido");
			$cuit=substr($cuit,0,30);
			$cuit=$this->db->escapeString($cuit);
		
		
		$this->db->query("insert into proveedores	
							(razon_social,cuit,direccion,email,persona_de_contacto,telefono)
							values
							('$razon',$cuit,'calle tr','dario@da','jaun','123123')");

	}
}

?>