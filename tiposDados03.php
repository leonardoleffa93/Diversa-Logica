<?php
    //String simples
    echo 'Exemplo 01 de string';
    echo "\n";
    
    //Tipo de dado e o valor
    var_dump("Exemplo 02 de string");
    
   //Concatenação de string
   
   echo "String 01" . ' String 02';
   echo "\n";
  
   echo 'String 03 , String 04'; 
   echo "\n";

   //Função print
   print("Também existe a função print");
   echo "\n";
   
   //------------- Algumas funções de strings --------------------//
   
   //Deixa a string maiúscula
   echo strtoupper('maximizado');
   echo "\n";

    //Deixa a string minúscula
    echo strtolower('MINIMIZADO');
    echo "\n";
  
   //Imprimindo a primeira letra em maiúsculo
   echo ucfirst('Testando a função ucfirst');
   echo "\n";
   
   //Imprimindo a primeira letra em maiúsculo de todas as palavras
   echo ucwords('Todas as palavras');
   echo "\n";
   
   //Contabilizando o numero de letras
   echo strlen('Quantidade de letras');
   echo "\n";

    //Imprimindo só uma parte da string
    echo substr('Só uma parte', 7, 6);
    echo "\n";

    //Imprimindo uma string e trocando uma palavra por outra
    echo str_replace('Joao', 'Maria', 'Joao tem 20 anos');
    echo "\n";
   
?>
