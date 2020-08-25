<?php 
	class Conexion{
		public function conectar(){
			$host='localhost';
			$usuario='root';
			$clave='12345678';
			$database='dvm';

			$conexion=mysqli_connect($host,$usuario,$clave,$database);
			$conexion->set_charset('utf8');
			return $conexion;
		}
	}
 ?>