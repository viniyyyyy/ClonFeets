<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="shortcut icon" href="../images/icon.png" type="image/x-icon">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Adm ClonFeets.com</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- style css -->
      <link rel="stylesheet" href="../css/styleADMscreen.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   </head>
   <!-- body -->
   <body>
      <div class="container">
            <!------------------------ ASIDE --------------------->

         <aside>
            <div class="top">
               <div class="logo">
                  <img src="../images/CloNfeets_White.png" alt="">
               </div>
               <div class="close" id="close-btn">
                  <i class="fa-solid fa-xmark"></i>
               </div>
            </div>
            <div class="sidebar">
               <a href="Adm.php" >
               <span><i class="fa-solid fa-border-all"></i></span>
                  <h3>Dashboard</h3>
               </a>
               <a href="Cliente.php">
               <span><i class="fa-regular fa-user"></i></span>
                  <h3>Clientes</h3>
               </a>
               <a href="#" class="active">
               <span><i class="fa-solid fa-receipt"></i></span>
                  <h3>Vendas</h3>
               </a>
               <a href="">
               <span><i class="fa-solid fa-chart-line"></i></span>
                  <h3>Gráficos</h3>
               </a>
               <a href="Categoria.php">
               <span><i class="fa-solid fa-arrow-up-wide-short"></i></span>
                  <h3>Categorias</h3>
               </a>
               <a href="Produto.php">
               <span><i class="fa-regular fa-calendar-check"></i></span>
                  <h3>Produtos</h3>
               </a>
               <a href="">
               <span><i class="fa-solid fa-circle-exclamation"></i></span>
                  <h3>Denúncias</h3>
               </a>
               <a href="">
               <span><i class="fa-solid fa-gear"></i></span>
                  <h3>Configurações</h3>
               </a>
               <a href="">
               <span><i class="fa-regular fa-plus"></i></span>
                  <h3>Adicionar produto</h3>
               </a>
               <a href="../index.html">
               <span><i class="fa-solid fa-right-from-bracket"></i></span>
                  <h3>Logout</h3>
               </a>
            </div>
         </aside>
            <!------------------------ END-ASIDE --------------------->

            <!------------------------ GRAPHIC --------------------->
         <main>
            <h1>Categorias</h1>

            <div class="date">
               <input type="date">
            </div>

            <div class="form">
                <form method="post" action="cadastraCategoria.php">
                    <div class="form-header">
                        <div class="title">
                            <h1>Consultar Vendas:</h1>
                        </div>
                    </div>
                </form>
            </div>

               <!------------------------ END-GRAPHIC --------------------->

               <!------------------------ ORDER --------------------->

            <div class="recent-order">
               <h2>Vendas já feitas:</h2>
               <?php
                    require_once 'global.php';
                    try {
                        $listavenda = VendaDao::listar();
                        $qtdePedido = VendaDao::contarPedido();
                        $listaitens = ItemVendaDao::listar();
                    } catch(Exception $e) {
                        echo '<pre>';
                            print_r($e);
                        echo '</pre>';
                        echo $e->getMessage();
                    }
                ?>
                  <table>
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Data da Venda</th>
                           <th>Valor Total</th>
                           <th>Cliente</th>
                           <th>Ver Itens</th>
                           <th>Status</th>
                           <th>Atualizar Status</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach($listaCliente as $cliente) { ?>
                        <tr>
                           <td><?php echo $cliente['codCliente']; ?></td>
                           <td><?php echo $cliente['nomeCliente']; ?></td>
                           <td><?php echo $cliente['cpfCliente']; ?></td>
                           <td><?php echo $cliente['emailCliente']; ?></td>
                           <td><?php echo $cliente['logradouroCliente']; ?></td>
                        </tr> 
                        <?php }  ?>
                     </tbody>
                  </table>
               <a href="">Mostrar Tudo</a>
            </div>
         </main>
               <!------------------------ END-ORDER --------------------->

               <!------------------------ TOP-RIGHT --------------------->
         <div class="right">
            <div class="top">
               <button id="menu-btn">
                  <span><i class="fa-solid fa-bars"></i></span>
               </button>
               <div class="theme-toggler">
                  <span class="active"><i class="fa-solid fa-sun"></i></span>
                  <span><i class="fa-solid fa-moon"></i></span>
               </div>
               <div class="profile">
                  <div class="info">
                     <p>Olá, <b>VINICIUS</b></p>
                     <small class="text-muted">Admin</small>
                  </div>
                  <div class="profile-photo">
                     <img src="images/profile-1.jpeg" alt="">
                  </div>
               </div>
            </div>
               <!------------------------ END-TOP-RIGHT --------------------->

               <!------------------------ UPDATES-RIGHT --------------------->
            <div class="recent-updates">
               <h2>Atualizações Recentes</h2>
               <div class="updates">
                  <div class="update">
                     <div class="profile-photo">
                        <img src="images/profile-1.jpeg" alt="">
                     </div>
                     <div class="message">
                        <p><b>MIKE TYSON</b> recebeu seu pedido de Calça Cargo Preta.</p>
                        <small class="text-muted">2 minutos Atrás</small>
                     </div>
                  </div>
                  <div class="update">
                     <div class="profile-photo">
                        <img src="images/profile-1.jpeg" alt="">
                     </div>
                     <div class="message">
                        <p><b>KYAN BLACK</b> recebeu seu pedido de Calça Cargo Preta.</p>
                        <small class="text-muted">6 minutos Atrás</small>
                     </div>
                  </div>
                  <div class="update">
                     <div class="profile-photo">
                        <img src="images/profile-1.jpeg" alt="">
                     </div>
                     <div class="message">
                        <p><b>TUEZIN</b>  recebeu seu pedido de Calça Cargo Preta.</p>
                        <small class="text-muted">3 minutos Atrás</small>
                     </div>
                  </div>
               </div>
            </div>
               <!------------------------ END-UPDATES-RIGHT --------------------->

               <!------------------------ SALES-ANALYTICS-RIGHT --------------------->
            <div class="sales-analytics">
               <h2>Analíses de Vendas</h2>
               <div class="item online">
                  <div class="icon">
                     <span><i class="fa-solid fa-cart-shopping"></i></span>
                  </div>
                  <div class="right">
                     <div class="info">
                        <h3>PEDIDOS ONLINE</h3>
                        <small class="text-muted">Útimas 24 Horas</small>
                     </div>
                     <h5 class="success">+39%</h5>
                     <h3>1009</h3>
                  </div>
               </div>
               <div class="item offline">
                  <div class="icon">
                     <span><i class="fa-solid fa-bag-shopping"></i></span>
                  </div>
                  <div class="right">
                     <div class="info">
                        <h3>PEDIDOS OFFLINE</h3>
                        <small class="text-muted">Útimas 24 Horas</small>
                     </div>
                     <h5 class="danger">-17%</h5>
                     <h3>110</h3>
                  </div>
               </div>
               <div class="item costumer">
                  <div class="icon">
                     <span><i class="fa-solid fa-user"></i></span>
                  </div>
                  <div class="right">
                     <div class="info">
                        <h3>NOVOS CADASTRANTES</h3>
                        <small class="text-muted">Útimas 24 Horas</small>
                     </div>
                     <h5 class="success">+49%</h5>
                     <h3>529</h3>
                  </div>
               </div>
               <a href="#">
               <div class="item add-product">
                  <div>
                     <span><i class="fa-solid fa-plus"></i></span>
                     <h3>Adicionar Produto</h3>
                  </div>
               </div>
               </a>
            </div>
               <!------------------------ END-SALES-ANALYTICS-RIGHT --------------------->
         </div>
      </div>
               <!------------------------ JAVASCRIPT  --------------------->
               <script src="../js/javaScript.js"></script>
   </body>
</html>
