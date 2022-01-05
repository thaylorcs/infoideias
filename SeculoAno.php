<?php

function seculoAno(int $ano) {
    if($ano <= 0 ){
        echo "Ano inválido, tente novamente.";
        exit(0);
    }
    echo "Ano informado: " . $ano . PHP_EOL;
    return "Século: " . ceil($ano / 100);
}

$seculo = seculoAno(2020);
echo $seculo;

