<?php

class data_access {

    public $conexion;

	private $user= "root";
	private $password= ""; 
	private $host= "localhost";
	private	$bd = "bolo_creator";
	
	private $resultado;

    function __construct() {
        $this->conectar();
    }

    function conectar() {
	
        $conexion = new mysqli($this->host,$this->user,$this->password, $this->bd);
				
 } 
     

	

    function ejecutar_consulta($sql) {
         $conexion = new mysqli($this->host,$this->user,$this->password, $this->bd);
				
		$this->resultado = $conexion->query($sql);
				
		//print_r($this->resultado);
        return $this->resultado;
    }
	

	function extraer_registro()
	{
		if ($fila = mysqli_fetch_array($this->resultado,MYSQL_ASSOC))
		{
			return $fila;
		} 
		else 
		{
			return false;
		}
	}

    function devolver_resultados($sql) {
        $this->ejecutar_consulta($sql);
        $output = array();

        while ($record = extraer_registro()) {
            $output[] = $record;
        }

        return $output;
    }	

    function cantidad_registros($sql) {
        $r = $this->ejecutar_consulta($sql);

        $cantidad = mysqli_num_rows($r);
        return $cantidad;
    }

    /**
    * Método que permite insertar en la base de datos
    * y retornar el id con que se insertó
    */
    function insertar_datos($sql) {
        $r = $this->ejecutar_consulta($sql);

        $new_id = mysqli_insert_id($this->conexion);

        return $new_id;
    }
	    
}

?>
