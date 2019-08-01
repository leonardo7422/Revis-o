<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <div>
        <?php

            include "cabecalho.inc";
            include "menu.inc";

        
            if (empty($_POST))
            {
              echo"  <article>
                <form action=\"cadastra_exercicio1.php\" method=\"POST\">
                    <fieldset>
                         <legend>Cadastro de cliente</legend>
                    <p>
                     <label>Nome:</label>
                    <input type=\"text\" name=\"nome\" size=\"30\"/>
                    <p>
                    <label>Email:</label>
                    <input type=\"email\" name=\"email\" size=\"30\"/>
                    </p>
                    <p>
                    <label>Sexo:</label>
                    <div>
                        <input type=\"radio\" name=\"sexo\" value=\"Masculino\" required=\"required\" />Masculino
                        <input type=\"radio\" name=\"sexo\" value=\"Feminino\" required=\"required\" />Feminino
                    </div>
                    </p>
                    <p>
                    <label>Nivel Escolaridade:</label>
                    <div>
                        <input type=\"radio\" name=\"nivelescolaridade\" value=\"Fundamental\" required=\"required\"/>Ensino Fundamental
                        <input type=\"radio\" name=\"nivelescolaridade\" value=\"Medio\" required=\"required\" />Ensino Medio
                        <input type=\"radio\" name=\"nivelescolaridade\" value=\"Superior\" required=\"required\" />Ensino superior
                    </div>
                    </p>
                    <p>
                    <label>Línguagem:</label>
                    <div>
                        <input type=\"radio\" name=\"linguagem\" value=\"PHP\" required=\"required\"/>PHP
                        <input type=\"radio\" name=\"linguagem\" value=\"C\" required=\"required\" />C
                        <input type=\"radio\" name=\"linguagem\" value=\"Java Script\" required=\"required\" />Java Script
                        <input type=\"radio\" name=\"linguagem\" value=\"Python\" required=\"required\" />Python
                    </div>
                    </p>
                    <input type=\"submit\" value=\"Cadastrar cliente\"/>
                    </fieldset>
            </form>
            <br/>
            <br/>
            <br/>
            </article>";
            }
            
        
        
        ?>
    
</body>
</html>