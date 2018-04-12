<?php
//echo '/tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$|pimentadoamaral.com.br$|', $_SERVER[HTTP_HOST].'$/';
//if(!isset($_POST[Submit])) die("Nao recebi nenhum parametro. Por favor volte ao formulario.html antes");
/* Medida preventiva para evitar que outros domínios sejam remetente da sua mensagem. */
//if (preg_match('/tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$|pimentadoamaral.com.br$|', $_SERVER[HTTP_HOST].'$/')) {
        $emailsender= 'Webmaster<webmaster@caopartilhe.com.br>';
//} else {
//        $emailsender = "webmaster@" . $_SERVER[HTTP_HOST];
        //    Na linha acima estamos forçando que o remetente seja 'webmaster@seudominio',
        // você pode alterar para que o remetente seja, por exemplo, 'contato@seudominio'.
//}
//$emailsender = trim($_POST['txtmail']); // "webmaster@" . $_SERVER[HTTP_HOST];
$emaildestinatario = "wchagasj@yahoo.com.br";
//$emaildestinatario = "verttec@verttec.com.br";
/* Verifica qual é o sistema operacional do servidor para ajustar o cabeçalho de forma correta. Não alterar */
if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows
else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = $_POST['txtnome'];
$em