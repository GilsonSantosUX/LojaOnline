<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cartunings | Resume</title>
        <link rel="stylesheet" href="../app/View/Resume/style.css">
        <script src="../scripts/index.js" defer></script>
        <script src="../components/Navigation/index.js" defer></script>
    </head>
    <body>
        <navigation-top >
<<<<<<< HEAD:app/View/Resume/index.php
            <a href="../Home" slot="brand">
                <img src="../assets/brand-white.svg" alt="Cartunings logo"  height="40"/>
            </a>
            <input type="search" placeholder="Pesquise o seu kit ou peça" slot="search" class="w-100"/>
            <div slot="actions" class="actions flex gap-3 center">
                <a href="../Login" class="btn p-3  ghost-white r-circle"><i class="icon-1" data-feather="user"></i></a>
                <a href="../Favorites" class="btn p-3  ghost-white r-circle"><i class="icon-1" data-feather="heart"></i></a>
                <a href="../Cartshopping" class="btn p-3  ghost-white r-circle"><i class="icon-1" data-feather="shopping-cart"></i></a>
=======
            <a href="../Home/index.php" slot="brand">
                <img src="../../assets/brand-white.svg" alt="Cartunings logo"  height="40"/>
            </a>
            <input type="search" placeholder="Pesquise o seu kit ou peça" slot="search" class="w-100"/>
            <div slot="actions" class="actions flex gap-3 center">
                <a href="../Login/" class="btn p-3  ghost-white r-circle"><i class="icon-1" data-feather="user"></i></a>
                <a href="../Favorites/" class="btn p-3  ghost-white r-circle"><i class="icon-1" data-feather="heart"></i></a>
                <a href="../Cartshopping/" class="btn p-3  ghost-white r-circle"><i class="icon-1" data-feather="shopping-cart"></i></a>
>>>>>>> a9893e29ccff60fa0c27166d190a75baca2dc3ed:app/View/Abstract/abstract.html
            </div>
        </navigation-top>
        <main>
            <div class="cabecalhostatus">
                <span class="step-item check"><i data-feather="check"></i>Endereço</span>
                <span class="step-item check"><i data-feather="dollar-sign"></i>Pagamento</span>
                <span class="step-item active"><i data-feather="check"></i>Resumo</span>
            </div>
            <h4 class="heading">Resumo da Compra</h4>

            <section class="wrapper-container">
                <Section class="sessioncards">
                    <div class="account-data">
                        <h4 class="heading">Dados da conta</h4>
                        <div class="daccount-data">    
                            <span class="name">  
                                <small>Nome</small>
                                <strong>Gilson Santos</strong>  
                            </span>
                            <span class="email">  
                                <small>E-mail </small>
                                <strong>gilsonjosert@gmail.com</strong>  
                            </span>
                        </div>
                        <div>
                            <button class="white view-more"><i data-feather="arrow-down"></i>Ver mais</i></button>
                        </div>
                    </div>
                    <div class="account-data">
                        <h4 class="heading">Endereço</h4>
                        <div class="endereco">        
                            <span class="sendereco">  
                                <small>Nome endereço</small>
                                <strong>Casa principal</strong>  
                            </span>
                            <span class="cep">  
                                <small>CEP</small>
                                <strong>79000-000</strong>  
                            </span>
                        </div>
                        <div class="endereco">
                            <span class="logradouro">  
                                <small>Logradouro</small>
                                <strong>Rua</strong>  
                            </span>
                            <span class="numero">  
                                <small>Número</small>
                                <strong>100</strong>  
                            </span>
                        </div>
                        <div>
                            <button class="white view-more"><i data-feather="arrow-down"></i>Ver mais</i></button>
                        </div>
                    </div>
                    <div class="account-data">
                        <h4 class="heading">Pagamento</h4>
                        <div class="dpagamento">        
                            <span class="spagamento">  
                                <small>Forma de pagamento</small>
                                <strong>Cartão</strong>  
                            </span>
                            <span class="snomeCartao">  
                                <small>Nome do cartão</small>
                                <strong>Cartão 1</strong>  
                            </span>
                            <span class="snumeroCartao">  
                                <small>Número do cartão</small>
                                <strong>**** **** **** *000</strong>  
                            </span>
                        </div>  
                        <div class="dpagamento">
                            <span class="sbandeira">  
                                <small>Bandeira</small>
                                <strong>Master Card 1</strong>  
                            </span>
                            <span class="scvv">  
                                <small>CVV</small>
                                <strong>***</strong>  
                            </span>
                        </div>                     
                        <div>
                            <button class="white view-more"><i data-feather="arrow-down"></i>Ver mais</i></button>
                        </div>                     
                    </div>
                </Section>
                <section class="list-products sessioncards">
                    <section class="account-data sessioncards list-products">
                        <h4 class="heading">Produtos</h4>
                    <div class="card-product">
                        <div class="picture">
                            <img src="../assets/img-products/car-opala-principal.jpg" alt="">
                        </div>
                        <div class="body">
                            <a class="information" href="#product">
                                <h5>Kit Opala SS - 6 cilindros </h5>
                                <p>Opala SS 1979 Original 2.5...</p>
                            </a>
                        </div>
                        <div class="value hover-only">
                            <div class="actions-card">
                                <button class="px-3"><i data-feather="trash"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-product">
                        <div class="picture">
                            <img src="../assets/img-products/car-opala-principal.jpg" alt="">
                        </div>
                        <div class="body">
                            <a class="information" href="#product">
                                <h5>Kit Opala SS - 6 cilindros </h5>
                                <p>Opala SS 1979 Original 2.5...</p>
                            </a>
                        </div>
                        <div class="value hover-only">
                            <div class="actions-card">
                                <button class="px-3"><i data-feather="trash"></i></button>
                            </div>
                        </div>
                    </div>
                    </section>
                    
                    <div class="amount">
                        <h4 class="heading">Valor Total</h4>
                        <div class="d-amount">
                
                            <span class="squantity">  
                                <div><small>Quantidade</small></div>
                                <div><strong>2</strong> </div>
                            </span>
                            <span class="discount">  
                                <div><small>Desconto</small></div> 
                                <div><strong class="price">-500,00</strong></div>
                            </span>
                            <span class="subtotal">  
                                <div><small>Sub Total</small></div>
                                <div><strong class="price">R$ 4.000,00</strong>  </div>
                            </span>
                            <span class="total">  
                                <div><small>Total</small></div>
                                <div><strong class="price">R$ 3.500,00</strong> </div> 
                            </span>
                            
                        </div>
                    </div>
                    <span class="finish">
