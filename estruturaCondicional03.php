<?php
    //variavel "diaSemana" definido como "5"
    $diaSemana = 3;
    //validação de casos por switch, onde ele verifica varios casos "se" usando a variavel "diaSemana"
    switch ($diaSemana) {
        //"case" seria o mesmo que "if" em um switch, sendo uma verificação "se"
        //no "case" (se) a variavel "diaSemana" for "1"
        case 1:
            //imprime "Domingo" caso a variavel "diaSemana" seja comfigurada como "1"
            print ("Domingo");
            break;
       case 2:
            //imprime "Segunda-feira" caso a variavel "diaSemana" seja comfigurada como "2"
            print ("Segunda-feira");
            break;
       case 3:
            //imprime "Terça-feira" caso a variavel "diaSemana" seja comfigurada como "3"
            print ("Terça-feira");
            break;
       case 4:
            //imprime "Quarta-feira" caso a variavel "diaSemana" seja comfigurada como "4"
            print ("Quarta-feira");
            break;
       case 5:
            //imprime "Quinta-feira" caso a variavel "diaSemana" seja comfigurada como "5"
            print ("Quinta-feira");
            break;
       case 6:
            //imprime "Sexta-feira" caso a variavel "diaSemana" seja comfigurada como "6"
            print ("Sexta-feira");
            break;
       case 7:
            //imprime "Sabado" caso a variavel "diaSemana" seja comfigurada como "7"
            print ("Sábado");
            break;
       //default é caso não exista o valor informado na variavel "diaSemana" dentro dos cases acima
       default:
            echo "Dia errado informado";
    }
?>
