<?php
    require_once 'model/CategoriaModel.php';
    require_once 'model/conexao.php';

    class CategoriaDao{

        public static function cadastrar(CategoriaModel $categoria){
            $conexao = conexao::conectar();

            $queryInsert = "INSERT INTO tbcategoria(nomeCategoria)
            
                            VALUES(?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $categoria->getNomeCategoria());

            $prepareStatement->execute();
        }

        public static function listar(){
            $conexao = Conexao::conectar();

            $querySelect = "SELECT idCategoria, nomeCategoria FROM tbcategoria";

            $resultado = $conexao->query($querySelect);

            $lista = $resultado->fetchAll();

            return $lista;   
        }

    }

?>