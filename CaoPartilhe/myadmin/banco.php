<?php

function RetornaConexaoMysql($pc, $db, $forcar_conexao=false){
	
	//$forcar_conexao = true;
	try {
   	if(($_SERVER['HTTP_HOST'] == "localhost" || $_SERVER['HTTP_HOST'] == "127.0.0.1") && !$forcar_conexao){
		  $pc = "local";
	  }
	  //echo $pc;exit;
	
	  //$pc = "local";
	  switch ($pc) {
		  case 'caopartilhe':
			  $host = '200.147.61.73';
			  $user = 'caopartilhe';
			  $pass = 'Passwd@pet1';
			  break;
			
		  default:
			  break;
	  }

	  if (!empty($usuario) && !empty($senha)) {
		  $user = $usuario;
		  $pass = $senha;
	  }
	
	  @$link = mysql_connect("$host","$user","$pass");
	  if($link === false) {
		  switch ($pc) {
			  case 'caopartilhe':
				  exit;
				  break;
		
			  default:
				  throw new Exception("IMPOSSIVEL CONECTAR AO HOST $host");
				  break;
		  }		
		}else{
			mysql_select_db($db, $link) or die(mysql_error());
	  }

	  return $link;
	} catch (Exception $e) {
    echo "Erro ao obter conexão com o banco de dados: ",  $e->getMessage(), "\n";
    ob_end_clean();
   //displayErrorPage($e->getMessage());
    return -1;
	}
}
?>
