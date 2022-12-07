<?php
    
    require_once 'global.php';
    
    class ItemVendaDao{

        public static function cadastrar($item, $idvenda){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbitemvenda(idVenda, idProduto, qtdeitemVenda, subTotalVenda)
                             VALUES(?,?,?,?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $idvenda);
            $prepareStatement->bindValue(2, $item->getIdProduto());
            $prepareStatement->bindValue(3, $item->getQtndItemVenda());
            $prepareStatement->bindValue(4, $item->getSubTotalItemVenda());

            $prepareStatement->execute();
            return 'Cadastrou';
        }

        public static function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idVenda, idProduto, qtdeItemVenda, subTotalVenda FROM tbitemvenda";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public static function contar(){
            // $conexao = Conexao::conectar();
            // $querySelect = "SELECT COUNT(idcliente) AS qtde FROM tbcliente";
            // $resultado = $conexao->query($querySelect);
            // $num = $resultado->fetchAll();
            // foreach ($num as $n)
            //     return $n['qtde'];   
        }

        public static function contarProdutoVenda(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idProduto, COUNT(idItemVenda) AS qtde FROM tbitemvenda GROUP BY idProduto ORDER BY qtde DESC";
            $resultado = $conexao->query($querySelect);
            $listaProdutoVenda = $resultado->fetchAll();
            foreach ($listaProdutoVenda as $cliente)
                return $cliente['idProduto'];   
        }
    }
?>