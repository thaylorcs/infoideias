<?php

// Validar que dado um array ele continua numa sequência crescente mesmo após remover um item

$array = [1, 3, 2];

function sequenciaCrescente(&$array)
{
    $crescente = false;
    for ($i = 0; $i < count($array); $i++) {
        if ($i == 0) {
            continue;
        } else {
            if($i - 1 < $i) {

            }
        }

    }
}

sequenciaCrescente($array);
