<?php
require_once('../dao/conexao.inc.php');

$tipo = $_REQUEST['pTipo'];
$login = $_REQUEST['pLogin'];
$senha = $_REQUEST['pSenha'];
if ($tipo == '1') {
  $logado = efetuarLogin($login, $senha);
  // se achou o usuário, a função retorna true
  if ($logado) {
    session_start();
    $_SESSION['logado'] = true;
    $_SESSION['tipousuario'] = '1';
    header("Location: ../views/index.php");
  } else {
    header("Location: ../views/formLogin.php?erro=1");
  }
}

function efetuarLogin($login, $senha)
{
  $con = new Conexao();
  $conexao = $con->getConexao();
  $sql = $conexao->prepare("select * from usuarios where login = :usr and senha = :pass");
  $login = strtolower($login); // padronizando o texto digitado em minúsculo para ambos, login e senha
  $senha = strtolower($senha);
  $sql->bindValue(':usr', $login);
  $sql->bindValue(':pass', $senha);
  $sql->execute();

  $count = $sql->rowCount(); // verificando quantos registros retornam; caso seja 1, localizou o usuário
  if ($count == 1) {
    return true;
  } else {
    return false;
  }
}
