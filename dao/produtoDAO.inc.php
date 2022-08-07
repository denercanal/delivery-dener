<?php
require_once('conexao.inc');
require_once('../classes/modeloLoja.inc');

class ProdutoDao
{
  private $con;

  function ProdutoDao()
  {
    $c = new Conexao();
    $this->con = $c->getConexao();
  }

  public function incluirProduto(Produto $produto)
  {
    $sql = $this->con->prepare("INSERT INTO produtos (nome, descricao, data_fabricacao, preco, estoque, referencia, cod_fabricante) VALUES (:nom, :desc, :data, :preco, :est, :ref, :fab)");

    $sql->bindValue(':nom', $produto->getNome());
    $sql->bindValue(':desc', $produto->getDescricao());
    $sql->bindValue(':preco', $produto->getPreco());
    $sql->bindValue(':est', $produto->getEstoque());
    $sql->bindValue(':ref', $produto->getReferencia());
    $sql->bindValue(':fab', $produto->getFabricante());
    $sql->bindValue(':data', $this->converteDataMysql($produto->getDataFabricacao()));

    $sql->execute();
  }

  function converteDataMysql($data)
  {
    return date('Y-m-d', $data);
  }
}
