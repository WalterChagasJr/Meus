<?php
// Inclui o arquivo com o sistema de segurança
 include("seguranca.php");
// echo $_SERVER['REQUEST_METHOD'];
try {
  // Verifica se um formulário foi enviado
  if ($_SERVER['REQUEST_METHOD'] == "POST") {

     // Salva duas variáveis com o que foi digitado no formulário
     // Detalhe: faz uma verificação com isset() pra saber se o campo foi preenchido
     $usuario = (isset($_POST['login'])) ? $_POST['login'] : '';
     $senha = (isset($_POST['password'])) ? $_POST['password'] : '';
     // Utiliza uma função criada no seguranca.php pra validar os dados digitados
     if (validaUsuario($usuario, $senha) == true) {
   
      //  echo "O usuário e a senha digitados foram validados, manda pra página interna";
        header("Location: dashboard.php");
     } else {
        echo "O usuário e/ou a senha são inválidos, manda de volta pro form de login";
     //   echo "Para alterar o endereço da página de login, verifique o arquivo seguranca.php";
        expulsaVisitante();
    }
  }
  else {
    echo "Erro: A requisição não foi feita ou foi executada em cache.";
  }
  
} catch (Exception $e) {
  echo "Exception: ",  $e->getMessage(), "\n";
}

?>
