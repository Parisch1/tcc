<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho | 04-10</title>
    <link rel="stylesheet" href="../fontes.css">
    <link rel="stylesheet" href="carrinho.css">
</head>
<body>
    <div class="header">
        <img src="../images/icons/logo.svg" alt="logo" id="logo-acougue">
        <div class="txt-carrinho">Carrinho</div>
    </div> <!--fecha header-->
    <div class="corpo">
        <div class="fundo-lista-itens">
            <div class="painel-lista-itens">
                <div class="img-item">
                    <img src="../images/itens/uvinha.jpg" alt="uva" id="img-item-id">
                </div> <!-- img-item  -->
                <div class="flex-txt-preco">
                    <div class="nome-item">UVA THOMPSON</div>
                    <div class="flex-preco-num">
                        <div class="preco-unit-item">R$15,00</div>
                        <div class="input-num-itens">
                            <input min=0 id="total-maismenos" type="number">
                            <button onclick="menos()" class="a-menos">-</button>
                            <button onclick="mais()" class="b-mais">+</button>
                        </div> <!-- fecha input num -->
                    </div> <!-- fecha flex preco num -->
                </div> <!-- fecha flex txt preco-->
            </div><!-- fecha painel lista itens -->

            <div class="painel-lista-itens">
                <div class="img-item">
                    <img src="../images/itens/uvinha.jpg" alt="uva" id="img-item-id">
                </div> <!-- img-item  -->
                <div class="flex-txt-preco">
                    <div class="nome-item">UVA THOMPSON</div>
                    <div class="flex-preco-num">
                        <div class="preco-unit-item">R$15,00</div>
                        <div class="input-num-itens">
                            <input min=0 id="total-maismenos" type="number">
                            <button onclick="menos()" class="a-menos">-</button>
                            <button onclick="mais()" class="b-mais">+</button>
                        </div> <!-- fecha input num -->
                    </div> <!-- fecha flex preco num -->
                </div> <!-- fecha flex txt preco-->
            </div><!-- fecha painel lista itens -->

            <div class="painel-lista-itens">
                <div class="img-item">
                    <img src="../images/itens/uvinha.jpg" alt="uva" id="img-item-id">
                </div> <!-- img-item  -->
                <div class="flex-txt-preco">
                    <div class="nome-item">UVA THOMPSON</div>
                    <div class="flex-preco-num">
                        <div class="preco-unit-item">R$15,00</div>
                        <div class="input-num-itens">
                            <input min=0 id="total-maismenos" type="number">
                            <button onclick="menos()" class="a-menos">-</button>
                            <button onclick="mais()" class="b-mais">+</button>
                        </div> <!-- fecha input num -->
                    </div> <!-- fecha flex preco num -->
                </div> <!-- fecha flex txt preco-->
            </div><!-- fecha painel lista itens -->

            <hr class="linha-vertical">
        </div> <!-- fecha fundo-lista-itens -->

        <div class="total">
            <div class="total-txt">total</div>
            <div class="itens-total">
                <div class="icon-mais-svg">
                    <img src="../images/icons/mais-icon.svg" alt="" id="icon-mais">
                </div> <!-- fecha icon-mais-txt -->
                <div class="item-total">UVINHA FODA SEM CAROÇO</div>
                <div class="preco-total">R$15,90</div>
            </div> <!-- fecha itens-total -->
            <hr class="linha-total">
            <div class="total-txt-preco">preço total</div>
        </div> <!-- fecha total -->
    </div><!-- fecha corpo -->
    <script scr="carrinho.js"></script>
</body>
</html>