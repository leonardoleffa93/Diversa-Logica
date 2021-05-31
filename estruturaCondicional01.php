<?php
    //define a variável "idade" como o numero inteiro "18" 
    $idade = 18;
    //validação "se" para caso a "idade" seja maior ou igual a "18"
    if ($idade >= 18)
    {
        //define a variavel "x" como string(texto) "É maior de idade" 
        //lembrando que para definir uma variavel com valor de string, é inserido o valor entre aspas (") 
        $x = "É maior de idade";
    }
    //validação "senao" caso idade não seja maior ou igual a 18
    else
    {
        //define a variavel "x" com a string "É menor de idade"
        $x = "É menor de idade";
    }
    //imprime na tela a variavel "x", que anteriormente foi definida na validação "se" ou na validação "senao"
    echo $x;
?>
