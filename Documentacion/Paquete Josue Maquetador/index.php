<?php ini_set("session.gc_maxlifetime", 28800);ini_set("session.cookie_lifetime",28800); session_start();

      setlocale(LC_ALL,"es_ES@euro","es_ES","esp","es");  
      date_default_timezone_set("America/Mexico_City");
      
      #------------------------------------------------------
      include_once("productos_servicios.php");
      $prod_serv = new productos_servicios();
      $prod_serv->ReadInfoProdServ();

      echo json_encode( $prod_serv->getArrProdServ() )

    
