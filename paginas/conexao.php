<?php

    require_once '../config/config.php';
    
    function conexao()
    {
        $con = new PDO(HOST, USER, PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        
        return $con;
    }


    

?>
