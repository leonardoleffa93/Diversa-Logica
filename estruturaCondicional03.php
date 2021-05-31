<?php
    //variavel "diaSemana" definido como "5"
    $diaSemana = 5;
    //validação de casos por switch, onde ele verifica varios casos "se"
    switch ($diaSemana) {
       case 1:
            print ("Domingo");
            break;
       case 2:
            print ("Segunda-feira");
            break;
       case 3:
            print ("Terça-feira");
            break;
       case 4:
            print ("Quarta-feira");
            break;
       case 5:
            print ("Quinta-feira");
            break;
       case 6:
            print ("Sexta-feira");
            break;
       case 7:
            print ("Sábado");
            break;
       default:
            echo "Dia errado informado";
    }
?>
