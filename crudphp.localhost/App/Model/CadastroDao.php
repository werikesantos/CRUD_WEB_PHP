<?php

    //ESTUDAR O FUNCIONAMENTO DO 'NAMESPACE' E 'AUTOLOAD'
    namespace App\Model;

    class CadastroDao{

        public function create(Cadastro $p){
            
            //'produtos' É A MINHA TABELA DENTRO DO BANCO 'pdo'
            $sql = 'INSERT INTO crudweb(nome, dataNascimento, endereco, email, celular, id) VALUES (?, ?, ?, ?, ?, ?)';

            /* 1- prepare($sql); >> MÉTODO QUE PREPARA UMA INTRUÇÃO 'SQL'
               2- getConn() >> PASSANDO A INSTRUÇÃO PARA O MÉTODO 'getConn()' DA CLASSE CONEXAO
               3- GUARDANDO TODA A INFORMAÇÃO DENTRO DA VARIAVEL '$stmt' 

               OBS: '::' POR SER UM MÉTODO ESTATICO NÃO PRECISA INSTACIAR UM OBJETO DA CLASSE
               OU SEJA, '::' É UMA INSTANCIA DO 'PDO()'
            */
            $stmt = Conexao::getConn()->prepare($sql);//'prepare() É DO PDO'

            /* bindValues >> (TRADUÇÃO - LIGAR VALORES) - VINCULA UM VALOR A UM PARÂMETRO
               1 >> REPRESENTA A POSIÇÃO O VALOR
               $produto >> É UM OBJETO DA CLASSE
            */
            $stmt->bindValue(1, $p->getNome());// 'bindValues()' É DO PDO
            $stmt->bindValue(2, $p->getDataNascimento());
            $stmt->bindValue(3, $p->getEndereco());
            $stmt->bindValue(4, $p->getEmail());
            $stmt->bindValue(5, $p->getCelular());
            $stmt->bindValue(6, $p->getId());

            //PARA FINALIZAR O 'prepare($sql)' EXECUTE O COMANDO ABAIXO:

            //TIRANDO AS BARRAS DA LINHA ABAIXO FICA EXECUTANDO SEMPRE QUE DA REFRESH NA PÁGINA
            $stmt->execute(); //'execute() É DO PDO'
        }

        public function read(){

            $sql = 'SELECT * FROM crudweb';

            $stmt = Conexao::getConn()->prepare($sql);

            $stmt->execute();

            //'rowCount()' RETORNA O NÚMERO DE LINHAS
            if($stmt->rowCount() > 0):

                //CRIANDO UMA VARIÁVEL CHAMADA DE RESULTADO
                //'fetchAll(PDO::FETCH_ASSOC)' RETORNA UM ARRAY - Retorna uma matriz contendo todas as linhas do conjunto de resultados
                $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC); //(TRADUÇÃO: BUSCAR TODOS) 
                //'FETCH_ASSOC' BUSCAR ARRAY ASSOCIADOS!

                //RETORNANDO AS INFORMAÇÕES PARA O MÉTODO 'read()'
                return $resultado;
            else:
                //SE NÃO TIVER NENHUMA LINHA DE REGISTROS, VAI RETORNAR UMA PÁGINA DE ERRO NO BROWSER.
                //PARA RESOLVER ISSO, BASTA RETORNAR UM ARRAY VARIO, CONFORME O EXEMPLO ABAIXO:
                return [];
            endif;
            
        }

        public function update(Cadastro $p){

            $id = $p->getId();

            $sql = "UPDATE crudweb SET nome = ?, dataNascimento = ?, endereco = ?, email = ?, celular = ?, id = ? WHERE id = '$id'";

            $stmt = Conexao::getConn()->prepare($sql);

            /* bindValues >> (TRADUÇÃO - LIGAR VALORES) - VINCULA UM VALOR A UM PARÂMETRO
               1 >> REPRESENTA A POSIÇÃO O VALOR
               $produto >> É UM OBJETO DA CLASSE
            */
            
            $stmt->bindValue(1, $p->getNome());// 'bindValues()' É DO PDO
            $stmt->bindValue(2, $p->getDataNascimento());
            $stmt->bindValue(3, $p->getEndereco());
            $stmt->bindValue(4, $p->getEmail());
            $stmt->bindValue(5, $p->getCelular());
            $stmt->bindValue(6, $id = $p->getId());//$id = 

            $stmt->execute();

        }

        public function delete($id){

            $sql = 'DELETE FROM crudweb WHERE id = ?';

            $stmt = Conexao::getConn()->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

    }
?>