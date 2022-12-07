<?php
    require_once 'model/ProdutoModel.php';
    require_once 'model/conexao.php';


    class ProdutoDao{

      public static function cadastrar($produto){
          $conexao = conexao::conectar();

          $queryInsert = "INSERT INTO tbproduto(nomeProduto, precoProduto, idCategoria)
          
                          VALUES(?,?,?)";
          
          $prepareStatement = $conexao->prepare($queryInsert);
          
          $prepareStatement->bindValue(1, $produto->getNomeProduto());
          $prepareStatement->bindValue(2, $produto->getPrecoProduto());
          $prepareStatement->bindValue(3, $produto->getIdCategoria());

          $prepareStatement->execute();
          return 'Cadastrou';
      }

      public static function consultarId($produto){
         $conexao = conexao::conectar();

         $querySelect = "SELECT idProduto FROM tbproduto WHERE nomeProduto LIKE '".$produto->getNomeProduto()."'";
               
         $prepareStatement = $conexao->query($querySelect);
         
         $listaProduto = $prepareStatement->fetchAll();

         foreach ($listaProduto as $produto)
            $id = $produto['idProduto'];
         return $id;
      }

     public static function atualizarFoto(ProdutoModel $produto){
         $conexao = conexao::conectar();

         $queryInsert = "  UPDATE tbproduto 
                           SET fotoProduto = ?
                           WHERE idProduto = ? ";
               
         $prepareStatement = $conexao->prepare($queryInsert);
         
         $prepareStatement->bindValue(1, $produto->getFotoProduto());
         $prepareStatement->bindValue(2, $produto->getIdProduto());
         
         $prepareStatement->execute();

          return 'Atualizou';
      }

      public static function listar(){
         $conexao = Conexao::conectar();

         $querySelect = "SELECT idProduto, nomeProduto, precoProduto, fotoProduto FROM tbproduto";

         $resultado = $conexao->query($querySelect);

         $lista = $resultado->fetchAll();

         return $lista;   
     }
     
   }
?>