<?php
	session_start();
	$nome = $_SESSION['userName'];

?>
<html>

<!-- Head -->
<head> 
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Chat - PHP</title>
	<link rel="icon" href="../img/icon.png">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
	
</head> 
<!-- Final do Head -->
	<!-- Inicio do body -->
	<body>

		<!-- Inicio do container -->
		<div class="container">

				<!-- Incio da row -->
				<div class="row">

					<!-- Inicio do col-md-5 -->
					<div class="col-md-5">

							
					</div>
				</div>
				<!-- Final do col-md-5 -->

				<!-- Inicio do col-md-7 -->
					<div class="col-md-7">

						<!-- Divisão que renderiza o chat -->
							<div class="chat" id="chat">
									
							</div>

						<!-- Formulário de envios das mensagens -->
						<div class="formulariomsg" action="index.php" method="POST">
								<textarea name="mensagem" id='msg' class="mensagem" placeholder="Digite sua mensagem aqui."></textarea><br>
								<input type="button" class="botaoEnviar" Value="Enviar" id="btnEnviar">
						</div>
					</div>
				<!-- Final do col-md-7 -->

			</div>
			<!-- Final da row -->

		</div>
		<!-- Final do container -->
		
	</body>
	<!-- Final do body -->

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<!-- /jQuery -->
	<script type="text/javascript">
	/*
	#########
		função responsável por abaixar a barra de rolagem do chat
	#########
	*/
	function abaixarbarra(){
		var div = document.getElementById('chat');
		div.scrollTo(0, 1000);
	}

	/*
#########
	função ajax responsável por 
	renderizar em tempo real as
	ultimas mensagens enviadas no chat
#########
*/
function ajax(){
				var req = new XMLHttpRequest();
				req.onreadystatechange = function(){
					if (req.readyState == 4 && req.status == 200) {
							document.getElementById('chat').innerHTML = req.responseText;
					}
		}
	req.open('GET', '../src/php/chat.php', true);
	req.send();

}


/*
#########
	Utilidade responsável por
	executar a função Ajax toda vez
	que a página for carregada
#########
*/
window.onload = (event) => {
 	ajax();
};

$(function(){
const user= "<?php echo $_SESSION['userName'];?>"
console.log(user)
	$('#btnEnviar').click(function(){
		
		if($('#msg').val() === ''){

			
		}else{
			var data = {
			nome: user,
			mensagem: $('#msg').val()

			}

			$.post('http://localhost/TGE/CHAT-PHP-master/src/index.php', data);	

			$('#msg').val('');
		}
		
	});

});


//função que determina o tempo em que o chat será atualizado(1000 = 1 segundo)
setInterval(function(){ajax();}, 1000);


	</script>

	<?php
	require ('php/chat-conexao.php');

		
		$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

	if($mensagem == ''){
		return false;
	}else{
	
	$sql = $pdo->prepare('INSERT INTO mensagenstable (UserName,mensagem) VALUES (:nameParam,:msgParam)');

	$nomes = htmlspecialchars($nome);
	$mensagem = htmlspecialchars($mensagem);

	$sql->bindParam(':nameParam', $nomes);
	$sql->bindParam(':msgParam', $mensagem);
	$sql->execute();
}
?>
	
</html>