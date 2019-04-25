<?php

print "Digite um número : ";
    $numero_1 = (float) fgets (STDIN);

print "Digite outro número : ";
    $numero_2 = (float) fgets (STDIN);

if($numero_1 > $numero_2){
    print "O maior número é :$numero_1.";
}else{
    print "O maior número é :$numero_2.";
}