<?php
    
    //$nome = $_POST['nome'];
    //echo 'Seja bem vindo ' .$nome;

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $soma = $valor1 + $valor2;
    $sub = $valor1 - $valor2;
    $mult = $valor1 * $valor2;
    $div = $valor1 / $valor2;
    echo "<p>A soma dos valores é: $soma</p>";
    echo "<p>A subtração dos valores é: $sub</p>";
    echo "<p>A multiplicação dos valores é: $mult</p>";
    echo "<p>A divisão dos valores é: $div</p>";
    if ($soma > 0) {
        echo "<p>A soma é maior que zero</p>";
        
    } else { 
        echo "<p>A soma é menor que zero</p>";
    }

    switch ($soma){
        case 0:
            echo "<p>A soma é igual a zero</p>";
            break;
        case 1:
            echo "<p>A soma é igual a um</p>";
            break;
        default:
            echo "<p>Outra opção</p>";
            break;
    }

    if ($sub == 0) {
        echo "<p>A subtração é igual a zero</p>";
    } else {
        echo "<p>Diferente de 0</p>";
    }

    echo $sub == 0 ? 'A subtração é igual a zero' : 'Diferente de 0';

    if {($soma == 0) && ($sub == 0)  ||  ($mult)} {
        echo "exibindo mensagem";
    }

    $i=0
    while ($i < 10) {
        echo $i;
        $i++;
    }

    for ($i=0; $i < 10; $i++) {
        echo $i;
    }
