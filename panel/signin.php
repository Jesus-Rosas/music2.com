<?php 
// class Sesion{
// 	private $usuario;
// 	private $pass;

// 	public function obtenerUsuario($user)
// 	{
// 		return $this->usuario = $user;
// 	}
// 	public function obtenerContrasena($pass)
// 	{
// 		return $this->pass = $pass;
// 	}

// }

// $sesion = new Sesion();

//obtener datos formulario 
$user = $_POST['user'];
$pass = $_POST['pass'];
if(isset($user) && isset($pass) != "")
{
	if($user == "admin@admin.com" && $pass == "123456")
	{
		sleep(1);
		header('Location: admin.php');
	}
	else
	{
		sleep(1);
		header('Location: index.php');
	}
}
 ?>
