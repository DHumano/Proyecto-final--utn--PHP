<?php 
//los nombres de las clases van con mayúscula
class Login extends Model{
/*	private $db;
	public function __construct(){
		$this->db=Database::getInstance();
	}*/  //lo comento, hago herencia para heredar de model


	public function logueo($email,$password){
        $password=sha1($_POST["password"]);

		$this->db->query("select *
                        FROM usuarios
                        WHERE email='$email' AND password='$password'
                        LIMIT 1");

        if($this->db->numRows()==1) {
        return true;
        }
        else{$huboerror=true;}
        return false;
	}
	

}


?>