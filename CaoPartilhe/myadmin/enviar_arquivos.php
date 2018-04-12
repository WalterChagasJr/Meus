<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"><head>
<meta http-equiv="Expires" CONTENT="0">
<meta http-equiv="Cache-Control" CONTENT="no-cache, must-revalidate">
<meta http-equiv="Pragma" CONTENT="no-cache">
</head>
<link rel="stylesheet" type="text/css" href="default.css" />
<link rel="stylesheet" type="text/css" href="estilo.css" />
<body>
<div id="context" align=center style="height:520px;">
<?php
  include ("banco.php");
  include ("config_upload_ftp.inc");
  //
  $con = RetornaConexaoMysql('caopartilhe', 'caopartilhedb');
  header('Content-Type: text/html; charset=ISO-8859-1'); 
 // echo 'O seu site encontra-se hospedado sob o caminho absoluto: ';
//(ini_get('doc_root')!=''? print ini_get('doc_root').'/public_html': print $_SERVER['DOCUMENT_ROOT']);
?>     

  <script language="javascript" src="instrucao.js"></script>
  <script type="text/javascript" src="jquery-1.6.4.js"></script>
  <div style="position:relative; height:400px; width:100%; top:40px;">

  
  <h2 align="center">Enviar documentos para o site</h2>
  <p><br>
      <form method=POST action="executa_upload_multiplo_array.php" enctype=multipart/form-data>
      <table width="600" border="0">
        <tr>
        <td align=center><span style="font-family:Arial; font-size:13.0px; alignment-adjust:central">Os arquivos deverão ter, no maximo, <?php echo $tamanho_kbytes ?>K  e extensão
              <?php 
                 $count = count($extensoes_validas);
                 $extensoes = "";
                 //
                 for ($i=0;$i<=$count-1;$i++) {
                   //
                   $extensoes.=$extensoes_validas[$i].", ";
                 }
                 echo substr($extensoes,0,(strlen($extensoes)-2));
        ?>
          </span></td>
        </tr>
        <tr>
          <td height="30">  </td>
        </tr>
        <tr>
          <td height="10"></td>
        </tr>
        <tr>
          <td height="10"></td>
        </tr>
        <tr>
          <td align=left><span style="font-family:Arial; font-size:12.0px;">Nome do arquivo PDF a ser disponbilizado no site:</span></td>
        </tr>
        <tr>
          <td align=left><span style="font-family:Arial; font-size:12.0px;"><input type=TEXT id="INPUTTYPE" name="txt_nome_documento" style="width:450px;"></span></td>
        </tr>
        <tr>
          <td height="10"></td>
        </tr>
        <tr>
          <td align=left><span style="font-family:Arial; font-size:12.0px;">Descrição do PDF:</span></td>
        </tr>
        <tr>
          <td  align=left><span style="font-family:Arial; font-size:12.0px;"><textarea id="INPUTMEMO" wrap=SOFT name="txt_descricao" rows="7" cols="55"></textarea></span></td>
        </tr>
        <tr>
          <td height="10"></td>
        </tr>
        <tr>
          <td align=left><span style="font-family:Arial; font-size:12.0px;">PDF a ser enviado</span></td>
        </tr>
        <tr>
          <td align=left><span style="font-family:Arial; font-size:12.0px;"><input type=FILE style="width:450px;" id="INPUTTYPE" name="arquivo[]" size="40"></span></td>
        </tr>
        <tr>
          <td height="10"></td>
        </tr>
        <tr>
          <td align=center><input id="button" type=submit value="Enviar arquivos"></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <tr>  
      <td>&nbsp;</td>
      </tr>
      <tr>
      <td>
          
      </td>
      </tr> 
      <tr>
      <td>&nbsp;</td>
      </tr>
      <tr>
      <td></td>
      </tr>
      <tr >
       <td height=20% id="tdformulario" ><p></p></td>
      </tr>
    <tr>
    <td>
         <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $tamanho_bytes ?>">
        
       </form>
    </td>
    </tr>
    <tr>
    <td>

    </td>
    </tr>
    <tr>
    <td>
    </td>
    </tr>
    </table>
  </div>
  
  </div>
</div>
</body>
</html>
<?php
  mysql_close($con);
?>