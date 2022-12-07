<?php 
    //DAO
    require_once 'dao/CategoriaDao.php';
    $cadastroDAO = new CategoriaDao();

    //Model
    require_once("model/CategoriaModel.php");
    require_once("model/conexao.php");
    $categoriaModel = new CategoriaModel();
    $categoriaModel->setNomeCategoria($_POST['txtNome']);
    $cadastroDAO::cadastrar($categoriaModel);

    $conexao = new conexao();

    header("Location: Categoria.php")
?>

