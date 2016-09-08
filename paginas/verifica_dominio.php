<?php

function verificarDisponibilidade($dominio)
{
 if(checkdnsrr($dominio, 'ANY') && gethostbyname($domain) != $domain)
        return "Este dominio nao esta disponivel";
    else
        return "este dominio esta disponivel";
}

?>