<<<<<<< HEAD:app/View/Resume/index.php
                        <a href="../Payments" class="btn"><i data-feather="arrow-left"></i>Volta</a>
                        <a href="../Home" class="btn primary">Finalizar Compra<i data-feather="arrow-right"></i></a>    
=======
                        <a href="../Payments/payments.html"><button><i data-feather="arrow-left"></i>Voltar</button></a>
                        <a href="../Home/index.php"><button class="primary">Finalizar Compra<i data-feather="arrow-right"></i></button></a>    
>>>>>>> a9893e29ccff60fa0c27166d190a75baca2dc3ed:app/View/Abstract/abstract.html
                    </span>
                </section>
            </section>
        </main>
        <nav class="navigation-bottom">
            <span>
<<<<<<< HEAD:app/View/Resume/index.php
                <a href="../Home"><i class="icon-1" data-feather="home"></i></a>
            </span>
            <span>
                <a href="../Search"><i class="icon-1" data-feather="search"></i></a>
            </span>
            <span>
                <a href="../Favorites"><i class="icon-1" data-feather="heart"></i></a>
            </span>
            <span>
                <a href="../Cartshopping"><i class="icon-1" data-feather="shopping-cart"></i></a>
            </span>
            <span>
                <a href="../Login"><i class="icon-1" data-feather="user"></i></a>
=======
                <a href="../Home/index.php"><i class="icon-1" data-feather="home"></i></a>
            </span>
            <span>
                <a href="../Search/"><i class="icon-1" data-feather="search"></i></a>
            </span>
            <span>
                <a href="../Favorites/"><i class="icon-1" data-feather="heart"></i></a>
            </span>
            <span>
                <a href="../Cartshopping/"><i class="icon-1" data-feather="shopping-cart"></i></a>
            </span>
            <span>
                <a href="../Login/"><i class="icon-1" data-feather="user"></i></a>
>>>>>>> a9893e29ccff60fa0c27166d190a75baca2dc3ed:app/View/Abstract/abstract.html
            </span>
        </nav>
        <script src="../app/View/Resume/script.js" defer></script>
    </body>
</html>