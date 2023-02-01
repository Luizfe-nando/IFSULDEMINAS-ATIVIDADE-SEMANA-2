<?
/*Escreva um programa que leia o número inicial, leia o número final (número inicial sempre menor que o final) e imprima-os (eles e os números sequenciais até o maior ou menor) na tela, em ordem decrescente.

Por exemplo: Menor: 5 - Maior: 10 resultado -> 10, 9, 8, 7, 6, 5*/


$inicial = (int) readline("Digite o numero de INICIO (MENOR QUE O PROXIMO) ");
$final = readline("\n\nDigite o numero de FINAL (MAIOR QUE O ANTERIOR) ");

if ($final < $inicial) {
  echo "O numero inicial nao pode ser maior que o numero final";
}
while ($final >= $inicial) {
    echo "$final, "; 
    $final--;
}
?> 