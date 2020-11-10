<?php

    //ESTUDAR O FUNCIONAMENTO DO 'NAMESPACE' E 'AUTOLOAD'
    namespace App\Model;

    //CLASSE RESPONSÁVEL POR ESTABELECER A CONEXÃO COM O BANCO DE DADOS
    class Conexao{

        private static $instance;

        //MÉTODO QUE VAI VERIFICAR SE EXISTE UMA INSTÂNCIA CRIADA '$instance'
        //SE NÃO EXISTER, SERÁ CRIADO UMA INSTÂNCIA
        public static function getConn(){

            /* 'isset'
               A FUNÇÃO 'isset' SERVER PARA VERIFICAR SE UMA VARIÁVEL FOI DEFINIDA. 
               VERIFICA SE ELA EXISTE E RETORNA UM VALOR BOLEANO. 
               OU SEJA, RETORNA COM UM VALOR DE VERDADEIRO OU FALSO.

               'self'
               DETERMINA SE UMA VARIÁVEL É DECLADA E É DIFERENTE DE NULL
            */

            /* ATENÇÃO!!!
              VEJA QUE O MÉTODO ACIMA FOI DECLARADO COMO ESTATICO 'static'.
              NESTE CASO, O 'self' É CHAMADO PARA VERIFICAR A EXISTENCIA DA VARIÁVEL E SE É DIFERENTE DE NULL
              COMO O MEU ATRIBUTO '$instance' FOI DECLARADO COMO ESTATICO NA LINHA (10) O MESMO PODE SER CHAMADO
              SEM A NECESSIDADE DE SER INSTANCIADO!
            */

            /* LEITURA
               SE NÃO EXISTIR UMA INSTANCIA, A LINHA (33) VAI CRIAR UMA.
               E SE EXISTIR A CONEXÃO SERÁ RETORNADA AO MÉTODO DECLARADO NA LINHA(10)
            */

            /* PDO
               O PHP Data Objects (PDO) É UMA CAMADA DE ABSTRAÇÃO DE CONEXÃO COM O BANCO DE DADOS!!!
            */
            if(!isset(self::$instance)):
                self::$instance = new \PDO('mysql:host=localhost;dbname=db_crud;charset=utf8','wms','wms@wms');
            endif;

            return self::$instance;
        }
    }
?>