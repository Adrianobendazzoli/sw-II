<?php

    
    $lista_produto = file_get_contents("produtos.json");


     $lista = json_decode($lista_produto, true);


     $remove= "Celular";

 
     $lista_pro = $lista['produtos'];


     foreach ($lista_pro as $lp => $produto) {
        if ($produto['nome'] == $remove) {
            unset($lista["produtos"][$lp]); //apaga do array
        }
     }

      $json = json_encode($lista);
      file_put_contents("produtos.json", $json); 
?>