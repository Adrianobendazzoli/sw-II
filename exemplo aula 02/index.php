<?php

  
for ($i = 1; $i <= 5; $i++) {

    if ($i %2 == 0 ) {
        $resto = "Aprovado!";
    } else {
        $resto = "Reprovado!";
}
 {
    echo "Número: " . $i . "====>" . $resto. "<br>";
}
}
?>