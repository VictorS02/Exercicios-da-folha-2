<?php

    $soma = 0;
        for ($contador = 1; $contador <= 5; $contador++) {
            print "\n Digite o " . $contador . "º número: ";
                $numero = (float) fgets(STDIN);
                    $soma += (float) $numero;
                        $media = (float) round($soma / $contador, 1);
        }
            print "\n A soma dos números digitados é: " . $soma . ". E a média desses números é igual a " . $media . " . \n\n";
