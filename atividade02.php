<?php
    
    //Faça um algoritmo em PHP que calcule a idade de uma pessoa e o seu IMC.
    //Lembrando que o IMC é calculado dividindo o peso (em kg) pela altura ao quadrado.

    //Como calculo a idade? ano atual - ano de nascimento
    $anoNascimento = 1976;
    $anoAtual = 2021;
    
    $idade = $anoAtual - $anoNascimento;
    
    //Como calculo o IMC? (peso)/ (altura x altura)
    $peso = 76; //variavel peso definida como 76
    $altura = 1.68; //variavel altura definida como 1.68
    
    $imc = ($peso) / ($altura * $altura); 
    //variavel imc é definida como a variavel peso (que é 76 no código) dividido pela variavel altura multiplicada por ela mesmo(altura ao quadrado)
    //$imc = ($peso) / pow($altura, 2);
    
    //Imprimindo em tela os resultados
     echo 'Idade: ' . $idade . "\n";
     echo 'IMC: ' . $imc;
    
?>
