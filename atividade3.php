<?php
/* 3- Termine o script abaixo. A variável $preco contém o valor da venda. Acrescente 12% ao
preço do produto, divida em 10 parcelas e mostre na tela o valor de cada parcela e o valor total
da compra. */
$preco = 320;
$juros = (12 / 100);
$multi = $juros * $preco;
$valorfinal = $multi + $preco;
$parcela = $valorfinal / 10;

echo "valor total da compra: ";
echo $valorfinal;
echo "<br>";
echo "valor das parcelas em 10x: ";
echo $parcela;
