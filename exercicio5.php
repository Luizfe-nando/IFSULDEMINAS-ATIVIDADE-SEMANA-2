<?
/*Escreva um programa que permita ao usuário inserir os valores dos produtos comprados por um cliente. O programa deve terminar quando o usuário inserir o valor 0. Se o usuário digitar um valor negativo não deve ser processado e um novo valor deve ser solicitado como entrada. Ao final, informe o valor total a pagar, lembrando que, caso as vendas ultrapassem o total de R$ 1.000,00, deverá ser aplicado um desconto de 15%.*/

$novo_cliente = readline("Digite o nome do cliente: ");
//$novo_produto = (int) readline("Digite o valor do produto: ");

$cliente1 = array(
  "nome" => "$novo_cliente",
  "valor produto" => "$novo_produto", 
);


$mais_produto = 0;
$desconto = 1000.00;
$total = 0;

$total = $novo_produto;

  for($numero = 0 ; $numero <= $total; $numero++) {  
  $novo_produto = (int) readline("Digite um valor ou zero para cancelar: ");
 
  array_push($cliente1, ("$novo_produto"));
  
  if($novo_produto == 0){
    $ultimo_digito = array_pop($cliente1, );
   break;
    
  }elseif($novo_produto < 0){
    $ultimo_digito = array_pop($cliente1);
    $novo_produto = (int) readline("O numero não pode ser negativo !\n Digite outro valor ou zero para cancelar: ");
    array_push($cliente1, ("$novo_produto"));
    
  if($novo_produto == 0){
    break;    
  }
   //$mais_produto = $novo_produto;
    //$total += $novo_produto;
  }
  $mais_produto = $novo_produto;
  $total += $novo_produto;
}


if($total > $desconto){
  $novo_total = $total /100*15;
  $valor_desconto = $total - $novo_total;
  echo "O valor total a pagar com desconto é: $valor_desconto<br>";
} else{
echo "O valor total a pagar é: $total<br>";
}
print_r($cliente1);
?>