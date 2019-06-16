<?php 

class Conexion{
	
	static public function conectar(){

        try {

            $link = new PDO( 
                "mysql:host=localhost;
                dbname=4kpagos", 
                "root", 
                ""
            );

		    $link -> exec("set names utf8");

		    return $link;
            
            // set the PDO error mode to exception
            $link -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            echo "Connected successfully"; 

        } catch (PDOException $e) {
            
            echo "Connection failed: " . $e->getMessage();
            
        }
	}
}