<?php

   
    $json_str = '
        {"empregados":  
            [
                {"nome":"Adriano Bendazzoli", "idade":16, "sexo": "M"},
                {"nome":"Adriana Zorzenon", "idade":22, "sexo": "F"},
                {"nome":"Adriane Barbosa", "idade":23, "sexo": "F"}
            ]
        }';

    
    $jsonObj = json_decode($json_str);
    echo "<pre>";
    var_dump($jsonObj);
    echo "</pre>";
    
    
    echo "<hr>";    
    $empregados = $jsonObj->empregados;
    echo "<pre>";
    var_dump($empregados);
    echo "</pre>";
    


    echo "<hr>";
   
    foreach ( $empregados as $e ){
        echo "nome: $e->nome - idade: $e->idade - sexo: $e->sexo<br>"; 
    }

?>