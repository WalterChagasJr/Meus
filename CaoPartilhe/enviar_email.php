<?php
//echo '/tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$|pimentadoamaral.com.br$|', $_SERVER[HTTP_HOST].'$/';
//if(!isset($_POST[Submit])) die("Nao recebi nenhum parametro. Por favor volte ao formulario.html antes");
/* Medida preventiva para evitar que outros domínios sejam remetente da sua mensagem. */
//if (preg_match('/tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$|pimentadoamaral.com.br$|', $_SERVER[HTTP_HOST].'$/')) {
        $emailsender= 'webmaster@caopartilhe.com.br';
//} else {
//        $emailsender = "webmaster@" . $_SERVER[HTTP_HOST];
        //    Na linha acima estamos forçando que o remetente seja 'webmaster@seudominio',
        // você pode alterar para que o remetente seja, por exemplo, 'contato@seudominio'.
//}
//$emailsender = trim($_POST['txtmail']); // "webmaster@" . $_SERVER[HTTP_HOST];
$emaildestinatario = "wchagasj@yahoo.com.br";
//$emaildestinatario = "caopartilhe@caopartilhe.org.br";
/* Verifica qual é o sistema operacional do servidor para ajustar o cabeçalho de forma correta. Não alterar */
if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows
else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = $_POST['txtnome'];
$emailremetente    = trim($_POST['txtmail']);
$telefone          = trim($_POST['txtfone']);
$endereco          = trim(utf8_decode($_POST['txtend']));
$usumsg            = utf8_decode($_POST['txtmsg']);
//$comcopiaoculta    = trim($_POST['comcopiaoculta']);
$assunto           = "Contato pelo Site Cãopartilhe";

/* Montando o cabeçalho da mensagem */
$headers = "MIME-Version: 1.1".$quebra_linha;
//$headers .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;  // Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
$headers .= "Content-type: text/html; charset=utf-8\n";
$headers .= "From: $emailsender".$quebra_linha;
$headers .= "To: $emaildestinatario".$quebra_linha;
$headers .= "Return-Path: $emaildestinatario".$quebra_linha;
$headers .= "Reply-To: $nomeremetente<$emailremetente>".$quebra_linha;
// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)

 
/* Montando a mensagem a ser enviada no corpo do e-mail. */

$msg = "<html><body>";
$msg .= "<font face='verdana' size='2'>Mensagem enviada, pelo site, por:<P>";
$msg .= "<table width='90%' border='0' cellspacing='1' cellpadding='1'>";
$msg .= "<tr><td width=10% style='background-color: #e0e0e0; FONT-SIZE: 10pt; FONT-FAMILY: Verdana' align='left'>Nome:</td><td style='background-color: #e0e0e0;FONT-SIZE: 10pt; FONT-FAMILY: Verdana' >$nomeremetente</td></tr>";
$msg .= "<tr><td style='background-color: #e0e0e0;FONT-SIZE: 10pt; FONT-FAMILY: Verdana' align='left'>E-mail:</td><td style='background-color: #e0e0e0;FONT-SIZE: 10pt; FONT-FAMILY: Verdana' >$emailremetente</td></tr>";
$msg .= "<tr><td style='background-color: #e0e0e0;FONT-SIZE: 10pt; FONT-FAMILY: Verdana' align='left'>Endereço:</td><td style='background-color: #e0e0e0;FONT-SIZE: 10pt; FONT-FAMILY: Verdana' >$endereco</td></tr>";
$msg .= "<tr><td style='background-color: #e0e0e0;FONT-SIZE: 10pt; FONT-FAMILY: Verdana' align='left'>Telefone:</td><td style='background-color: #e0e0e0;FONT-SIZE: 10pt; FONT-FAMILY: Verdana' >$telefone</td></tr>";
$msg .= "<tr><td colspan='2'>&nbsp;</td></tr>";
$msg .= "<tr><td  align='center' style='background-color: #e0e0e0;FONT-SIZE: 10pt; FONT-FAMILY: Verdana' colspan='2'>Mensagem</td></tr>";
$msg .= "<tr><td style='FONT-SIZE: 10pt; FONT-FAMILY: Verdana' colspan='2'>$usumsg</td></tr>";
$msg .= "</table></font></body></html>";
 
 
/* Enviando a mensagem */

  if (!mail($emaildestinatario, $assunto, $msg, $headers, "-r". $emailsender)) {
    echo "Nao foi possível enviar a sua mensagem";
    exit;
  }	else {
    echo "Formulario enviado com sucesso";
  };


?>