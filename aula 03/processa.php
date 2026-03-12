

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de dados</title>
</head>
<body>
    
<?php
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $anoAtual = date('Y');
    $txt = '';

    $nasc = $anoAtual - $idade;

?>

    <p>O nome é: <?php echo $nome; ?></p>
    <p>O email é: <?php echo $email; ?></p>
    <p>A idade é: <?php echo $idade; ?></p>
    <p>O seu ano de nascimento é: <?php echo $nasc; ?></p>

    <?php
     if ($idade < 18) {
        echo "<p style = 'color: green';> Você é menor de idade </p>" ;
     }else {
        echo "<p style = 'color: red';> Você é maior de idade </p>";
     }

     echo "<p>Lista de clientes</p>";
     echo "<ul>";
     for ($i=1; $i <= 7 ; $i++) { 
        echo "<li>Item $i</li>";
     }
     echo "</ul>";

    ?>

    
</body>
</html>