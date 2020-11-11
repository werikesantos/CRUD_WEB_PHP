<?php

require_once 'vendor/autoload.php';

//MÉTODO CREATE()======================================

    $nome = $_POST['nome'];
    $dataNascimento = $_POST['dataNascimento'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];

    //TESTANDO PASSAGEM DE DADOS - OK!!! 
        echo"$nome";
        echo"$dataNascimento";
        echo"$endereco";
        echo"$email";
        echo"$celular"; 

        $cadastro = new \App\Model\Cadastro();
        $cadastro->setNome($nome);
        $cadastro->setDataNascimento($dataNascimento);
        $cadastro->setEndereco($endereco);
        $cadastro->setEmail($email);
        $cadastro->setCelular($celular);

        $cadastroDao = new \App\Model\CadastroDao();
        $cadastroDao->create($cadastro); 

        //DEPOIS DE EXECUTAR OS COMANDO ACIMA ELE VAI RETORNAR A PÁGINA DESTINO INFORMADA ABAIXO.
        header('Location: index.html');  

//FIM MÉTODO CREATE()==================================

//=============================TESTANDO_O_CRUD==========================================

/*===TESTANDO O MÉTODO CREATE()===
==================================
    //CRIANDO UM OBJETO    
    $produto = new \App\Model\Produto();

    $produto->setNome('Novo Dado');

    $produto->setDescricao('Noite');

    var_dump($produto);


    //CRIANDO UMA INSTÂNCIA DO PRODUTODAO
    $produtoDao = new \App\Model\ProdutoDao();

    //PASSANDO OS DADOS DO OBJETO CRIADO '$produto' PARA O MÉTODO DAO QUE VAI TRATAR E GUARDAR OS DADOS NO BANCO
    $produtoDao->create($produto);
*/

/*===TESTANDO O MÉTODO READ()===
================================

    //INSTANCIANDO UM OBJETO
    $produtoDao = new \App\Model\ProdutoDao();
    //CHAMANDO O MÉTODO DO OBJETO
    $produtoDao->read();


    //'foreach' FAZ UMA ASSOCIAÇÃO, E NESTE CASO ESTA ASSOCIANDO O RESULTADO DO MÉTODO 'read()' DO OBJETO $produtoDao 
    //COM OS DADOS ATRIBUIDOS AO OBJETO '$produto'.


    //PARA CONCATENAR EM PHP UTILIZA O '.'
    foreach($produtoDao->read() as $produto):
        echo $produto['nome']."<br>".$produto['descricao']."<hr>";
    endforeach;

*/

/*===TESTANDO O MÉTODO UPDATE()=== 
==================================

    //CRIANDO UM OBJETO    
    $produto = new \App\Model\Produto();

    //CHAMANDO O MÉTODO DO OBJETO
    $produto->setId(4);
    $produto->setNome("Consegui");
    $produto->setDescricao("Finalmente");

    $produtoDao = new \App\Model\ProdutoDao();

    $produtoDao->update($produto);

    //ATENÇÃO!!!
    //PRIMEIRAMENTE ATUALIZE A PÁGINA PARA DEPOIS ATUALIZAR O BANCO DE DADOS PARA ATUALIZAR AS INFORMAÇÕES!!!

*/

/*===TESTANDO O MÉTODO DELETE()=== 
==================================
    
    //CRIANDO UM OBJETO    
    $produtoDao = new \App\Model\ProdutoDao();

    $produtoDao->delete(1);

    //ATENÇÃO!!!
    //PRIMEIRAMENTE ATUALIZE A PÁGINA PARA DEPOIS ATUALIZAR O BANCO DE DADOS PARA ATUALIZAR AS INFORMAÇÕES!!!

*/

?>
