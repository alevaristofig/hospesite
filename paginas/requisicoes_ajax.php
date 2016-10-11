<?php

    require_once '../paginas/conexao.php';    
    
    $con = conexao(HOST, USER, PASSWORD);
    

    if(isset($_POST['uf']))
    {
        $uf = $_POST['uf'];
        
        if($uf == 'be')
        {
            $where = 'WHERE 2=2 ORDER BY id';
            
            $sql = 'SELECT id,nome FROM estados WHERE 2';
            
            $sth = $con->prepare($sql);
            
            if(!$sth->execute())
            {
                echo 0;
            }
            else
            {
               $estados = $sth->fetchAll();

               $estados = json_encode($estados);

               echo $estados;           
            }
        }   
        else
        {
            $sql = 'SELECT id,nome FROM cidades WHERE id_estado = :id_estado';
            
            $sth = $con->prepare($sql);
            
            $sth->bindParam('id_estado', $uf,PDO::PARAM_INT);
            
            if(!$sth->execute())
            {
                echo 0;
            }
            else
            {
               $cidades = $sth->fetchAll();

               $cidades = json_encode($cidades);

               echo $cidades;           
            }

        }
        
    }

?>

