<?php

// Verificar quais são os números primos dado um grupo, excluindo os números inicial e final

function primo(int $inicial, int $final)
{
    if ($inicial < 0) {
        echo "Número inicial inválido. Tente novamente";
        exit();
    }

    if ($final < 0) {
        echo "Número final inválido. Tente novamente";
        exit();
    }

    $primos = [];

    for ($i = $inicial + 1; $i < $final; $i++) {
        for($j = 2; $j < $i; $j++ ){
            $divisores = 0;
            if($j % $i == 0){
                $divisores++;
                break;
            }
            unset($divisores);
        }
        $primos[]  = $i;
    }
    var_dump($primos);
}

primo(10, 29);



