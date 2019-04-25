<?php

    $contadorImpar = 0;
    $contadorPar = 0;

    for ($contador = 1; $contador <= 10; $contador++) {
        print "\n Digite o " . $contador . "º número (inteiro): ";
            $numero = (int) fgets(STDIN);

                if ( ($numero%2) == 0 ) {
                    $contadorPar += 1;
                }
                else {
                    $contadorImpar += 1;
                }
    }
       print "\nDe todos os números digitados ". $contadorImpar." são impares e ". $contadorPar." são pares\n";