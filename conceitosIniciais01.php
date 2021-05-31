<?php
    //echo serve para imprimir na tela algo escrito sem formatação
    //as aspas ("") são pra definir como texto (string) as palavras escritas, e não como código.
    echo "Olhando para a direita. \n";
    echo "Olhando para a esquerda.\n";
    //variavel temCarro definida como a string "sim";
    $temCarro = "sim";
    //verificação "se" para ver se "temCarro" é definido como "sim"
    if($temCarro == "sim")
    {
        echo "Não atravessei a rua";
    //verificação "senao" caso "temCarro" está definida como "não"
    } else {
        echo "Atravessei a rua";
    }
?>
