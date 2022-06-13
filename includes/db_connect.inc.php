<?php
    // $_host = 'localhost';
    // $_database = 'ap_web';
    // $_user = 'root';
    // $_password = '';

    // pdo
    // $_connection = new PDO('mysql:host='.$_host.';dbname='.$_database, $_user, $_password);
    // $_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $_status = $_connection->getAttribute(PDO::ATTR_CONNECTION_STATUS);
    // print_r($_connection)







try {
    $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $_bdd = new PDO('mysql:host=localhost;
                   dbname=ap_web', 
                   'root', '',
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options));
}catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

print'hall';
    
?>