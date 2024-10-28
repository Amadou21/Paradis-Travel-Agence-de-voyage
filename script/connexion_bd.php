<?php
    try{
        $bd_url="localhost";
        $bd_name="paradisTravel";
        $bd_login="root";
        $bd_pass="";
        $bdd=new PDO('mysql:host='.$bd_url.';dbname='.$bd_name,$bd_login,$bd_pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
    }
    catch(Exception $e){
        die(header("HTTP/1.0 500 Une erreur server est intervenue. Veuillez reessayer"));
    }
?>