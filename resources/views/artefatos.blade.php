<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossos Produtos</title>
    <!-- Styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .navbar {
            background-color: #333;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .product {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
            flex-basis: calc(30% - 20px); /* Define a largura de cada produto */
        }
        .product img {
            max-width: 100px;
            margin-right: 20px;
        }
        .product-info {
            flex: 1;
        }
        .product-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .product-description {
            margin-bottom: 10px;
        }
        .product-price {
            font-size: 16px;
            color: #007bff;
        }
        .back-link {
            display: block;
            margin-bottom: 20px;
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="/">Inicio</a>
        <a href="artefatos">Artefatos</a>
        <a href="contato">Contato</a>
        <a href="tipo">Tipo</a> <!-- Novo botão Tipo -->
        <a href="login">Login</a>
    </div>

    <div class="container">
        <h1>Nossos Produtos</h1>

        <div class="product-container">
            <!-- Produto 1 -->
            <div class="product">
                <img src="images/espa.jpg" alt="Product Image">
                <div class="product-info">
                    <div class="product-title">Espátula de Mithril</div>
                    <div class="product-description">Item Maravilhoso incomum;</div>
                    <div class="product-description">Alguém por algum motivo decidiu usar um dos mentais mais raros do mundo na produção de uma Espátula de cozinha. Ela não faz nada de muito especial a não ser ter uma resistência absurdamente grande e um peso quase nulo. Mas você pode se gabar por ter uma Espátula muito cara.</div>
                    <div class="product-price">500 po</div>
                </div>
            </div>

            <!-- Produto 2 -->
            <div class="product">
                <img src="product2.jpg" alt="Product Image">
                <div class="product-info">
                    <div class="product-title">Dispositivo de Fluxo</div>
                    <div class="product-description">Item maravilhoso raro;</div>
                    <div class="product-description">Um poderosíssimo item mágico que consegue redirecionar o fluxo da mana comum, transformando ela em mana selvagem. Isso acaba por gerar os mais diversos efeitos, então use com sabedoria. Ao ativar o dispositivo, algumas dessas coisas podem acontecer por causa da magia selvagem, incluindo: Reestruturação de buracos faciais, transformações parciais involuntárias, transformação da voz falada por acordes musicais de uma viola, crescimento exponencial de trepadeiras, surgimento de fadas Dragão, calvície instantanea e peidos perfumados.</div>
                    <div class="product-price">250 po</div>
                </div>
            </div>

             <!-- Produto 2 -->
             <div class="product">
                <img src="product2.jpg" alt="Product Image">
                <div class="product-info">
                    <div class="product-title">Espada devoradora</div>
                    <div class="product-description">Arma mágica Muito Rara;</div>
                    <div class="product-description">Essa espada mágica na verdade é um mímico dócil, ele devora principalmente cadáveres de mortos. No entanto é preciso mantê-lo alimentado, se não quiser que senhorinhas donas de gato furiosas comecem a bater na sua porta.</div>
                    <div class="product-price">400 po</div>
                </div>
            </div>

             <!-- Produto 2 -->
             <div class="product">
                <img src="product2.jpg" alt="Product Image">
                <div class="product-info">
                    <div class="product-title">Armadura de queda suave</div>
                    <div class="product-description">Armadura mágica incomum;</div>
                    <div class="product-description">O nome é só de praxe, essa armadura possui um sistema de airbags poderoso na parte traseira da calça, permitindo que  usuário ao cair de bunda de altas posições saia ileso. </div>
                    <div class="product-price">150 po</div>
                </div>
            </div>

            <div class="product">
        <img src="product2.jpg" alt="Product Image">
        <div class="product-info">
            <div class="product-title">Varinha de fogos</div>
            <div class="product-description">Foco arcano raro;</div>
            <div class="product-description">200po;</div>
            <div class="product-description">Uma varinha de fogos de artifício, todos podem dizer que é inofensivo até levar uma dessas no rosto, tenho que dizer que a experiência não é a das melhores.</div>
        </div>
    </div>
    
    <div class="product">
        <img src="product3.jpg" alt="Product Image">
        <div class="product-info">
            <div class="product-title">Anéis de Distanciamento Social</div>
            <div class="product-description">Item mágico maravilhoso Lendário;</div>
            <div class="product-description">1000po;</div>
            <div class="product-description">Caso você odeie MUITO alguém, você pode dar um desses Anéis para essa pessoa e o outro fica com você. Sempre que estiver perto da outra pessoa com esse anel, o mesmo vai apontar a melhor rota de saída ou uma janela pela qual a pessoa pode ser atirada.</div>
        </div>
    </div>

    <div class="product-container">
    <div class="product">
        <img src="product4.jpg" alt="Product Image">
        <div class="product-info">
            <div class="product-title">Espada Imaginária de Kerdek</div>
            <div class="product-description">Arma Mágica muito rara;</div>
            <div class="product-description">400 po;</div>
            <div class="product-description">Essa espada Imaginária não tem peso, não causa suspeitas, não tem uma forma e nem mesmo pode ser tocada, você pode usar essa espada para causar dano Imaginário em seus inimigos algo que todos são vulneráveis (em seus sonhos pelo menos)</div>
        </div>
    </div>
    
    <div class="product">
        <img src="product5.jpg" alt="Product Image">
        <div class="product-info">
            <div class="product-title">Botas Solares</div>
            <div class="product-description">Armadura Mágica Lendária;</div>
            <div class="product-description">5000po;</div>
            <div class="product-description">Essas botas não queimam em contato com o sol ou altas temperaturas, somente as botas no entanto, o usuário ainda sente as penalidades do calor. E não que tenha muita coisa pra se ver no sol ou como você chegar lá para início de conversa.</div>
        </div>
    </div>

    <div class="product">
        <img src="product6.jpg" alt="Product Image">
        <div class="product-info">
            <div class="product-title">Tomo do Esclarecimento</div>
            <div class="product-description">Foco Arcano Lendário;</div>
            <div class="product-description">1500 po;</div>
            <div class="product-description">Uma vez por dia você pode usar a magia "Quer que eu Desenhe?" usando este item, onde você explica os míseros detalhes pra um acéfalo entender como a PORCARIA DO PLANO FUNCIONA.</div>
        </div>
    </div>

    <div class="product">
        <img src="product7.jpg" alt="Product Image">
        <div class="product-info">
            <div class="product-title">Tapa-olho da cegueira</div>
            <div class="product-description">Item mágico Maravilhoso incomum;</div>
            <div class="product-description">50po;</div>
            <div class="product-description">Enquanto estiver usando este Tapa-olho sob um dos olhos, este olho não conseguirá enxergar. faça um para cada</div>
        </div>
    </div>
</div>


            <!-- Adicione mais produtos conforme necessário -->
        </div>
    </div>
</body>
</html>
