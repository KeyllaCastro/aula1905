<?php
/*Faça um programa que peça uma nota, entre zero e dez. Mostre uma
mensagem caso o valor seja inválido e continue pedindo até que o
usuário informe um valor válido. */

$nota = $_POST["nota"];
    
  // enquanto a nota for menor que zero e maior que 10 o valor seja inválido 
  while ($nota <1 || $nota > 10 ){
    echo "Valor inválido";
    return;
  }
  echo "Você digitou a nota $nota <br>";
?>

