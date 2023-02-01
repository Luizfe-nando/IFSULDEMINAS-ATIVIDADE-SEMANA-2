<?
/*Escreva um programa que leia n números inteiros a partir do teclado, até que o usuário digite 0 (para parar a somatória). Ao final, mostre a soma de todos os números digitados.*/

$total = 0;
$numero = (int) readline("Digite um numero: ");
$total = $numero;
$numeros = (int) readline("Digite um numeros: ");
  $total += $numeros;
  for($numero = 0 ; $numero <= $total; $numero++) {  
  $numeros = (int) readline("Digite um numeros: ");
  $total += $numeros;
  if($numeros == 0){
   break;    
  }
}
echo "A soma de todos os numeros digitados: $total";
?>