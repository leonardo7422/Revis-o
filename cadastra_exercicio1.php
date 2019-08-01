<?php
session_start(); 

                include "cabecalho.inc";
                include "menu.inc";
        
        $_SESSION["nome"][] = $_POST["nome"];
        $_SESSION["email"][] = $_POST["email"];
        $_SESSION["sexo"][] = $_POST["sexo"];
        $_SESSION["nivelescolaridade"][] = $_POST["nivelescolaridade"];
        $_SESSION["linguagem"][] = $_POST["linguagem"];
        if(!empty($_POST["linguagem2"])){
        $_SESSION["linguagem2"][] = $_POST["linguagem2"];
        }
        if(!empty($_POST["linguagem3"])){
            $_SESSION["linguagem3"][] = $_POST["linguagem3"];
            }
        if(!empty($_POST["linguagem4"])){
                $_SESSION["linguagem4"][] = $_POST["linguagem4"];
                }

        echo "
                <div>
                    <br/>
                    Usuario cadastrado com sucesso.
                </div>
                <br/>
                <br/>
                <br/>
                <br/>
       ";

    