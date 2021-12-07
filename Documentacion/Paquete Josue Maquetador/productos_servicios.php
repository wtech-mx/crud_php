<?php
include_once($_SERVER['DOCUMENT_ROOT']."/core/QueryDB.php");

class productos_servicios{
	private $DB;
	private $handel;
	private $id_sucursal;
	private $arr_prod_serv;
	private $arr_servicios;
	private $arr_productos;
	private $arr_mat_prima;

    function __construct(){
    	 $this->DB = new QueryDB();
    	 $this->arr_prod_serv=array();
    	 $this->arr_servicios=array();
    	 $this->arr_productos=array();
    	 $this->arr_mat_prima=array();

    	 if(isset($_SESSION["Handel"])){
    	 	$this->handel=(int)$_SESSION["Handel"];
    	 	$this->id_sucursal=(int)$_SESSION["ID_SUCURSAL"];
    	 }    	 
    }	 
    //Cierra conexion con la base de datos
    function __destruct(){ /*$this->DB->Close();*/ }  


    ## ------------------ Funciones que setean valores -------------------------- ##
    
    	function setHandel($newValor){ $this->handel=(int)$newValor; }
    	function setSucursal($newValor){ $this->id_sucursal=(int)$newValor; }

    ## ------------------ Funciones que regresan valores -------------------------- ##   
    	/*
			Arroja la totalidad de registros de productos y servicios
    	*/
    	function getArrProdServ(){ return $this->arr_prod_serv; }

    ## ------------------ Funciones Generales -------------------------- ##

	    /*
			Separa en Arrays "Materia prima" de "Productos" y de "Servicios"	
	    */
		function ReadInfoProdServ(){
		        $this->DB->prepare("select id,nombre,tipo from tproductos where codigo != '{Desc.}' and handel=? and cancel='0' order by nombre asc");
		        $this->DB->stmt->bind_param('i', $this->handel );
		        $this->DB->execute();

		        if( $this->DB->getAffect() > 0 ){
		            while ($datos_text = mysqli_fetch_array($this->DB->getResults())){
		            	$entro=false;
		            	if($datos_text['tipo']=="Servicio"){
		            		$entro=true;
		            		$this->arr_servicios[]=$datos_text;
		            	}
		            	if($datos_text['tipo']=="Producto terminado"){
		            		$entro=true;
		            		$this->arr_productos[]=$datos_text;
		            	}
		            	if($entro==false){
		            		$this->arr_mat_prima[]=$datos_text;
		            	}

		            	//Anexa todos los registros
		            	$this->arr_prod_serv[]=$datos_text;
		            }  
		        } 

		        return $this->arr_prod_serv;
		}


}	