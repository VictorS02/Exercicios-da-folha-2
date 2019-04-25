<?php
    $primeiroNumero = 1;
    $segundoNumero = 0;
        print "\n";
            do {
                $primeiroNumero = $segundoNumero + $primeiroNumero;
                $segundoNumero = $primeiroNumero - $segundoNumero;
                    print $primeiroNumero . "\n";
            } while ($primeiroNumero <= 500);