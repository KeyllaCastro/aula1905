<?php
                        //estrutura php
//em linha
/**em bloco**/
//seleciona control + ;

echo"Olá, mundo! \n";
//tipos de dados
/**
 * PAra declarar uma variavel 
 * em php devemos utilizar o $,
 * não precisa declarar
 */

 $nome="Torantina Macedo"; //String
 $idade= 67; //inteiro
 $altura=1.59; //double
 $peso=69; //double
 $isVacinada=true; //booleano

 echo "Nome: $nome <br>\n
        Idade: $idade <br>\n
        Altura: $altura <br>\n
        Peso: $peso <br>\n
        Vacinado: $isVacinada <br>\n
 
 ";

echo"<br>CONDICIONAIS<br>"

 //CONDICIONAIS
 if($idade >= 18){
    echo"$nome, é maior de idade e possui de $idade anos"; 
 }else{
    echo"$nome, é menor de idade e possui de $idade anos"; 
 }
 
 //LAÇOS DE REPETIÇÕES - REPETE - FOR, WHILE E DO WHILE(FAZER ENQUANTO FOR VERDADEIRA) enquanto, repita e para

/**While
O laço while é uma estrutura de controle que executa um bloco de código enquanto uma condição específica for verdadeira. A condição é verificada antes da execução do bloco de código.
O while é ideal quando você não sabe quantas vezes precisa repetir um bloco de código, mas sabe que deve continuar enquanto uma condição for verdadeira.

Do-While
O laço do-while é semelhante ao while, mas com uma diferença chave: a condição é verificada após a execução do bloco de código. Isso garante que o bloco de código seja executado pelo menos uma vez.
O do-while é ideal quando você precisa executar um bloco de código pelo menos uma vez e, em seguida, repetir enquanto uma condição for verdadeira.

For
O laço for é uma estrutura de controle que executa um bloco de código um número específico de vezes. Ele é composto por três partes: inicialização, condição e incremento.
O for é ideal quando você sabe exatamente quantas vezes precisa repetir um bloco de código.
 quais sãoos numeros paras de 1 a 100*/
 <?php
 echo "<br>LAÇOS<br>";
 
 for ($i = 1; $i <= 100; $i++) {
     if ($i % 2 == 0) {
         echo "$i <br>\n";
     }
 }
 
 function verificaNumerosPares(): void {
     for ($i = 1; $i <= 100; $i++) {
         if ($i % 2 == 0) {
             echo "$i <br>\n";
         }
     }
 }
 
 verificaNumerosPares();
 ?>
