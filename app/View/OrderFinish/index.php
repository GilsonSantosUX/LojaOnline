<?php 
    $products = $_SESSION['order'];
    $address = $_SESSION['address'];
    $finc = $_SESSION['finc'];
    unset($_SESSION['order']);
    unset($_SESSION['address']);
    unset($_SESSION['finc']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartunings | Order</title>
    <link rel="stylesheet" media="all" onload="if(media!='all')media='all'" href="../app/View/OrderFinish/style.css">
    <script src="../scripts/index.js" defer></script>
    <script src="../components/Navigation/index.js" defer></script>
    <?php include_once('components/LoadFiles/LoadFiles.php');?>
</head>
<body>
    <navigation-top >
        <a href="../Home" slot="brand">
            <img src="../assets/brand-white.svg" alt="Cartunings logo"  height="40"/>
        </a>
        <div slot="actions" class="actions flex gap-3 center">
            <a href="../Home" class="btn p-3  ghost-white r-circle"><i class="icon-1" data-feather="home"></i></a>
        </div>
    </navigation-top>
    <!-- <nav>
        <div class="nav-container">
            <a href="#home" class="ml-3">
                <img src="../../assets/brand-white.svg" alt="Cartunings logo"  height="40"/>
            </a>
            <button class="primary p-3"><i class="icon-1" data-feather="home"></i></button>
        </div>
    </nav> -->
    <main>
        <div class="wrapper-container">
            <h4 class="heading"><i class="icon-3" data-feather="check"></i>Pedido realizado com sucesso!</h4>
            <section>
                <div class="flex row align-center gap-3">
                    <span class="flex center p-3">
                        <i class="icon-1" data-feather="alert-circle"></i>
                    </span>
                    <span class="detail flex column">
                        <label>Número do comprovante</label>
                        <strong>0000001</strong>
                    </span>
                </div>
                <div class="flex row align-center gap-3">
                    <span class="flex center p-3">
                        <i class="icon-1" data-feather="box"></i>
                    </span>
                    
                    <span class="detail flex column">
                        <label>Número do pedido</label>
                        <strong>ST000001</strong>
                    </span>
                </div>
            </section>
        </div>
        <footer>
            <button><i data-feather="arrow-left"></i>Voltar ao site</button>
            <button class="tertiary"><i data-feather="printer"></i>Imprimir comprovante</button>
        </footer>
    </main>
<script src="../app/View/OrderFinish/script.js" defer></script>
</body>
</html>