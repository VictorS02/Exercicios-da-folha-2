<?php

print "\nFigura 1\n";
   
    $trianguloHipotenusaDireita = ["*", "**", "***", "****", "*****", "******", "*******", "********"];
        for ($contador = 0; $contador <= 7; $contador++) {
             print $trianguloHipotenusaDireita[$contador] . "\n";
    }

      print "\nFigura 2\n";                 
    $quadrado = ["********", "********", "********", "********", "********", "********", "********", "********"];
        for ($contador = 0; $contador <= 7; $contador++) {
            print $quadrado[$contador] . "\n";
    }

      print "\nFigura 3\n";                
    $trianguloHipotenusaEsquerda = ["       *", "      **", "     ***", "    ****", "   *****", "  ******", " *******", "********"];
        for ($contador = 0; $contador <= 7; $contador++) {
            print $trianguloHipotenusaEsquerda[$contador] . "\n";
    }
                    