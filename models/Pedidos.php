<?php 
//los nombres de las clases van con mayúscula
class Pedidos extends Model{
/*	private $db;
	public function __construct(){
		$this->db=Database::getInstance();
	}*/  //lo comento, hago herencia para heredar de model


	public function getTodos(){
		$this->db->query("select * from pedidos");
		return $this->db->fetchAll();
	}
	
	public function pedidoEspecifico($id){
		if(!ctype_digit($id)) die("error id");
		$this->db->query("select codigo_producto,c.nombre nombrecat,p.nombre,c.id_categoria,p.id_categoria
							from productos p
							left join categoria_producto c on c.id_categoria= p.id_categoria
							where codigo_producto=$id");
		if($this->db->numRows()!=1) die("error numrows");
		return $this->db->fetch();
	}


	public function altaPedido($codigo_producto,$precio,$cant,$cuit){
		if(!ctype_digit($cant)) die("error cantidad no es numerico");
		//var_dump($cant); //funciona,solo que está dando error en el segundo, por eso tira die después
		//if($cant==0) die('error en cantidad');
		if(!ctype_digit($codigo_producto)) die("error id");
		if(!is_numeric($precio)) die("error id");
		$this->db->query("UPDATE productos	
							SET stock= stock+ $cant
                            WHERE codigo_producto=$codigo_producto");


		$this->db->query("insert into pedidos	
							(cantidad,codigo_producto,precio_compra,cuit,entrega)
							values
							($cant,$codigo_producto,$precio,$cuit,now())");

	}
	
	public function pedidosDeProveedores($id){
		
		$this->db->query("select *	from pedidos p
							left join proveedores pp on pp.cuit=p.cuit
							where p.cuit='$id'");
		return $this->db->fetchAll();
	}



}
?>