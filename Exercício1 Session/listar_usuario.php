<?php session_start(); ?>
<!DOCTYPE html>
	<html lang="pt-BR">
	<head>
		<meta charset="utf-8" />
		<title>Usuarios Cadastrados</title>
		<style>
			.center{
				margin:auto;
		}
		.tabela1 tbody tr:nth-child(odd)
		{
			background-color: #E9E9E9;
		}
		</style>

	</head>
	<body>
		<?php
		
		if(!empty($_SESSION["nome"]))
		{
       		include "cabecalho.inc";
			include "menu.inc";			
			
			echo"<div class=\"center\">
				<table class=\"tabela1\" width=\"60%\" border=\"0\">
					<thead><h1>Lista de Clientes Cadastrados</h1>
						<tr>
							<th>Nome</th>
							<th>E-mail</th>
							<th>Sexo</th>
							<th>Nivel de Escolaridade</th>
							<th>Línguagem</th>
							
						</tr>
					</thead>
					</tbody>";

				for($i=0 ; $i < sizeof($_SESSION["nome"]); $i++)
				{

					$nome = $_SESSION["nome"][$i];
                    $email = $_SESSION["email"][$i];
                    $sexo = $_SESSION["sexo"][$i];
					$nivelescolaridade = $_SESSION["nivelescolaridade"][$i];
					$linguagem = $_SESSION["linguagem"][$i];
					
					
					
					echo"<tr>
							<td>$nome</td>
							<td>$email</td>
                            <td>$sexo</td>
                            <td>$nivelescolaridade</td>
							<td>$linguagem</td>
						</tr>";
				}
				echo" </tbody>
				</table>
				</div>";
		}
		else
		{
            include "cabecalho.inc";
            include "menu.inc";

			echo"<p>Nenhum usuario cadastrado</p>";
		}
		
			
		?>