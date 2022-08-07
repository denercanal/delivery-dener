<?php
require_once 'includes/cabecalho.inc.php';
?>

<h2>Login do Sistema</h2>
<p>
<form action=" ../controlers/controlerLogin.php " method="get">
  Login: <input type="text" size="20" name="pLogin">
  <p>Senha: <input type="password" size="10" name="pSenha">
  <p>Tipo de Usuario:
    <select name="pTipo">
      <option value="1">Administrador</option>
      <option value="2">Cliente</option>
    </select>
    <input type="hidden" name="opcao" value="1">
  <p><input type="submit" value="Login"> <input type="reset" value="Cancelar">
</form>

<?php
// verifica se o erro foi setado
if (isset($_REQUEST['erro'])) {
  // captura e ver o tipo do erro, no caso, 1
  if ((int)($_REQUEST['erro']) == 1) {
    printf("<b><font face='Verdana' size='2' color='red'>Login Incorreto!</font><b>");
  } else if ((int)($_REQUEST['erro']) == 2) {
    printf("<b><font face='Verdana' size='2' color='blue'>Por favor, efetue seu login!</font><b>");
  }
}
?>

<?php
require_once 'includes/rodape.inc.php';
?>