<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartunings | Favorites</title>
    <link rel="stylesheet" href="../app/View/Favorites/style.css">
    <script src="../../../scripts/index.js" defer></script>
    <script src="../../../components/Navigation/index.js" defer></script>
</head>
<body>
    <navigation-top >
        <a href="../Home/index.php" slot="brand">
            <img src="../../assets/brand-white.svg" alt="Cartunings logo"  height="40"/>
        </a>
        <input type="search" placeholder="Pesquise o seu kit ou peça" slot="search" class="w-100"/>
        <div slot="actions" class="actions flex gap-3 center">
            <a href="../Login" class="btn p-3  ghost-white r-circle"><i class="icon-1" data-feather="user"></i></a>
            <a href="../Cartshopping/" class="btn p-3  ghost-white r-circle"><i class="icon-1" data-feather="shopping-cart"></i></a>
        </div>
    </navigation-top>
    <main>
        <div class="wrapper-container">
            <div class="cabecalhofavoritos">
                <h4 class="heading">Lista de Favoritos</h4>        
            </div>
            <section class="list-products">
                <div class="card-product">
                    <div class="picture">
                        <img src="../../assets/img-products/car-opala-principal.jpg" alt="">
                    </div>
                    <div class="body">
                        <a class="information" href="#product">
                            <h5>Kit Opala SS - 6 cilindros </h5>
                            <p>Opala SS 1979 Original 2.5...</p>
                        </a>
                    </div>
                    <div class="value">
                        <div class="actions-card">
                            <button class="px-3 list-is-visible"><i data-feather="shopping-cart"></i></button>
                            <button class="px-3"><i data-feather="share-2"></i></button>
                            <button class="px-3"><i data-feather="trash"></i></button>
                        </div>
                        <a href="../Details/" class="btn tertiary">Ver Detalhes</a>
                    </div>
                </div>
                <div class="card-product">
                    <div class="picture">
                        <img src="../../assets/img-products/car-opala-principal.jpg" alt="">
                    </div>
                    <div class="body">
                        <a class="information" href="#product">
                            <h5>Kit Opala SS - 6 cilindros </h5>
                            <p>Opala SS 1979 Original 2.5...</p>
                        </a>
                    </div>
                    <div class="value hover-only">
                        <div class="actions-card">
                            <button class="px-3 list-is-visible"><i data-feather="shopping-cart"></i></button>
                            <button class="px-3"><i data-feather="share-2"></i></button>
                            <button class="px-3"><i data-feather="trash"></i></button>
                        </div>
                        <a href="../Details/" class="btn tertiary">Ver Detalhes</a>
                    </div>
                </div>
                <div class="card-product">
                    <div class="picture">
                        <img src="../../assets/img-products/car-opala-principal.jpg" alt="">
                    </div>
                    <div class="body">
                        <a class="information" href="#product">
                            <h5>Kit Opala SS - 6 cilindros </h5>
                            <p>Opala SS 1979 Original 2.5...</p>
                        </a>
                    </div>
                    <div class="value hover-only">
                        <div class="actions-card">
                            <button class="px-3 list-is-visible"><i data-feather="shopping-cart"></i></button>
                            <button class="px-3"><i data-feather="share-2"></i></button>
                            <button class="px-3"><i data-feather="trash"></i></button>
                        </div>
                        <a href="../Details/" class="btn tertiary">Ver Detalhes</a>
                    </div>
                </div>
            </section>
            <footer>
                <button><i data-feather="arrow-left"></i>Voltar</button>
                <button class="secondary"><i data-feather="trash"></i>Limpar favoritos</button>
            </footer>
        </div>
    </main>
    <nav class="navigation-bottom">
        <span>
            <a href="../Home/index.php"><i class="icon-1" data-feather="home"></i></a>
        </span>
        <span>
            <a href="../Search/"><i class="icon-1" data-feather="search"></i></a>
        </span>
        <span>
            <a href="../Cartshopping/"><i class="icon-1" data-feather="shopping-cart"></i></a>
        </span>
        <span>
            <a href="../Login"><i class="icon-1" data-feather="user"></i></a>
        </span>
    </nav>
<script src="../app/View/Favorites/script.js" defer></script>
</body>
</html>