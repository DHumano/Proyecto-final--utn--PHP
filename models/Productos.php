<?php 
//los nombres de las clases van con mayúscula
class Productos extends Model{
/*	private $db;
	public function __construct(){
		$this->db=Database::getInstance();
	}*/  //lo comento, hago herencia para heredar de model


	public function getTodos(){
		$this->db->query("select * from productos");
		return $this->db->fetchAll();
	}
	
	public function busquedaProducto($nombre){
		if(strlen($nombre)<1) die("error1");
		$nombre=substr($nombre,0,40);
		$nombre=$this->db->escapeString($nombre);
		$nombre = str_replace("%", "\%", $nombre);
		$nombre = str_replace("_", "\_", $nombre);
		$this->db->query("select * from productos
							where nombre LIKE '%$nombre%'");
		return $this->db->fetchAll();
	}

	public function altaProducto($nombre,$categoria,$precio,$stock,$pto_reposicion){
		if(strlen($nombre)<2) die("error1");
		$nombre=substr($nombre,0,30);
		$nombre=$this->db->escapeString($nombre);
		if(!ctype_digit($categoria)) die("error ");
		if(!is_numeric($precio)) die("error ");
		if(!ctype_digit($stock)) die("error");
		if(!ctype_digit($pto_reposicion)) die("error ");

		$c=new Categorias;
		if(!$c->existeCategoria($categoria)) die("error2"); //delego la validacion de cargos a cargos.php

		$this->db->query("insert into productos	
							(nombre,id_categoria,precio_venta,pto_reposicion,stock)
							values
							('$nombre',$categoria,$precio,$stock,$pto_reposicion)");

	}

	public function productoEspecifico($id){
		if(!ctype_digit($id)) die("error id");
		$this->db->query("select p.precio_venta,p.stock,p.pto_reposicion,codigo_producto,c.nombre nombrecat,p.nombre,c.id_categoria,p.id_categoria
							from productos p
							left join categoria_producto c on c.id_categoria= p.id_categoria
							where codigo_producto=$id");
		if($this->db->numRows()!=1) die("error numrows");
		return $this->db->fetch();
		
	}


	public function modificacionProducto($nombre,$id,$categoria,$precio,$stock,$pto_reposicion){
		if(!ctype_digit($id)) die("error id");
		if(!is_numeric($precio)) die("error id");
		if(!ctype_digit($stock)) die("error id");
		if(!ctype_digit($pto_reposicion)) die("error id");
		if(strlen($nombre)<2) die("error1");
		$nombre=substr($nombre,0,30);
		$nombre=$this->db->escapeString($nombre);

		$c=new Categorias;
		if(!$c->existeCategoria($categoria)) die("error2"); //delego la validacion de cargos a cargos.php




		$this->db->query("UPDATE productos	
							SET nombre='$nombre',id_categoria=$categoria,precio_venta=$precio,stock=$stock,pto_reposicion=$pto_reposicion
                            WHERE codigo_producto=$id");

	}
    
	public function productoDeProveedor($cuit){
		if(strlen($cuit)<2) die("error1");
		$cuit=substr($cuit,0,15);
		$cuit=$this->db->escapeString($cuit);
							
		$this->db->query("select * from productos p
							left join productos_prov pp on p.codigo_producto= pp.codigo_producto
							where pp.cuit=$cuit");
		return $this->db->fetchAll();
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////
	public function proveedoresDeProducto($cod){
		if(!ctype_digit($cod)) die("error codigo"); 
		$this->db->query("select * from proveedores p
							left join productos_prov pp on p.cuit= pp.cuit
							where pp.codigo_producto=$cod");
		return $this->db->fetchAll();
	}



	public function altaProvisto($cuit,$codigo_producto,$precio){
		if(strlen($cuit)<2) die("error1");
		$cuit=substr($cuit,0,15);
		$cuit=$this->db->escapeString($cuit);


		if(!ctype_digit($codigo_producto)) die("error id");
		
		$this->db->query("insert into productos_prov	
							(cuit,codigo_producto,precio_producto)
							values
							($cuit,$codigo_producto,$precio)");
    }
	
	public function bajaProvisto($cuit,$codigo_producto){
		


		if(!ctype_digit($codigo_producto)) die("error id");
		
		$this->db->query("DELETE FROM productos_prov	
							WHERE cuit=$cuit and codigo_producto=$codigo_producto
							LIMIT 1
							");
	}


	public function provistoEspecifico($cuit,$codigo){
		if(!ctype_digit($codigo)) die("error id");
		if(strlen($cuit)<2) die("error1");
		$cuit=substr($cuit,0,15);
		$cuit=$this->db->escapeString($cuit);


        $this->db->query("select * from productos_prov pp
                            left join productos p, proveedores pr
							where p.codigo_producto=pp.codigo_producto AND pr.cuit=pp.cuit AND $cuit=pp.cuit AND $codigo=pp.codigo_producto");
		if($this->db->numRows()!=1) die("error numrows");
		return $this->db->fetch();
    }


	public function precio($cod,$cuit){
		if(!ctype_digit($cod)) die("error id");
		


		$this->db->query("select * from productos_prov pp
							left join productos p on pp.codigo_producto=p.codigo_producto
							where pp.cuit=$cuit AND pp.codigo_producto=$cod");
							
							return $this->db->fetchAll();
	}


	
}


?>