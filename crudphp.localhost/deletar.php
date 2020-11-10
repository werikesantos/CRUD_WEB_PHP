<?php

require_once 'vendor/autoload.php';

    $confId = $_POST['confId'];

    $produto = new \App\Model\Produto();

    $produto->setId($confId);
    $id = $produto->getId();

    $produtoDao = new \App\Model\ProdutoDao();

    $produtoDao->delete($id);

    header('Location: configuracao.php'); 

?>