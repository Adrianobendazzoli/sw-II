<?php
    
    $json_str = '{"Adriano":16,"Adriana":22,"Adriane":23}';


    $json_arr = json_decode($json_str, true);
    

    var_dump($json_arr);


    foreach ($json_arr as $chave => $valor) {
        echo "A chave é: $chave ==> $valor <br>";
    }
?>