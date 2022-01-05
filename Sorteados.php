<?php
$numerosSorteados = [];

function sorteiaNumeros(&$sorteados)
{
    for ($i = 0; $i < 20; $i++) {
        $numero = rand(1, 10);
        $sorteados[$i] = $numero;
    }
    print_r($sorteados);
}

function verificaDuplicados(&$arrayComDuplicados)
{
    $unicos = array_unique($arrayComDuplicados);
    $duplicados = array_diff_assoc($arrayComDuplicados, $unicos);
    $diferenca = array_diff($unicos, $duplicados);
    print_r($diferenca);
}

echo "Os números sorteados foram: " . PHP_EOL;
sorteiaNumeros($numerosSorteados);
echo "Os números não repetidos foram: " . PHP_EOL;
verificaDuplicados($numerosSorteados);


