<?php
    print "\nDigite um número até 1000: ";
        $numero = (int) fgets(STDIN);
            print "\n";
                    if(strlen($numero)==3){
                        if (substr($numero, 0,1)>1 and substr($numero,1,1)>1 and substr($numero,2,1)>1){
                            print substr($numero,0,1) . " centenas, " . substr($numero,1,1) . " dezenas e " . substr($numero,2,1) . " unidades.\n\n";
                        }
                        elseif(substr($numero, 0,1)>1 and substr($numero,1,1)>1 and substr($numero,2,1)==1){
                            print substr($numero,0,1) . " centenas, " . substr($numero,1,1) . " dezenas e " . substr($numero,2,1) . " unidade.\n\n";
                        }
                        elseif(substr($numero, 0,1)>1 and substr($numero,1,1)==1 and substr($numero,2,1)==1){
                            print substr($numero,0,1) . " centenas, " . substr($numero,1,1) . " dezena e " . substr($numero,2,1) . " unidade.\n\n";
                        }
                        elseif(substr($numero, 0,1)>1 and substr($numero,1,1)==1 and substr($numero,2,1)>1){
                            print substr($numero,0,1) . " centenas, " . substr($numero,1,1) . " dezena e " . substr($numero,2,1) . " unidades.\n\n";
                        }
                        elseif(substr($numero, 0,1)==1 and substr($numero,1,1)>1 and substr($numero,2,1)>1){
                            print substr($numero,0,1) . " centena, " . substr($numero,1,1) . " dezenas e " . substr($numero,2,1) . " unidades.\n\n";
                        }
                        elseif(substr($numero, 0,1)==1 and substr($numero,1,1)>1 and substr($numero,2,1)==1){
                            print substr($numero,0,1) . " centena, " . substr($numero,1,1) . " dezenas e " . substr($numero,2,1) . " unidade.\n\n";
                        }
                        elseif(substr($numero, 0,1)==1 and substr($numero,1,1)==1 and substr($numero,2,1)==1){
                            print substr($numero,0,1) . " centena, " . substr($numero,1,1) . " dezena e " . substr($numero,2,1) . " unidade.\n\n";
                        }
                        elseif(substr($numero, 0,1)==1 and substr($numero,1,1)==1 and substr($numero,2,1)>1){
                            print substr($numero,0,1) . " centena, " . substr($numero,1,1) . " dezena e " . substr($numero,2,1) . " unidades.\n\n";
                        }
                        elseif(substr($numero, 0,1)==1 and substr($numero,1,1)==1 and substr($numero,2,1)>1){
                            print substr($numero,0,1) . " centena, " . substr($numero,1,1) . " dezena e " . substr($numero,2,1) . " unidades.\n\n";
                        }
                        elseif(substr($numero, 0,1)==1 and substr($numero,1,1)==1 and substr($numero,2,1)>1){
                            print substr($numero,0,1) . " centena, " . substr($numero,1,1) . " dezena e " . substr($numero,2,1) . " unidades.\n\n";
                        }
                        elseif(substr($numero, 0,1)>1 and substr($numero,1,1)>1 and substr($numero,2,1)==0){
                            print substr($numero,0,1) . " centenas e " . substr($numero,1,1) . " dezenas.\n\n";
                        }
                        elseif(substr($numero, 0,1)>1 and substr($numero,1,1)==1 and substr($numero,2,1)==0){
                            print substr($numero,0,1) . " centenas e " . substr($numero,1,1) . " dezena.\n\n";
                        }
                        elseif(substr($numero, 0,1)==1 and substr($numero,1,1)>1 and substr($numero,2,1)==0){
                            print substr($numero,0,1) . " centena e " . substr($numero,1,1) . " dezenas.\n\n";
                        }
                        elseif(substr($numero, 0,1)==1 and substr($numero,1,1)==1 and substr($numero,2,1)==0){
                            print substr($numero,0,1) . " centena e " . substr($numero,1,1) . " dezena.\n\n";
                        }
                        elseif(substr($numero, 0,1)>1 and substr($numero,1,1)==0 and substr($numero,2,1)==0){
                            print substr($numero,0,1) . " centenas.\n\n";
                        }
                        elseif(substr($numero, 0,1)==1 and substr($numero,1,1)==0 and substr($numero,2,1)==0){
                            print substr($numero,0,1) . " centena.\n\n";
                        }
                    }
                            if(strlen($numero)==2){
                                if(substr($numero, 0,1)>1 and substr($numero,1,1)>1){
                                    print substr($numero,0,1) . " dezenas e " . substr($numero,1,1) . " unidades.\n\n";
                                }
                                elseif(substr($numero, 0,1)>1 and substr($numero,1,1)==1){
                                    print substr($numero,0,1) . " dezenas e " . substr($numero,1,1) . " unidade.\n\n";
                                }
                                elseif(substr($numero, 0,1)==1 and substr($numero,1,1)>1){
                                    print substr($numero,0,1) . " dezena e " . substr($numero,1,1) . " unidades.\n\n";
                                }
                                elseif(substr($numero, 0,1)==1 and substr($numero,1,1)==1){
                                    print substr($numero,0,1) . " dezena e " . substr($numero,1,1) . " unidade.\n\n";
                                }
                                elseif(substr($numero, 0,1)>1 and substr($numero,1,1)==0){
                                    print substr($numero,0,1) . " dezenas.\n\n";
                                }
                                elseif(substr($numero, 0,1)==1 and substr($numero,1,1)==0){
                                    print substr($numero,0,1) . " dezena.\n\n";
                                }
                            }
                                    if(strlen($numero)==1){
                                        if(substr($numero, 0,1)>1){
                                            print substr($numero,0,1) . " unidades.\n\n";
                                        }
                                        else{
                                            print substr($numero,0,1) . " unidade.\n\n";
                                        }
                                    }