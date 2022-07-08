<h1>Chat - <span>PHP</span></h1>

<p>Sejá bem vindo ao projeto CHAT - PHP, este projeto visa criar um chat simples usando a linguagem PHP no back-end, e Ajax no front-end</p>

<h1>Instalação</h1>
<p>A instalação do projeto se forma de maneira simples, o repositório pode ser clonado em sua pasta de projeto ou ter seus arquivos baixados e inseridos na pasta do servidor (local ou não)</p>

<h3>Instalação do SQL</h3>
<p>Para poupar o seu tempo escrevendo aqueles códigos chatos em SQL que servem para criar o banco de dados, as tabelas e etc., deixarei em seguinte os códigos necessários para que tudo isso funcione perfeitamente para você:</p>

<span>Para criar o banco:</span><br>

```
CREATE DATABASE chat_php
```
<span>Para criar a única tabela necessária:</span><br>
```
CREATE TABLE `tbchat`( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `nome` VARCHAR(40) NOT NULL , 
    `mensagem` TEXT NOT NULL , 
    PRIMARY KEY (`id`)
);
```
<br><span>Obs.: O código deve ser executado dentro do banco de dados criado anteriormente<span>

<h1>Informações adicionais</h1>
<p>Este projeto foi criado totalmente com o intuito de ajudar a diminuir o trabalho na hora de criar um chat utilizando a linguagem php, o projeto está aberto a mudanças para adaptação em seu própio site, como por exemplo, um sistema de login aonde só aqueles que estão logados poderiam enviar mensagens e receber mensagens. O projeto está aberto para ser usado como material de estudo, uma vez que todos os códigos presentes neles estão devidamente comentados, explicando o que cada linha do projeto faz. </p>

<b>Dicas para possíveis adaptações em seu site:</b><br>
- [1] Incrementar uma nova tabela para que os usuários possam efetuar login e acessar o menu de chat.<br><br>
- [2] Nos códigos é possivel encontrar uma função que desce a barra de rolagem do chat, você pode usa-la para ser executada toda vez que       a página for recarregada, assim mostrando sempre as conversas mais recentes.<br><br>
- [3] Implantar um sistema de notificação, para que sempre que uma mensagem nova chegar ao banco de dados, ser enviado uma solicitação         especificando que existem mensagens novas para apresentar.<br><br>
- [4] Implantar aos usuários a opção de envio de imagens para o servidor, assim possibilitando a troca de imagens entre os usários.<br><br>
- [5] Fazer o submit das mensagens sem o refresh da página, assim deixando o projeto mais dinâmico e profissional.<br><br>
- [6] Criar relatórios de erros para sempre que o sistema retornar um erro, o cliente tenha como entrar em contato e possivelmente solucionar o problema<br><br>

<h1>Informações do desenvolvedor</h1>
	<p>Sou um desenvolvedor Full-Stack Junior, atualmente na data de escrita deste documento (17/05/2020), estou focando meus estudos em Laravel no back-end. Muito obrigado pela sua atenção, espero que este projeto te ajude a desenvolver suas aplicações e boa sorte!</p>
<h2>Redes Sociais</h2>

- [Instagram](https://Instagram.com/peedro.pc/)
