<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br">
<head>
<title>Envie documentos para o site</title>
<meta http-equiv="Expires" CONTENT="0">
<meta http-equiv="Cache-Control" CONTENT="no-cache, must-revalidate">
<meta http-equiv="Pragma" CONTENT="no-cache">
</head>
<body>
<h2 align="center">Cadastrar sub-categoria</h2>

<?
  //
  include 'config_upload_ftp.inc';
  include ("banco.php");
  //header('Content-Type: text/html; charset=ISO-8859-1');  
  clearstatcache();
  //
  $con = RetornaConexaoMysql('magocomercial', 'magocomercial_com_br');
  //
  error_reporting(E_ALL);
  //
 // set_time_limit (0);
  //
  $txt_categoria=$_POST['txt_categoria'];
  $txt_subcategoria=strtoupper($_POST['txt_subcategoria']);
  $txt_ativo=$_POST['txt_ativo'];
  //
  $query = mysql_query("SELECT id_categoria, nome_da_pasta FROM tbl_categoria where id_categoria =' $txt_categoria '" );
  $row = mysql_fetch_row($query);
  //
  $txt_categoria = $row[0];
  $nome_da_pasta = $row[1];
  $diretorio_imagens = $caminho_absoluto."/".$nome_da_pasta;
  //
  try {
    if(!is_dir($diretorio_imagens)) 
    {
      if (!mkdir($diretorio_imagens, 0777))
      {
         echo "Não foi possivel criar a pasta ".$diretorio_imagens;
      }  
    }
    // 
    for ($i = 0 ; $i < 1 ; $i++)
    {
      $erro = FALSE;
      $nome_arquivo = $_FILES['arquivo']['name'][$i];
      $extensao = substr($nome_arquivo, strlen($nome_arquivo)-4, strlen($nome_arquivo));
  	  $ext = strrchr($nome_arquivo,'.');
      $arquivo_temporario = $_FILES['arquivo']['tmp_name'][$i];
      $tamanho_arquivo = $_FILES['arquivo']['size'][$i];
      //
      if (!empty ($nome_arquivo))
      {
      	 if ($sobrescrever == "nao" && file_exists($diretorio_imagens."/".$nome_arquivo))
    	   {
           $erro = true;
    	   echo "Arquivo ".$nome_arquivo." já existe.";
   		   }
     	   if (($limitar_tamanho == "sim") && ($tamanho_arquivo > $tamanho_bytes))
         {
           $erro = true;
     	     echo "Arquivo ".$nome_arquivo." deve ter no máximo ".$tamanho_bytes." bytes.";
   		   }
    	   if ($limitar_ext == "sim" && !in_array($ext,$extensoes_validas))
    	   {
           $erro = true;
    	 	   echo "Extensão arquivo ".$nome_arquivo." inválida para upload.";
   		   }
       	 if(!$erro && move_uploaded_file($arquivo_temporario, $diretorio_imagens."/".$nome_arquivo))
      	 {
           $urlImagem = "/".$nome_da_pasta."/".$nome_arquivo;
           $sqlStr = "replace into tbl_sub_categoria (id_categoria, desc_subcategoria, nome_imagem, url_imagem, titulo_imagem, ativo) ";
           $sqlStr.=" values ('$txt_categoria', '$txt_subcategoria', '$nome_arquivo', '$urlImagem', '$txt_subcategoria', '$txt_ativo')";
           //
           $resultImagem = mysql_query($sqlStr);
           //
           if ($resultImagem)  
           {
             echo "<div id='context' align=center style='height:520px;'>";
             echo "<p align=center>O upload do arquivo <b>$nome_arquivo</b> foi concluído com sucesso.</p>";
             echo "<p><br>";
             echo "<a href='cad_subcategoria.php'>Voltar</a>";
             echo "</div>";
      	   }	
    	     else
    	     {
             echo "<div id='context' align=center style='height:520px;'>";
    		     echo "<p align=center>O arquivo $nome_arquivo não pode ser copiado para o servidor.</p>";
             echo "<p><br>";
             echo "<a href='cad_subcategoria.php'>Voltar</a>";
             echo "</div>";
    		   }
   		   }
   		   else
   		   {
           echo "<div id='context' align=center style='height:520px;'>";
   		     echo "<p align=center>Não foi possível enviar o arquivo.</p>\n\n";
   		     echo $nome_arquivo;
           echo "<p><br>";
           echo "<a href='enviar_arquivos.php'>Voltar</a>";
           echo "</div>";
   		   }
      }     
    }  

	} catch (Exception $e) {
    echo "Erro ao obter conexão com o banco de dados: ",  $e->getMessage(), "\n";
   // ob_end_clean();
    displayErrorPage($e->getMessage());
    return -1;
	}

  
?>


</body>
</html>