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

        <table class="tabela" action="editar.html">

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

                $cadastroDao = new \App\Model\CadastroDao();
            
                foreach($cadastroDao->read() as $cadastro):

                    $id = $cadastro['id'];
                    $nome = $cadastro['nome'];
                    $data = $cadastro['dataNascimento'];
                    $endereco = $cadastro['endereco'];
                    $email = $cadastro['email'];
                    $celular = $cadastro['celular'];
                    
                    echo "<form class='fundo' action='atualizar.php' method='POST'>"; 
                        echo "<tr>";
                            echo "<td><input type='text' name='confId' placeholder='$id'></td>";
                            echo "<td><input type='text' name='confNome' placeholder='$nome'></td>";
                            echo "<td><input type='text' name='confData' placeholder='$data'></td>";
                            echo "<td><input type='text' name='confEndereco' placeholder='$endereco'></td>";
                            echo "<td><input type='text' name='confEmail' placeholder='$email'></td>";
                            echo "<td><input type='text' name='confCelular' placeholder='$celular'></td>";
                            echo "<td><input class='botao2' type='submit' value='Editar' class='button'></td>"; 
                            echo "<td><input formaction='deletar.php' class='botao2' type='submit' value='Deletar' class='button'></td>";                        
                        echo "</tr>";
                    echo "</form>";

                endforeach;
                
            ?>
            
        </table>

        <div class="botao3">
            <a href="index.html" >
            <button >Voltar</button>
            </a>
        </div>
       
    </div>

</body>

</html>
