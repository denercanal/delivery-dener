<?php
class Produto
{
  public $produto_id;
  public $nome;
  public $descricao;
  public $data_fabricacao;
  public $preco;
  public $estoque;
  public $referencia;
  public $fabricante;

  function setProduto($nome, $descricao, $data, $preco, $estoque, $referencia, $fabricante)
  {
    $this->nome = $nome;
    $this->descricao = $descricao;
    $this->preco = $preco;
    $this->estoque = $estoque;
    $this->referencia = $referencia;
    $this->fabricante = $fabricante;
    $this->data_fabricacao = strtotime(str_replace('/', '-', $data));
  }

  public function getProduto_id()
  {
    return $this->produto_id;
  }

  public function setProduto_id($produto_id)
  {
    $this->produto_id = $produto_id;

    return $this;
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function setNome($nome)
  {
    $this->nome = $nome;

    return $this;
  }

  public function getDescricao()
  {
    return $this->descricao;
  }

  public function setDescricao($descricao)
  {
    $this->descricao = $descricao;

    return $this;
  }

  public function getDataFabricacao()
  {
    return $this->data_fabricacao;
  }

  public function setDataFabricacao($pData)
  {
    return $this->data_fabricacao = strtotime($pData);
  }

  public function getPreco()
  {
    return $this->preco;
  }

  public function setPreco($preco)
  {
    $this->preco = $preco;

    return $this;
  }

  public function getEstoque()
  {
    return $this->estoque;
  }

  public function setEstoque($estoque)
  {
    $this->estoque = $estoque;

    return $this;
  }

  public function getReferencia()
  {
    return $this->referencia;
  }

  public function setReferencia($referencia)
  {
    $this->referencia = $referencia;

    return $this;
  }

  public function getFabricante()
  {
    return $this->fabricante;
  }

  public function setFabricante($fabricante)
  {
    $this->fabricante = $fabricante;

    return $this;
  }
}
