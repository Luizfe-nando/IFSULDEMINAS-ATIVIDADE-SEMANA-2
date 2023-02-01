<?
/*2. Escreva um programa que solicite um número de 1 a 10 e imprima a sua tabuada, baseado no número final digitado(inclusive). 
Por exemplo: Digite o valor da tabuada: 5, depois digite o valor final 15. O resultado será 0,5,10,15,20,25,30,35,40,45,50,55,60,65,70,75.*/

$tabuada = (int) readline("Digite o valor da tabuada: ");
$numero = (int) readline("Digite o valor final: ");
$limite = 10;

if ($tabuada > $limite) {
 echo "Digite um numero de 1 a 10 para TABUADA";
}
for ($calculo = 0;$calculo <= $numero;$calculo++) {
  
  echo $calculo * $tabuada.", "; 
  
}

?>