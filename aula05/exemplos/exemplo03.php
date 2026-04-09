<?php

    $json_str = '{"empregados": 
        [
            {"nome":"Adriano Bendazzoli", "idade":16, "sexo": "M", "dependentes": ["Priscila Bendazzoli", "Augusta Bendazzoli"]},
            {"nome":"Adriana Zorzenon", "idade":22, "sexo": "F"},
            {"nome":"Adriane Barbosa", "idade":23, "sexo": "F"}
        ],
        "data": "15/12/2012"}';


    $jsonObj = json_decode($json_str);

    $empregados = $jsonObj->empregados;

    echo "<b>data do arquivo</b>: $jsonObj->data<br/>";
    foreach ( $empregados as $e ){
        echo "nome: $e->nome - idade: $e->idade - sexo: $e->sexo<br/>";
        if (property_exists($e, "dependentes")) { 
            $deps = $e->dependentes;
            echo "dependentes: <br/>";
            foreach ( $deps as $d ) echo "- $d<br/>";
        }
    }
?>