<?php
session_start();
require ('chat-conexao.php');

$nomeinMSG = $nome;
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

if($mensagem == ''){
	return false;
}else{
	
	$sql = $pdo->prepare('INSERT INTO mensagenstable (UserName,mensagem) VALUES ('$nomeinMSG',:msgParam)');

	$mensagem = htmlspecialchars($mensagem);
	
	$sql->bindParam(':msgParam', $mensagem);
	$sql->execute();
}
