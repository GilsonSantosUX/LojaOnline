<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartunings | Payments</title>
    <link rel="stylesheet" href="../app/View/Payments/style.css">
    <script src="../scripts/index.js" defer></script>
    <script src="../components/Navigation/index.js" defer></script>
</head>
<body>
    <navigation-top >
        <a href="../Home" slot="brand">
            <img src="../assets/brand-white.svg" alt="Cartunings logo"  height="40"/>
        </a>
        <input type="search" placeholder="Pesquise o seu kit ou peça" slot="search" class="w-100"/>
        <div slot="actions" class="actions flex gap-3 center">
            <a href="../Login" class="btn p-3  ghost-white r-circle"><i class="icon-1" data-feather="user"></i></a>
            <a href="../Favorites" class="btn p-3  ghost-white r-circle"><i class="icon-1" data-feather="heart"></i></a>
            <a href="../Cartshopping" class="btn p-3  ghost-white r-circle"><i class="icon-1" data-feather="shopping-cart"></i></a>
        </div>
    </navigation-top>
    <main>
        <div class="cabecalhostatus">
            <span class="step-item check"><i data-feather="check"></i>Endereço</span>
            <span class="step-item active"><i data-feather="dollar-sign"></i>Pagamento</span>
            <span class="step-item"><i data-feather="check"></i>Resumo</span>
        </div>
        
        <h4 class="heading">Selecionar a forma de pagamento</h4>
        
        <div class="wrapper-container">
            <section class="sessioncards">
                <div class="list-cads">
                    <div class="dcards">
                        <INPUT TYPE="RADIO" NAME="cads" VALUE="op1">
                        <div class="body">
                            <span class="scards">  
                                <h5>Cartão 1</h5>
                                <strong>***********8090</strong>
                                <small>*******1-78</small>       
                            </span>
                        </div>
                        <div class="value hover-only">
                            <div class="actions-card">
                                <button class="px-3"><i data-feather="trash"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="dcards">
                        <INPUT TYPE="RADIO" NAME="cads" VALUE="op2">
                        <div class="body">
                            <span class="scards">  
                                <h5>Cartão 2</h5>
                                <strong>***********8090</strong>
                                <small>*******1-78</small>       
                            </span>
                        </div>
                        <div class="value hover-only">
                            <div class="actions-card">
                                <button class="px-3"><i data-feather="trash"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="add-cads">
                    <h4 class="heading">Adicionar cartão</h4>
                    <p>Cadastro um cartão para receber suas compras!</p>
                    <div class="dadd-cads">
                        <label class="class-label">Nome impresso no cartão</label>
                        <input type="text" placeholder="ex: GILSON J SANTOS">

                        <label class="class-label">CPF do cartão</label>
                        <input type="text" placeholder="000.000.000-00">
                        
                        <div class="details-cards">
                            <div class="dadd-cads">
                                <label class="class-label">Número do cartão</label>
                                <input type="text" placeholder="0000 0000 0000 0000">
                            </div>
                            <div class="dadd-cads">
                                <label class="class-label">CVV</label>
                                <input type="text" placeholder="000">
                            </div> 
                        </div>             
                    </div>
                    
                    <div class="dactions-card">
                        <button class="px-3">Cancelar</i></button>
                        <button class="primary">Cadastrar<i data-feather="plus"></i></button>
                    </div>
                </div>

                <div class="call-add-cads">
                    <button class="tertiary call-add-cads">Adicionar cartão<i data-feather="plus"></i></button>
                </div>
            </section>
            <section class="account">
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
                
                    <div>
                        <button class="white view-more"><i data-feather="arrow-down"></i>Ver mais</i></button>
                    </div>
                </div>

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
                <div class="finish">
                    <a href="../Address" class="btn"><i data-feather="arrow-left"></i>Voltar</a>
                    <a href="../Resume" class="btn primary">Continuar<i data-feather="arrow-right"></i></a>    
                </div>
            </section>
        </div>
    </main>
    <nav class="navigation-bottom">
        <span>
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
        </span>
    </nav>
<script src="../app/View/Payments/script.js" defer></script>
</body>
</html>