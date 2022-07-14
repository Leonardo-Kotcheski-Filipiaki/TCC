<?php
    session_start();
    include 'config.php';
    
    if(isset($_SESSION) == false){
        header('Location:'.DIR_PATH.'/login/loginFunc.php');
    }
    $nomeUser = $_SESSION['userName'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste do Chat</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.5.1/socket.io.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        
        <div id="divChat" action = "index.php" method="POST">
            <input type="text" name="mensagem" id="inputtexto" placeholder="Digite sua menssagem">
            <button type="submit" id="botaoChat">Enviar</button>
        </div>
</body>

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
		var div = document.getElementById('divChat');
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
							document.getElementById('divChat').innerHTML = req.responseText;
					}
		}
	req.open('GET', '../php/chat.php', true);
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
	$('#botaoChat').click(function(){
		
		if($('#inputtexto').val() === ''){

			
		}else{
			var data = {
			nome: user,
			mensagem: $('#inputtexto').val()

			}

			$.post('http://localhost/TGE/Chat/index.php', data);	

			$('#inputtexto').val('');
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
	
	$sql = $pdo->prepare('INSERT INTO mensagens (UserName,mensagem) VALUES (:nameParam,:msgParam)');

	$nomeUser = htmlspecialchars($nomeUser);
	$mensagem = htmlspecialchars($mensagem);

	$sql->bindParam(':nameParam', $nomeUser);   
	$sql->bindParam(':msgParam', $mensagem);
	$sql->execute();
}
?>
</html>