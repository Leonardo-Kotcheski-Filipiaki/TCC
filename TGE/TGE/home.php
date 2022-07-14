<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include 'config.php';
$nomeUsuario = $_SESSION['userName'];
if(isset($_SESSION) == false){
    include TEMPLATE_BASE.'/head.php';
    include TEMPLATE_BASE.'/nav.php';
}else{
include TEMPLATE_BASE.'/head.php';
include TEMPLATE_BASE.'/nav.php';

}
?>
</head>
<body>
    <section>

    <div id="welcome">
    <h1>Seja bem vindo à nossa comunidade!</h1>
    
    </div>
    
    <div id="div_registro">
        <button id="registrar"> <a href="<?php echo URL_BASE?>/Registro/registroPage.php">
           <h2>Junte-se a nós</h2></a>
        </button>
    </div>
    <p id="TGE">The Gamers Encounter promete reunir seus usuarios para uma otima jogatina com vários amigos, por que não se juntar a nossa comunidade gamer?</p>
    </section>
    
        <div id="jogos">
        <div id="carousel">
        <a href="<?php echo URL_BASE?>/Chat2.0-main/public/index.php"class="imagem"><img  class="img" src="<?php echo URL_BASE?>/imagens/apex.jpg " alt=""></a>
        <a class="imagem"><img  class="img" src="<?php echo URL_BASE?>/imagens/codwz.jpg " alt=""></a>
        <a class="imagem"><img  class="img" src="<?php echo URL_BASE?>/imagens/csgo.jpeg " alt=""></a>
        <a class="imagem"><img  class="img" src="<?php echo URL_BASE?>/imagens/dark-souls-iii.jpg " alt=""></a>
        <a class="imagem"><img  class="img" src="<?php echo URL_BASE?>/imagens/destiny.jpg " alt=""></a>
        <a class="imagem"><img  class="img" src="<?php echo URL_BASE?>/imagens/Elden-Ring-3.jpg " alt=""></a>
        <a class="imagem"><img  class="img" src="<?php echo URL_BASE?>/imagens/fortnite.jpg " alt=""></a>
        <a class="imagem"><img  class="img" src="<?php echo URL_BASE?>/imagens/lol.jpg " alt=""></a>
        <a class="imagem"><img  class="img" src="<?php echo URL_BASE?>/imagens/minecraft.jpg " alt=""></a>
        <a class="imagem"><img  class="img" src="<?php echo URL_BASE?>/imagens/rocketleague.jpg" alt=""></a>
        <a class="imagem"><img  class="img" src="<?php echo URL_BASE?>/imagens/valorant.jpg" alt=""></a>
        <a class="imagem"><img  class="img" src="<?php echo URL_BASE?>/imagens/wow.jpg" alt=""></a>
      

        
        </div>
        </div>
      
        
    
    
</body>
