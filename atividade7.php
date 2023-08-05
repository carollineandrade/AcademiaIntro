<?php
/* 7- Termine o script abaixo, exibindo o nome do mês correspondente à variável $numMes e caso o 
valor de $numMes esteja fora do intervalo entre 1 e 12, exibir a mensagem “Mês inválido”
$numMes = 8; */
$numMes = 8;
switch ($numMes) {
    case 1:
        $result  = 'O mês é Janeiro';
        break;
    case 2:
        $result  = 'O mês é Fevereiro';
        break;
    case 3:
        $result  = 'O mês é Março';
        break;
    case 4:
        $result  = 'O mês é Abril';
        break;
    case 5:
        $result  = 'O mês é Maio';
        break;
    case 6:
        $result  = 'O mês é Junho';
        break;
    case 7:
        $result  = 'O mês é Julho';
        break;
    case 8:
        $result = 'O mês é Agosto';
        break;
    case 9:
        $result  = 'O mês é Setembro';
        break;
    case 10:
        $result = 'O mês é Outubro';
        break;
    case 11:
        $result = 'O mês é Novembro';
        break;
    case 12:
        $result  = 'O mês é Dezembro';
        break;
    default:
    $result = "Mês inválido.";

}

echo $result;