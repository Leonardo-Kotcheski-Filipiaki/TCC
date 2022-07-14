<?php
/*
#####################################
Código responsável por receber as
mensagens que chegam do banco de dados
e renderizalas em tela
#####################################
*/
include("chat-conexao.php");
$sql = $pdo->query("SELECT * FROM mensagens");

  foreach ($sql->fetchAll() as $key) {
	
		echo "<label class='nome'>".$key['UserName']."</label>";
		echo "<p class='textomensagem'>".$key['mensagem']."</p>";

	}

?>