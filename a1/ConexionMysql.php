<?php
class ConexionBDD
{
	const IP = "localhost";
	const USUARIO = "root";
	const CLAVE = "";
	const NOMBRE_BASE_DE_DATOS = "empleoya";
	private $conexion;
	public function connect()
	{
		$this->conexion = null;
		try
		{
			$this->conexion=new PDO("mysql:host=".self::IP.";dbname=".self::NOMBRE_BASE_DE_DATOS,self::USUARIO,self::CLAVE);
			$this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $exception)
		{
			echo "Error al conectar a la base de datos" . $exception->getMessage();
		}
		return $this->conexion;
	}
}
