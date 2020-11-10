<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>CRUD</title>

</head>

<body>

    <div class="cabeca">

        <h1>CONFIGURAÇÃO</h1>

    </div>

    <div class="info">
        <div class="inf">
            <h2>Ação executado com sucesso!</h2>
        </div>
    </div>
    
    <!--GET = USADO QUANDO DESEJA OBTER UMA BUSCA DE DADOS-->
    <!--POST = USADO QUANDO DESEJA UM ENVIO DE DADOS-->
    <div class="total1">

        <table class="tabela">

            <thead>
              <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>NASCIMENTO</th>
                <th>ENDEREÇO</th>
                <th>E-MAIL</th>
                <th>CELULAR</th>
                <th>AÇÕES</th>
                <th></th>
              </tr>
            </thead>

            <?php

                require_once 'vendor/autoload.php';

                $produtoDao = new \App\Model\ProdutoDao();

                foreach($produtoDao->read() as $produto):

                    $id = $produto['id'];
                    $nome = $produto['nome'];
                    $data = $produto['dataNascimento'];
                    $endereco = $produto['endereco'];
                    $email = $produto['email'];
                    $celular = $produto['celular'];
                    
                    echo "<tbody>"; 

                        echo "<tr>";

                            echo "<td><input type='text' name='id' placeholder='$id'></td>";
                            echo "<td><input type='text' name='nome' placeholder='$nome'></td>";
                            echo "<td><input type='text' name='dataNascimento' placeholder='$data'></td>";
                            echo "<td><input type='text' name='endereco' placeholder='$endereco'></td>";
                            echo "<td><input type='text' name='email' placeholder='$email'></td>";
                            echo "<td><input type='text' name='celular' placeholder='$celular'></td>";
                            echo "<td><input type='submit' class='button'></td>";  

                        echo "</tr>";

                    echo "</tbody>";

                endforeach;

            ?>

        </table>   

        <div class="botao1">
            <a href="configuracao.php" >
            <button >Voltar</button>
            </a>
        </div>
       
    </div>

</body>

</html>