<?php

/**
 * Description of site
 *
 * @author Alexandre
 * Trata as requisiçoes do site
 */
class Site 
{
    public function telaIndex()
    {
        //pagina index, redireciona para a view direta
        header('location:view/index.php');
    }
}
