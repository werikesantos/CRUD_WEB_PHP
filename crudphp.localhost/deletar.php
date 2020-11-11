<?php

require_once 'vendor/autoload.php';

    $confId = $_POST['confId'];

    $cadastro = new \App\Model\Cadastro();

    $cadastro->setId($confId);
    $id = $cadastro->getId();

    $cadastroDao = new \App\Model\CadastroDao();

    $cadastroDao->delete($id);

    header('Location: configuracao.php'); 

?>