<?php
session_start();

$estado = $_SESSION['logado'];
if (!$estado || !isset($_SESSION['logado'])) {
  header("Location:formLogin.php?erro=2");
}
