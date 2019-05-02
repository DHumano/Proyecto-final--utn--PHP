<?php 
/**
* Clase para obtener información de logueo
*
* @package admingim
* @author Dario <darioh.dev@gmail.com>
* @version 2.0
*/
class Login extends Model{
		/**
	* Función que permite el logueo del usuario.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @param string $email una string que trae el mail que se ingresa
	* @param string $password otro string que trae el password que se ingresa
	* @return bool retorna true o false.
	*/
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