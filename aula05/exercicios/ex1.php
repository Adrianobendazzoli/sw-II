<?php

   
    $produtos=['produtos' =>
        [
            ['nome'=>'Computador', 'preco'=>2000, 'quantidade'=> 5],
            ['nome'=>'Notebook', 'preco'=>3000, 'quantidade'=> 15],
            ['nome'=>'Chocolate', 'preco'=>20, 'quantidade'=> 50]
        ]
    ];


    $json = json_encode($produtos);


    file_put_contents('produtos.json', $json);
    

    
?>