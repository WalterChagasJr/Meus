<?php
//echo '/tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$|pimentadoamaral.com.br$|', $_SERVER[HTTP_HOST].'$/';
//if(!isset($_POST[Submit])) die("Nao recebi nenhum parametro. Por favor volte ao formulario.html antes");
/* Medida preventiva para evitar que outros dom�nios sejam remetente da sua mensagem. */
//if (preg_match('/tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$|pimentadoamaral.com.br$|', $_SERVER[HTTP_HOST].'$/')) {
        $emailsender= 'Webmaster<webmaster@caopartilhe.com.br>';
//} else {
//        $emailsender = "webmaster@" . $_SERVER[HTTP_HOST];
        //    Na linha acima estamos for�ando que o remetente seja 'webmaster@seudominio',
        // voc� pode alterar para que o remetente seja, por exemplo, 'contato@seudominio'.
//}
//$emailsender = trim($_POST['txtmail']); // "webmaster@" . $_SERVER[HTTP_HOST];
$emaildestinatario = "wchagasj@yahoo.com.br";
//$emaildestinatario = "verttec@verttec.com.br";
/* Verifica qual � o sistema operacional do servidor para ajustar o cabe�alho de forma correta. N�o alterar */
if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows
else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");

// Passando os dados obtidos pelo formul�rio para as vari�veis abaixo
$nomeremetente     = $_POST['txtnome'];
$em