<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho | 28-09</title>
    <link rel="stylesheet" href="carrinho.css">
    <link rel="stylesheet" href="fontes.css">
</head>
<body>
    <div class="header">
        <img src="images/icons/logo.svg" alt="logo">
        <div class="txt-carrinho">Carrinho</div>
    </div>
    <div class="corpo">
    <div class="fundo-lista-itens">
        <div class="painel-lista-itens">
            <div class="img-item">
                <img src="images/itens/uvinha.jpg" alt="uvinha" id="img-item-id">
            </div>
            <div class="flex-txt-preco">
                <div class="nome-item">
                    uvinha thompson foda sem caroço
                </div>
                <div class="flex-preco-num">
                    <div class="preco-unit-item">
                        R$15,00
                    </div>
                    <div>

                        <input placeholder="Quantos quartos?" min=0 id="total" type="number"><button onclick="menos()" class="a">-</button><button onclick="mais()" class="b">+</button>

                    </div>
                </div>
            </div>
        </div>

        <div class="painel-lista-itens">
            <div class="img-item">
                <img src="images/itens/uvinha.jpg" alt="uvinha" id="img-item-id">
            </div>
            <div class="flex-txt-preco">
                <div class="nome-item">
                    uvinha thompson foda sem caroço
                </div>
                <div class="flex-preco-num">
                    <div class="preco-unit-item">
                        R$15,00
                    </div>
                    <div class="quant-item">
                        <input type="number">
                    </div>
                </div>
            </div>
        </div>

        <div class="painel-lista-itens">
            <div class="img-item">
                <img src="images/itens/uvinha.jpg" alt="uvinha" id="img-item-id">
            </div>
            <div class="flex-txt-preco">
                <div class="nome-item">
                    uvinha thompson foda sem caroço
                </div>
                <div class="flex-preco-num">
                    <div class="preco-unit-item">
                        R$15,00
                    </div>
                    <div class="quant-item">
                        <input type="number">
                    </div>
                </div>
            </div>
        </div>

        <div class="painel-lista-itens">
            <div class="img-item">
                <img src="images/itens/uvinha.jpg" alt="uvinha" id="img-item-id">
            </div>
            <div class="flex-txt-preco">
                <div class="nome-item">
                    uvinha thompson foda sem caroço
                </div>
                <div class="flex-preco-num">
                    <div class="preco-unit-item">
                        R$15,00
                    </div>
                    <div class="quant-item">
                        <input type="number">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="linha-horizontal">
    <div class="total">
        <div class="total-txt">total</div>
        <div class="itens-total">item 1</div>
        <div class="itens-total">item 2</div>
        <div class="itens-total">item 3</div>
        <div class="itens-total">item 4</div>
        <hr class="linha-total">
        <div class="total-txt-preco">preço total</div> 
    </div>
    </div>
    <script src="carrinho.js"></script>
</body>
</html>