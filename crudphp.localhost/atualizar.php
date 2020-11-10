<?php

require_once 'vendor/autoload.php';
//MÉTODO UPDATE()======================================

    $confId = $_POST['confId'];
    $confNome = $_POST['confNome'];
    $confData = $_POST['confData'];
    $confEndereco = $_POST['confEndereco'];
    $confEmail = $_POST['confEmail'];
    $confCelular = $_POST['confCelular'];
    
    /* //TESTE DE RECEBIMENTO DO FORMULÁRIO - OK
        echo "RECEBIDO!";
        echo"$confId";
        echo"$confNome";
        echo"$confData";
        echo"$confEndereco";
        echo"$confEmail";
        echo"$confCelular";
    */

    $produto = new \App\Model\Produto();

    $produto->setId($confId);
    $produto->setNome($confNome);
    $produto->setDataNascimento($confData);
    $produto->setEndereco($confEndereco);
    $produto->setEmail($confEmail);
    $produto->setCelular($confCelular);
    
    /*// TESTANDO OBJETO - OK
        echo '<br>';
        echo "ENVIADO!";
        echo $produto->getNome($confNome);
        echo $produto->getDataNascimento($confData);
        echo $produto->getEndereco($confEndereco);
        echo $produto->getEmail($confEmail);
        echo $produto->getCelular($confCelular);
    */

    $produtoDao = new \App\Model\ProdutoDao();
    $produtoDao->update($produto);

    header('Location: configuracao.php'); 

    //FIM MÉTODO UPDATE()==================================