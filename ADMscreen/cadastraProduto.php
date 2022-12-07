<?php 

    //DAO
    require_once '../Login/dao/ProdutoDao.php';
    $produtoDao = new ProdutoDao();

    //Model
    require_once("model/ProdutoModel.php");
    require_once("model/conexao.php");

    $produtoModel = new ProdutoModel();

    $produtoModel->setNomeProduto($_POST['txtNome']);
    $produtoModel->setPrecoProduto($_POST['txtPreco']);
    $produtoModel->setIdCategoria($_POST['txtCategoria']);

    require_once("model/CategoriaModel.php");

    $categoriaModel = new CategoriaModel();

    $categoriaModel->setIdCategoria($_POST['txtCategoria']);



    //cadastrando produto sem a foto
    ProdutoDao::cadastrar($produtoModel);

    $produtoModel->setIdProduto(ProdutoDao::consultarId($produtoModel));

    //nome original do arquivo no computador do usuário
    $nomes = $_FILES['fileImage']['name'];

    //para validações que possam ser necessárias, na nossa loja não será origatório
    $tipo = $_FILES['fileImage']['type'];// exemplo image/gif
    $tamanho = $_FILES['fileImage']['size']; // tamanho em bytes

    //nome temporário do arquivo como foi armazenado no servidor, é o ARQUIVO!!!
    $arquivo = $_FILES['fileImage']['tmp_name'];

    $diretorio = "images/";

    $extensao = substr($nomes, -4);//pega o ponto e os 3 caracteres da extensão do arquivo
    $nomenovo = $produtoModel->getIdProduto().$extensao;

    $nomecompleto =  $diretorio.$nomenovo;

    move_uploaded_file($arquivo, "../".$nomecompleto);

    $produtoModel->setFotoProduto($nomecompleto);

    ProdutoDao::atualizarFoto($produtoModel);

    $conexao = new conexao();

    header("Location: Produto.php")
?>

