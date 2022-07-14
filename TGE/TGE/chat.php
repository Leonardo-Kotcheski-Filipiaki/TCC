<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include 'config.php';

if(isset($_SESSION) == false){
    header('Location:'.DIR_PATH.'loginFunc');
}

$nomeUsuario = $_SESSION['userName'];

include TEMPLATE_BASE.'/head.php';
?>

 <link rel="stylesheet" href="<?php echo URL_BASE?>/csspaginas/chat.css" alt="">
<?php
 include TEMPLATE_BASE.'/nav.php';
?>
</head>
<body>
<div id="chatBG">
<div id="chatsMenu">
        <h1>CHATS</h1>
        
        <div class="bgChat">
        <img class="chatJogo" src="<?php echo URL_BASE?>/imagens/fortnite.jpg" alt=""></a> 
     
        <div class="hoversChat">
        <div class="lobby">
        <span>Lobby 1: 00/25</span>
        </div>
        
        </div>
</div>
   
       

    

        </div>
        </div>

        <div id="usuariosLogadosBG">
            <div id="users">
            <h2 class="userLogado">patinho</h2>
            </div>
        
        </div>

<iframe src="Chat/index.php" id="iframes">

</iframe>

       
    </body>