<?php

    $valor1 = $_POST['valor1'];

    if ($valor1 > 0) {
        echo "<p>O valor é positivo</p>";
    } else if ($valor1 < 0){
        echo "<p>O valor é negativo</p>";
    } else {
        echo "<p>O valor é igual a zero</p>";
    }