<?php

print "Favor digitar o seu sexo (F/M): ";
    $sexo = fgetc (STDIN);

if($sexo == "F"){
    print "F-Feminino";
}else {
    if($sexo == "M"){
    print "M-Masculino";
    }else{
        print "Sexo Inválido";
    }
}