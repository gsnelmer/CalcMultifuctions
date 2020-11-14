<?php

    /* 
    
    receber 4 numeros e:
    
    1. Dizer qual é o maior;
    2. Dizer queal é o menor;
    3. Dizer se há numeros iguais;
    4. Apresensentae a soma, subtração, divisao e multiplicação;
    5. Colocar em ordem descrescente;
    6. Colocar em ordem descrescente;

    
    */

?>

<DOCTYPE hmtl>
<html>

    <body>

        <h1>Calculadora de Operacoes</h1>

        <form method=post action="ShowOperacoes.php" >  

            <br>
            </br>

            <!-- Inserir os valores-->
            <div>
                <label> Primeiro Numero </label>
                <input type="text" name="num1" value="" size=20/>
            </div> 

            <br>
            </br>
            <div>
                <label> Segundo Numero </label>
                <input type="text" name="num2" value="" size=20/>
            </div>

            <br>
            </br>
            <div>
                <label> Terceiro Numero </label>
                <input type="text" name="num3" value="" size=20/>
            </div>

            <br>
            </br>
            <div>
                <label> Quarto Numero </label>
                <input type="text" name="num4" value="" size=20/>
            </div>
            

            <br>
            </br>

            <!-- botões para fazer os calculos -->

            <input type=submit name=sub value="Calcular">
        </form>

    </body>

</html>