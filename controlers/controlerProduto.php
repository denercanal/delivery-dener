<?php

$opcao = (int)$_REQUEST['opcao'];

if ($opcao == 1) {
  $produto = new Produto();
  $produto->setProduto(
    $_REQUEST['pNome'],
    $_REQUEST['pDescricao'],

    $_REQUEST['pDataFabricacao'],
    $_REQUEST['pPreco'],
    $_REQUEST['pEstoque'],
    $_REQUEST['pReferencia'],
    $_REQUEST['pFabricante']
  );

  $produtoDao = new ProdutoDao();

  $produtoDao->incluirProduto($produto);

  header("Location: ../views/exibirProdutos.php");
}
