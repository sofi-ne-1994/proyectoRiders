<?php
require_once 'database.php'; 

try{
    $db= Database::connect();
    echo "conexion exitosa a la base de datos";
    Database::disconnect();
    
}catch(excetion $e){
    echo "error al desconectar" . $e->getMessage();

}