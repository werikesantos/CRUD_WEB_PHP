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

    $cadastro = new \App\Model\Cadastro();

    $cadastro->setId($confId);
    $cadastro->setNome($confNome);
    $cadastro->setDataNascimento($confData);
    $cadastro->setEndereco($confEndereco);
    $cadastro->setEmail($confEmail);
    $cadastro->setCelular($confCelular);
    
    /*// TESTANDO OBJETO - OK
        echo '<br>';
        echo "ENVIADO!";
        echo $produto->getNome($confNome);
        echo $produto->getDataNascimento($confData);
        echo $produto->getEndereco($confEndereco);
        echo $produto->getEmail($confEmail);
        echo $produto->getCelular($confCelular);
    */

    $cadastroDao = new \App\Model\CadastroDao();
    $cadastroDao->update($cadastro);

    header('Location: configuracao.php'); 

    //FIM MÉTODO UPDATE()==================================