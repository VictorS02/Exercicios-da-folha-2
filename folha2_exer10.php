<?php

    print "\n ax² + bx + c \n";
    print "\n Digite o valor equivalente a 'a': ";
        $a = (int) fgets(STDIN);

    print "\n Digite o valor equivalente a 'b': ";
        $b = (int) fgets(STDIN);

    print "\n Digite o valor equivalente a 'c': ";
        $c = (int) fgets(STDIN);

    if ($a == 0) {
        exit("\n O valor de 'a' é inválido, ou seja, esta não é uma equação do segundo grau.\n\n");
    }
                            
    $delta = (int) (pow($b, 2)) - (4*$a*$c);
                                 
    $x1 = (int) (((-$b) + (sqrt($delta))) / (2*$a));
    $x2 = (int) (((-$b) - (sqrt($delta))) / (2*$a));
                                    
    if ($delta < 0) {
    exit("\n O valor de delta é negativo, sendo igual a $delta. Devido a isso, não existem raízes reais. \n\n");
    }
    elseif ($delta == 0) {
        print "\n O valor de delta é igual a $delta, ou seja, a equação possui apenas uma raiz real, sendo ela $x1. \n\n";
    }
    else {
        print "\n O valor de delta é igual a $delta. As duas raízes reais da equação são $x1 e $x2
. \n\n";
    }