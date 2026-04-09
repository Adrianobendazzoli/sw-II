<?php


    $lista_produtos = file_get_contents("produtos.json");


    $lista = json_decode($lista_produtos, true);


    $produto_novo = ["nome" => "Celular",
                      "preco" => 4000,
                      "quantidade"=> 12
                    ];
    
 
     $lista["produtos"][] = $produto_novo;
     
  
     $item_novo = json_encode($lista);

 
     file_put_contents("produtos.json", $item_novo);
?>