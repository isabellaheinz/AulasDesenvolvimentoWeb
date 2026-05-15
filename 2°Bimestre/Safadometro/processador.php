<?php

$dia = $_REQUEST['campoDia'];
$mes = $_REQUEST['campoMes'];
$ano = $_REQUEST['campoAno'];

function somatorio (int $n){
    $somatorio = 0;

    for ($i=1; $i <= $n; $i++) { 
       $somatorio += $i;
    }

    return $somatorio;
}

function somaDigitos (int $n) {

    $soma = 0;

    while ($n > 0) {
        $digito = $n % 10;
        $soma += $digito;
        $n = $n /10;
    }

    return $soma;
}

function safadometro(int $dia, int $mes, int $ano) {
    $safadeza = 0;
    $safadeza = somatorio($mes) + (somaDigitos($ano) * (50-$dia)) / 10;
    
    return $safadeza;
}

$anjo = 100 - safadometro($dia, $mes, $ano);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    
</body>
</html>