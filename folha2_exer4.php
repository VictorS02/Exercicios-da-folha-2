<?php

print "Favor digite uma letra : ";
    $letra = fgetc (STDIN);

if($letra=="a" or $letra =="e" or $letra =="i" or $letra=="o" or $letra=="u"){
    print "Essa letra é uma vogal";
}else{
    print "Essa letra é uma consoante";
}