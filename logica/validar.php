<?php 
include './conexion.php';

$conexion = new Conexion();
$conexionFinal = $conexion->conectar();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$consulta = "SELECT * FROM usuario WHERE correo='".$usuario."'";
$result = mysqli_query($con, $consulta);

$rows=mysqli_fetch_assoc($verificar);
if (mysqli_num_rows($verificar) > 0){
	if (password_verify($clave, $rows['password'])) {
		if ($rows['tipo_user'] == "Administrador") {
	echo "<script>alert('bienvenido administrador');
	window.location.href='../../php/admin/index.php';</script>";
	}elseif ($rows['tipo_user'] == "Docente") { 	
		echo "<script>alert('bienvenido maestro');
	window.location.href='../../php/maestro/index.php';</script>";
	}elseif ($rows['tipo_user'] == "Estudiante") {
		echo "<script>alert('bienvenido estudiante.                                                                Selecciona el area a la que deseas ingresar');
	window.location.href='../../php/estudiante/index.php';</script>";
	}
  }else	{
  	echo "<script>alert(La contraseña es incorrecta intenta nueva mente');
	window.location.href='../login.php';</script>";
	}
}else{
  	echo "<script>alert(El correo electronico es incorrecto  intenta nueva mente');
	window.location.href='../login.php';</script>";
	}
	
?>
