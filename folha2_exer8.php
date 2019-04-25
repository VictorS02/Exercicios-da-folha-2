<?php

print "\nDigite o preço do primeiro produto : \n";
    $produto_1 = (float) fgets (STDIN);

print "\nDigite o preço do segundo produto : \n";
    $produto_2 = (float) fgets (STDIN);

print "\nDigite o preço do terceiro produto : \n";
    $produto_3 = (float) fgets (STDIN);

  if($produto_1 < $produto_2 ){
        if($produto_1 <  $produto_3){
            print "\nO produto mais barato custa: $produto_1 reais";
         }else{
            print "\nO produto mais barato custa:  $produto_3 reais";
        }
      }elseif ($produto_2 <  $produto_3) {
        print "\nO produto mais barato custa: $produto_2 reais";
      }else{
        print "\nO produto mais barato custa:  $produto_3 reais";
    }