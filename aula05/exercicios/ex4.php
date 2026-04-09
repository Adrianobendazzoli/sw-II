<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <form action="" method="GET">
        <p>Qual email você esta procurando?</p>
        <input type="text" name="email">
        <input type="submit" value="ENVIAR!">
    </form>
</body>
</html>

<?php

    $encontra = null;
    $email = $_GET['email'] ?? null; //as interrogações são um operador pra ver se é nulo, sem elas assim que abrir a tela vai abrir um erro falando que o form esta nulo

    if ($email) { 

 
        $lista_usuario = file_get_contents("usuarios.json");


        $lista = json_decode($lista_usuario, true);


        $lista_usu = $lista['usuarios'];


        foreach ($lista_usu as $lu) {
            if ($lu["email"] == $email) {
                $encontra = $lu;
                break;
            }
        }


        if ($encontra) {
            echo "O usuário foi encontrado! <br><br>";
            echo "Nome: " . $encontra["nome"] . "<br>";
            echo "Email: " . $encontra["email"] . "<br>";
        } else {
            echo "O usuário não foi encontrado!";
        }

    }
?>