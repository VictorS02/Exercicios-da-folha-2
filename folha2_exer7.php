<?php

print "Digite o2 primeiro número : ";
    $numero_1 = (float) fgets (STDIN);

print "Digite o segundo número : ";
    $numero_2 = (float) fgets (STDIN);

 print "Digite o terceiro número : ";
    $numero_3 = (float) fgets (STDIN);

if($numero_1 > $numero_2){
    if($numero_1 > $numero_3){
        print "\nO maior número é: $numero_1";
    }else{
        print "\nO maior número é: $numero_3";
    }
}elseif ($numero_2 > $numero_3) {
    print "\nO maior número é:$numero_2";
}else{
    print "\nO maior número é:$numero_3";
}

if($numero_1 < $numero_2){
    if($numero_1 < $numero_3){
        print "\nO menor número é: $numero_1";
    }else{
        print "\nO menor número é: $numero_3";
    }
}elseif ($numero_2 < $numero_3) {
    print "\nO menor número é:$numero_2";
}else{
    print "\nO menor número é:$numero_3";
}