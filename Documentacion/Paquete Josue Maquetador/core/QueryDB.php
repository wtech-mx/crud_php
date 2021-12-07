<?php

class ConexionDB{
    var $con;
    var $server;
    var $user;
    var $pass;
    var $base;
    var $data_source;    

    //Información para conectar con la base de datos.
    function DatConnect(){
        $this->server="localhost";
        $this->user="";
        $this->pass="";
        $this->base="";
    }

    function __construct(){
        $this->DatConnect(); //Establece valores de conexión     
        $conect = new mysqli($this->server,$this->user,$this->pass,$this->base);
        if ($conect){ 
            $conect->set_charset('utf8');
            $this->con=$conect; 
        } else { printf("Error de conexión: %s\n", mysqli_connect_error()); }
    }

    function getConexion() 
    { return $this->con; }

    function Close()  
    { mysqli_close($this->con); }   

}

//Ejecuta consultas SQL tradicionales, No validan parametros de entrada por usuarios
class QueryDB   
{
    var $coneccion;
    var $consulta;
    var $stmt;
    var $typeQuer;
    var $texQuery;

    function __construct(){ 
        $this->coneccion= new ConexionDB(); 
    }

    //Cierra la conexión de base de datos
    function __destruct(){
        $this->Close();
    }

    function prepare($cons){
        $this->stmt = $this->coneccion->getConexion()->prepare($cons);
        $this->texQuery=$cons;
    }

    function execute(){
        # Consulta Parametrizada            
        $this->stmt->execute();      
        $this->consulta = $this->stmt->get_result();        
        return $this->consulta;
    }   
    
    function getUsuario()
    { return $this->coneccion->user; }

    function getDB()
    { return $this->coneccion->base; }

    function getContra()
    { return $this->coneccion->pass; }

    function getServidor()
    { return $this->coneccion->server; }

    function getResults()   // retorna la consulta en forma de result.
    { return $this->consulta; }
    
    function Close()  // cierra la conexion
    {
        if($this->texQuery != ""){ $this->stmt->close(); }
        $this->coneccion->Close();
    }
    
    function Clean() // libera la consulta
    { mysqli_free_result($this->consulta); }
    
    function getAffect() // devuelve las cantidad de filas afectadas
    { return mysqli_affected_rows($this->coneccion->getConexion()); }

    function getNumColumn() // devuelve las cantidad de columnas de la consulta
    { return mysqli_num_fields($this->consulta); }
}

//Limpia una cadena, de caracteres que pudieran ser inseguros en Base de datos
function cls($str_cad){
    return filter_var(str_replace(array("'",'"','|','\\','`'), array('','','','',''), $str_cad), FILTER_SANITIZE_STRING);
}