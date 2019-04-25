<?php

    print "\n Digite a base para fazer a exponenciação: ";
        $base = (float) fgets(STDIN);
            
    print "\n Digite o expoente para fazer a exponenciação: ";
         $expoente = (float) fgets(STDIN);

         $exponenciacao = (float) $base ** $expoente;

    print "\n O resultado da exponenciação é: " . round($exponenciacao, 2) . " , " . "Tendo como base " . $base . " e como expoente " . $expoente . " . \n\n";