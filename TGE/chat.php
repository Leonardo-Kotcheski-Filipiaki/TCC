<?php
session_start();
include 'config.php';

if(isset($_SESSION) == false){
    header('Location:DIR_loginFuncp');
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
    <div id="chatsMenu">
        <h1>CHATS</h1>
        
        <div class="bgChat">
        <img class="chatJogo" src="<?php echo URL_BASE?>/imagens/fortnite.jpg" alt=""></a> 
     
        <div class="hoversChat">
        <div class="lobby">
        <span>Lobby 1: 00/25</span>
        </div>
        </div>
       

        <div class="hoversChat">
        <div class="lobby">
        <span>Lobby 2: 00/25</span>
        </div>
        </div>

        <div class="hoversChat">
        <div class="lobby">
        <span>Lobby 3: 00/25</span>
        </div>
        </div>


        </div>
        </div>

        <div id="usuariosLogados">
        <h2>patinho</h2>
        </div>

<iframe src="http://localhost:3000" id="iframes">

</iframe>

       
    </body>