<?php

print "Digite a primeira nota do aluno : ";
    $nota_1 = (float) fgets (STDIN);

print "Digite a segunda nota do aluno : ";
    $nota_2 = (float) fgets (STDIN);

$media = ($nota_1 + $nota_2)/2;

if($media== 10){
    print "\nAprovado com Distinção\n";
 }
 elseif($media>= 7){
     print "\nAprovado\n";
 }
 else{
     print "\nReprovado\n";
 }