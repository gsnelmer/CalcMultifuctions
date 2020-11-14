<?php

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    $num4 = $_POST["num4"];
    
    //1. Dizer qual é o maior;
    if($num1==$num2){
        if($num3==$num4){
            if($num1==$num3){
                
                echo "Todos os numeros inseridos sao iguais <br><br>";
            }
            else if($num1>$num3){
                echo "O Maior numero: $num1  <br><br>";
                echo "O Menor numero: $num3  <br><br>";
            }
            else{
                echo "O Maior numero: $num3 <br><br>";
                echo "O Menor numero: $num1  <br><br>";
            }
        }
        else if($num1 == $num3){
            echo "Existem 3 numeros iguais a: $num1 <br><br>";
            if($num1 > $num4){
                echo "O Maior numero: $num1 <br><br>";
                echo "O Menor numero: $num4  <br><br>";
            }
            else{
                echo "O Maior numero: $num4 <br><br>";
                echo "O Menor numero: $num1  <br><br>";
            }
        }
        else if($num1 == $num4){
            echo "Existem 3 numeros iguais a: $num1 <br><br>";
            if($num1 > $num3){
                echo "O Maior numero: $num1 <br><br>";
                echo "O Menor numero: $num3 <br><br>";
            }
            else{
                echo "O Maior numero: $num3 <br><br>";
                echo "O Menor numero: $num1  <br><br>";
            }
        }
        else if($num1 > $num3){
            echo "Existem 2 numeros iguais a: $num1 <br><br>";
            if($num1 > $num4){
                echo "O Maior numero: $num1 <br><br>";
                if($num4>$num3){
                    echo "O Menor numero: $num3  <br><br>";
                }
                else{
                    echo "O Menor numero: $num4  <br><br>";
                }
            }
            else{
                echo "O Maior numero: $num4 <br><br>";
                echo "O Menor numero: $num3  <br><br>";
            }

        }
        else if($num3 > $num4){
            echo "O Maior numero: $num3 <br><br>";
            if($num1>$num4){
                echo "O Menor numero: $num4  <br><br>";
            }
            else{
                echo "O Menor numero: $num1  <br><br>";
            }
        }
        else{
            echo "O Maior numero: $num4 <br><br>";
            echo "O Menor numero: $num1  <br><br>";
        }
    }
    else if($num2 == $num3){ 
        if($num2 == $num4){
                echo "Existem 3 numeros iguais a: $num2 <br><br>";
            if($num3 > $num1){
                echo "O Maior Numero: $num3 <br><br>";
                echo "O Menor numero: $num1  <br><br>";
            }
            else{
                echo "O Maior Numero: $num1 <br><br>";
                echo "O Menor numero: $num3  <br><br>"; 
            }
        }
        else if($num2 > $num1){
            if($num2 > $num4){
                echo "O Maior Numero: $num2 <br><br>";
                if($num1>$num4){
                    echo "O Menor numero: $num4  <br><br>";
                }
                else{
                    echo "O Menor numero: $num1  <br><br>";
                }
            }
            else{
                echo "O Maior Numero: $num4 <br><br>";
                echo "O Menor numero: $num1  <br><br>"; 
            } 
        }
        else if($num1 > $num4){
            echo "O Maior Numero: $num1 <br><br>";
           if($num2>$num4){
            echo "O Menor numero: $num4  <br><br>";
           } 
           else{
            echo "O Menor numero: $num2  <br><br>";
           }
        }
        else{
            echo "O Maior Numero: $num4 <br><br>";
            echo "O Menor numero: $num2  <br><br>";
        }   
    }
    else if($num3 == $num4){
        if($num3 == $num1){
            echo "Existem 3 numeros iguais a: $num3 <br><br>";
        }
        else if($num3 > $num1){
            if($num3 > $num2){
                echo "O Maior Numero: $num3 <br><br>";
                if($num1>$num2){
                    echo "O Menor numero: $num2  <br><br>";
                } 
                else{
                    echo "O Menor numero: $num1  <br><br>";
                }
            }
            else if($num2 > $num1){
                echo "O Maior Numero: $num2 <br><br>"; 
                echo "O Menor numero: $num3  <br><br>";
            }
            else{
                echo "O Maior Numero: $num1 <br><br>";
                if($num2>$num3){
                    echo "O Menor numero: $num3  <br><br>";
                } 
                else{
                    echo "O Menor numero: $num2  <br><br>";
                }
            }
        }
        else if($num2 > $num1){
            echo "O Maior Numero: $num2 <br><br>"; 
            echo "O Menor numero: $num3  <br><br>";
        }
        else{
            echo "O Maior Numero: $num1 <br><br>"; 
            if($num2>$num3){
                echo "O Menor numero: $num3  <br><br>";
            }
            else{
                echo "O Menor numero: $num2  <br><br>";
            }
        }
    }
    else if($num1 == $num3){
        if($num1 > $num2){
            if($num1 > $num4){
                echo "O Maior Numero: $num1 <br><br>";
                if($num2>$num4){
                    echo "O Menor numero: $num4  <br><br>";
                } 
                else{
                    echo "O Menor numero: $num2  <br><br>";
                }
            }
            else{
                echo "O Maior Numero: $num4 <br><br>";
                echo "O Menor numero: $num2  <br><br>"; 
            }
        }
        else if($num4 > $num2){
            echo "O Maior Numero: $num4 <br><br>"; 
            echo "O Menor numero: $num1  <br><br>";
        }
        else{
            echo "O Maior Numero: $num2 <br><br>"; 
            if($num4>$num1){
                echo "O Menor numero: $num1  <br><br>";
            }
            else{
                echo "O Menor numero: $num4  <br><br>";
            }
        }
        
    }
    else if($num1 == $num4){
        if($num1 > $num2){
            if($num1 > $num3){
                echo "O Maior Numero: $num1 <br><br>"; 
                if($num2>$num3){
                    echo "O Menor numero: $num3  <br><br>";
                }
                else{
                    echo "O Menor numero: $num3  <br><br>";
                }
            }
            else{
                echo "O Maior Numero: $num3 <br><br>";
                echo "O Menor numero: $num2  <br><br>";
            }
        }
        else if($num3 > $num2){
            echo "O Maior Numero: $num3 <br><br>";
            echo "O Menor numero: $num1 <br><br>";
        }
        else{
            echo "O Maior Numero: $num2 <br><br>";
            if($num3>$num1){
                echo "O Menor numero: $num1  <br><br>";
            }
            else{
                echo "O Menor numero: $num3  <br><br>";
            }
        }
    }
    else if($num2 == $num4){
        if($num2 > $num1){
            if($num2 > $num3){
                echo "O Maior Numero: $num2 <br><br>";
                if($num1>$num3){
                    echo "O Menor numero: $num3  <br><br>";
                }
                else{
                    echo "O Menor numero: $num1  <br><br>";
                }
            }
            else{
                echo "O Maior Numero: $num3 <br><br>";
                echo "O Menor numero: $num1  <br><br>";
            }
        }
        else if($num3 > $num1){
            echo "O Maior Numero: $num3 <br><br>";
            echo "O Menor numero: $num2  <br><br>";
        }
        else{
            echo "O Maior Numero: $num1 <br><br>";
            if($num3>$num2){
                echo "O Menor numero: $num2  <br><br>";
            }
            else{
                echo "O Menor numero: $num3  <br><br>";
            }
        }

    }
    else{
        if($num1 > $num2){
            if($num1 > $num3){
                if($num1 > $num4){
                    echo "O Maior Numero: $num1 <br><br>";
                    if($num2>$num3){
                        if($num2>$num4){
                            if($num3>$num4){
                                echo "O Menor numero: $num4  <br><br>";
                            }
                            else{
                                echo "O Menor numero: $num3  <br><br>";
                            }
                        }
                        else{
                            echo "O Menor numero: $num3  <br><br>";
                        }
                
                    }
                    else if($num4>$num3){ 
                        echo "O Menor numero: $num2  <br><br>";
                    }
                    else if($num2>$num4){
                        echo "O Menor numero: $num4  <br><br>";
                    }
                    else{
                        echo "O Menor numero: $num2  <br><br>";
                    }

                }
                else{
                    echo "O Maior Numero: $num4 <br><br>";
                    if($num2>$num3){
                        echo "O Menor numero: $num3  <br><br>";
                    }
                    else{
                        echo "O Menor numero: $num2  <br><br>";
                    }
                }
            }
            else if($num3 > $num4){
                echo "O Maior Numero: $num3 <br><br>";
                if($num4>$num1){
                    echo "O Menor numero: $num2  <br><br>";
                }
                else if($num4>$num2){
                    echo "O Menor numero: $num2  <br><br>";
                }
                else{
                    echo "O Menor numero: $num4  <br><br>";
                }
            }
            else{
                echo "O Maior Numero: $num4 <br><br>";
                echo "O Menor numero: $num2  <br><br>";
            }
        }
        else if($num2 > $num3){
            if($num2 > $num4){
                echo "O Maior Numero: $num2 <br><br>";
                if($num3>$num4){
                    if($num3>$num1){
                        if($num4>$num1){
                            echo "O Menor numero: $num1  <br><br>";
                        }
                        else{
                            echo "O Menor numero: $num4  <br><br>";
                        }
                    }
                    else{
                        echo "O Menor numero: $num4  <br><br>";
                    }
                    
                }
                else{
                    echo "O Maior Numero: $num4 <br><br>";
                    if($num3>$num1){
                        echo "O Menor numero: $num1  <br><br>";
                    }
                    else{
                        echo "O Menor numero: $num3  <br><br>";
                    }
                
                }
            }
        }
        else if($num3 > $num4){
            echo "O Maior Numero: $num3 <br><br>";
            if($num1>$num4){
                if($num4>$num2){
                    echo "O Menor numero: $num2  <br><br>";
                }
                else{
                    echo "O Menor numero: $num4  <br><br>";
                }
            }
            else{
                echo "O Menor numero: $num2  <br><br>";
            }
        }
        else{
            echo "O Maior Numero: $num4 <br><br>";
            echo "O Menor numero: $num1  <br><br>";
        }

    }

   // 5. Colocar em ordem descrescente e em ordem crescente;'
?>