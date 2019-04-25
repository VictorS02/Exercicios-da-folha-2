<?php

print "Digite um número : ";
    $numero_1 = (float) fgets (STDIN);

if($numero_1 > 0){
    print "O número $numero_1 que foi digitado é positivo.";
}else{
    print "O número $numero_1 que foi digitado é negativo.";
}