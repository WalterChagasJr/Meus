<?php

// Configura��es do servidor FTP
$servidor_ftp = "ftp.uhserver.com";
$usario_ftp = "caopartilh";
$senha_ftp = "Passwd@pet";

// Limitar as extens�es? (sim ou nao)
$limitar_ext = "sim";

// extens�es autorizadas
$extensoes_validas = array(".pdf");

//caminho absoluto onde os arquivos ser�o armazenados
$pasta_documentos = "contas/";
// $caminho_absoluto = "D:\\Inetpub\\LocalUser\\caopartilhe.com.br\\web\\contas";
$caminho_absoluto = "/var/www/html/caopartilhe.org.br/web/contas";

// Limitar o tamanho do arquivo? (sim ou nao)
$limitar_tamanho = "nao";

// tamanho limite do arquivo em bytes
$tamanho_bytes = "4000000";
$tamanho_kbytes = "4000";

// se j� existir o arquivo, indica se ele deve ser sobrescrito (sim ou nao)
$sobrescrever = "sim";

?>