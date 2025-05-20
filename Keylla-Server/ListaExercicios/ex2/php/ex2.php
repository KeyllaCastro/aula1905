<?php

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
   
    if ($usuario == $senha) {
       echo"Senha não pode ser igual nome do usuário";
        while ($usuario == $senha) 
            return;
    } else {
        echo "Você foi cadastrado!";
    }
?>
 
 