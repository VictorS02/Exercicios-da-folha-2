<?php

    print "\n Digite o primeiro número: ";
    $primeiroNumero = fgets(STDIN);

    print "\n Digite o segundo número: ";
    $segundoNumero = fgets(STDIN);

    print "\n Digite o terceiro número: ";
    $terceiroNumero = fgets(STDIN);

    $numeros = [$primeiroNumero, $segundoNumero, $terceiroNumero];
                             
    print "\n\n Os números em ordem decrescente é: \n\n";

    rsort($numeros); 
                                    
     foreach ($numeros as $intermediador) {
    print $intermediador;
    }