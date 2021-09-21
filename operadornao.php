<?php
    /*
    Nesse exemplo o teste foi inserido mas não foi atribuido nenhum valor a ele
    A execução dele irá dar um retorno de warning, informando que não existe definição pra essa variavel
    alem de executar o código dentro do IF pois não existe a variavel $teste definida
    */
    $teste;
    if (!$teste){
        echo"não existe teste definido";
    }
    /*
    O retorno desse código seria algo como:
    Warning: Undefined variable $teste in Standard input code on line 8
    não existe teste definido
    */

?>
