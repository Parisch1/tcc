<!DOCTYPE html>
<html lang="pt">
<link rel="stylesheet" href="principal.css">
<link rel="stylesheet" href="cabecalho.css">
<link rel="stylesheet" href="barrinha.css">
<link rel="stylesheet" href="carousel.css">
<link rel="stylesheet" href="painel-promo.css">
<link rel="stylesheet" href="fontes.css">
<link rel="stylesheet" href="painel-item.css">
<link rel="stylesheet" href="rodape.css">
<link rel="stylesheet" href="slide-menu-block.css">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINCIPAL | 28-09</title>
</head>

<body>

    <header>
        <div class="header">

            <div class="logoheader">
                <a href="#">
                <img src="images/icons/logo.svg" alt="logosvg teste">
                </a> 
            </div>
            <div class="pesquisa-menu">
                <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Busque aqui">
                    <!--palavra q aparece na barra de pesquisa e 
                                    some quando digita-->
                    <a href="#" class="search-btn">
                        <img src="images/icons/lupa.svg" alt="Lupa" height="20vw" width="20vw">
                    </a>
                </div>
                <!--CARRINHO-->
                <div class="carrinhobtn">
                    <a href="carrinho.php">
                    <img src="images/icons/carrinho-icon.svg" alt="botao-carrinho" id="carrinho">  
                    </a>
                </div>
                <!-- BOTAO MENU -->
                <section>
                    <span class="container">
                        <span class="checkbox-container">
                        <input class="checkbox-trigger" type="checkbox" />
                        <span class="menu-content">
                            <ul>
                            <li>Home</li>
                            <li>About</li>
                            <li>Contact</li>
                            </ul>
                            <span class="hamburger-menu"></span>
                        </span>
                        </span>
                    </span>
                </section>                
        </div>
    </header>
    <div class="barra">
    <div class="barrinha">
        <div class="barrinhaflex">
            <a href="suinos.html">
                <div class="barrinhabtn" id="suinosbtn">Su??nos</div>
            </a>
            <a href="bovinos.html">
                <div class="barrinhabtn">Bovinos</div>
            </a>
            <a href="aves.html">
                <div class="barrinhabtn">Aves</div>
            </a>
            <a href="churrasco.html">
                <div class="barrinhabtn">Churrasco</div>
            </a>
            <a href="bebidas.html">
                <div class="barrinhabtn">Bebidas</div>
            </a>
            <a href="mercearia.html">
                <div class="barrinhabtn" id="merceariabtn">Mercearia</div>
            </a>
        </div>
    </div>
    </div>
    <div class="testeslide">

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <div class="overlay-image" style="background-image: url(images/slide/ad1.png);"></div>
                    <div class="container">

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay-image" style="background-image: url(images/slide/bife\ com\ lim??o.jpg);"></div>
                    <div class="container">

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay-image" style="background-image: url(images/slide/carnecrua.jpg);"></div>
                    <div class="container">


                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>

    <div class="linhapromocao">
        <hr class="hr-1"><div class="linha-promo">MAIORES DESCONTOS</div><hr class="hr-2">
        
        
    </div>
<!--ITENS PROMO????O-->
<div class="paineisitens-promo">
    <div class="painel-promo">
        <div class="imgpainel-promo">
            <img src="images/peido-de-frago.png" alt="img-painel-promocao" id="img-painel-promo">
        </div>
        <div id="textoitens-promo">peito de framgo e blABLABLA</div>
        
        <div class="linhabaixo-promo">
            <div class="preco-direito">
                <div class="preco-promo-cima">
                    <img src="images/icons/Componente 8 ??? 1.svg" alt="X svg" id="svg-x-promo">
                    <div class="preco-promo2">49,90</div>
                </div>
                <div class="precos-promo">
                    <div id="precoitens1-promo">39</div><div id="precoitens2-promo">,90</div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="hr-final"> <hr class="hr-hr-final"> </div>
    <!--ITENS-->
    <div class="paineisitens">
        <div class="painel">
            <div class="imgpainel">
                <img src="images/peido-de-frago.png" alt="img-painel" id="img-painel">
            </div>
            <div id="textoitens">peito de framgo e blABLABLA</div>
            <div class="linhabaixo">
                <div class="precos">
                    <div id="precoitens1">39</div><div id="precoitens2">,90</div>
                </div>
                
            </div>
        </div>
    </div>

    <!--        RODAP??       -->
    <div class="spacefooter">
        <div class="footer">
            <div class="logorodape">
                <img src="images/icons/logorodape.svg" alt="logo">
            </div>
            <div class="txt-rodape">Rua Piriri Poror?? Muito Louco 6969</div>
            <div class="txt-rodape">Ita??-SP</div>
            <div class="txt-rodape">(14)7070-707070</div>
            <div class="txt-rodape">Email: acougueparischi@gmail.com</div>
            <div class="txt-rodape">CNPJ:53X0.81X0.4590</div>
            <div class="txt-rodape">Hor??rio de atendimento:</div>
            <div class="txt-rodape">08:00 ??s 18:00 -</div>
            <div class="txt-rodape">Segunda a S??bado</div>
            <div class="txt-rodape">Hor??rio de Bras??lia</div>

        </div>
    </div>
    <!--        RODAP??       -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>