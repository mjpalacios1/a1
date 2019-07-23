<?php
class ControladorAnuncios
{
	private $conexion;

	public function __construct($conexion)
	{
		$this->conexion = $conexion;
	}
        //Consulta la base mysql de todos los datos de la tabla usuarios
	public function obtenerAnuncios()
	{
		$consulta = "select * from anuncio";
		$declaracion = $this->conexion->prepare($consulta);
		$declaracion->execute();
		return $declaracion;
	}
	public function consultarAnuncios($codigo)
	{
		$consulta = "select * from anuncio where codigo='$codigo'";
		$declaracion = $this->conexion->prepare($consulta);
		$declaracion->execute();
		return $declaracion;
	}
        //Se recibe un objeto usuario para insertarlo en la bd
	public function crearAnuncio($anuncio)
	{
		$consulta=" insert into  anuncio (empresa, detalle, fecha_inicio, fecha_fin, salario) values('$anuncio->empresa','$anuncio->detalle','$anuncio->fecha_inicio','$anuncio->fecha_fin','$anuncio->salario')";

		$declaracion = $this->conexion->prepare($consulta);
		
                $declaracion->execute();
	}
	public function eliminarAnuncio($codigo)
	{
		$consulta=" delete from anuncio where codigo='$codigo'";

		$declaracion = $this->conexion->prepare($consulta);
		
                $declaracion->execute();
	}

}

