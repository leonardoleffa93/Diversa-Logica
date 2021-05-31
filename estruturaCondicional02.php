<?php
    //condição "se" variavel "idade" for menor que "2"
    if ($idade < 2) {
        //impressão na tela do texto "uso não permitido"
        echo "uso não permitido";
    }
    //condigção "senao" porém logo em seguida faz a validação "se" para o caso da idade ser maior que "65"
    else if ($idade > 65) {
        //impressão do texto "uso somente com prescrição médica"
        echo "uso somente com prescrição médica";
    } 
    //condição "senao" para caso não seja nenhuma das condições "se" anteriores
    else 
    {
        echo "uso sem restrições";
    }
?>
