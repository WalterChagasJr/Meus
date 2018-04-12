<?php
// Inclui o arquivo com o sistema de seguran�a
 include("seguranca.php");
// echo $_SERVER['REQUEST_METHOD'];
try {
  // Verifica se um formul�rio foi enviado
  if ($_SERVER['REQUEST_METHOD'] == "POST") {

     // Salva duas vari�veis com o que foi digitado no formul�rio
     // Detalhe: faz uma verifica��o com isset() pra saber se o campo foi preenchido
     $usuario = (isset($_POST['login'])) ? $_POST['login'] : '';
     $senha = (isset($_POST['password'])) ? $_POST['password'] : '';
     // Utiliza uma fun��o criada no seguranca.php pra validar os dados digitados
     if (validaUsuario($usuario, $senha) == true) {
   
      //  echo "O usu�rio e a senha digitados foram validados, manda pra p�gina interna";
        header("Location: dashboard.php");
     } else {
        echo "O usu�rio e/ou a senha s�o inv�lidos, manda de volta pro form de login";
     //   echo "Para alterar o endere�o da p�gina de login, verifique o arquivo seguranca.php";
        expulsaVisitante();
    }
  }
  else {
    echo "Erro: A requisi��o n�o foi feita ou foi executada em cache.";
  }
  
} catch (Exception $e) {
  echo "Exception: ",  $e->getMessage(), "\n";
}

?>
