<?php

  
    $lista_usuario = file_get_contents("usuarios.json");

    $usu_dados= json_decode($lista_usuario, true);

    $dado_usu = $usu_dados['usuarios'];

    foreach ($dado_usu as $du) {
        echo "Nome: " . $du['nome'] . "  -  Email: " . $du['email'] . "<br>";
    }

?>