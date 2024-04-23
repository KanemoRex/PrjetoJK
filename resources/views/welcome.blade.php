<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artefatos Incríveis</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        body {
            font-family: 'figtree', sans-serif;
            background-color: #260e04; /* Alteração da cor de fundo */
            color: #fff; /* Alteração da cor do texto */
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr; /* Divide em duas colunas */
            gap: 20px; /* Espaçamento entre os elementos */
        }
        .header {
            text-align: left;
            margin-bottom: 20px;
            grid-column: span 2; /* Ocupa duas colunas */
        }
        .hero-image {
            width: 100%;
            display: block;
            margin: 0 auto;
            border-radius: 10%; /* Adição de borda arredondada à imagem */
        }
        .cta-button {
            display: inline-block;
            background-color: #ff6600;
            color: #fff;
            padding: 12px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }
        .cta-button:hover {
            background-color: #e64d00;
            border-color: #e64d00;
        }
        nav {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        .content {
            text-align: left; /* Alinhamento do texto ajustado para a esquerda */
            margin-top: 30px; /* Margem superior aumentada para separar do cabeçalho */
            grid-column: span 1; /* Ocupa uma coluna */
        }
        .fund {
            text-align: left; /* Alinhamento do texto ajustado para a esquerda */
            margin-top: 5%; /* Margem superior aumentada para separar do cabeçalho */
            grid-column: span 2; /* Ocupa uma coluna */
        }
    </style>
</head>
<body>
    <nav>
        <a href="#inicio">Início</a>
        <a href="#artefatos">Artefatos</a>
        <a href="#contato">Contato</a>
        <a href="#tipo">Tipo</a> <!-- Novo botão Tipo -->
        <a href="#login">Login</a>
    </nav>
    <div class="container">
        <div class="header">
            <h1 id="inicio">Bem-Vindo à Golgari Delivery</h1>
            <p>A casa Oblikuo tem orgulho de apresentar Golgari Delivery. Uma forma segura de fazer negócio de 
                itens mágicos de valor só conhecido por magos, ferreiros e mestres de guilda de todos os
                 planos de existência.</p>
        </div>
        <div>
            <img src="{{ asset('images/hero.jpg') }}" alt="Artefatos Incríveis" class="hero-image">
        </div>
        <div class="content">
            <h2>Uma pequena Lenda</h2>
            <p>Em um reino chamado OOpa, a loja Golgari Delivery oferecia artefatos mágicos poderosos. Sir Gareth e a feiticeira Elara buscaram esses artefatos para suas missões. Equipados com uma espada encantada e um cajado mágico, enfrentaram desafios e vilões perigosos. Com coragem, protegeram o reino, trazendo esperança. Ao retornar à loja, agradeceram pelos artefatos que os ajudaram. Sua história tornou-se uma lenda inspiradora.</p>
        </div>
        <div class="content">
            <h2>Sobre nós</h2>
            <p>Garantimos a entrega segura dos itens, desde o mais volátil até os mais esquisitos. Nossos entregadores da casa Dimir são das mais variadas espécies e tamanhos, garantimos (com certo grau de violência) uma certeza na compra e na venda das nossas variadas maravilhas.

Aproveite nossos serviços, compre com segurança, escolha Golgari Delivery</p>
        </div>
      
        <div class="fund">
            <div>
            <h2>Fundadores</h2>
               <p>Conheça os dois fundadores visionários por trás da Golgari Delivery:</p>
                <ul>
                    <li><strong>Lord Bata:</strong> Mestre em magia obscura e encantamentos, Lord Bata é o cérebro por trás dos artefatos mágicos oferecidos pela loja.</li>
                    <li><strong>Lord Kanemo:</strong> Habilidoso em manipulação e estratégia, Lord Kanemo é responsável pela logística e segurança das entregas dos artefatos.</li>
                </ul>
            </div>
            <div>
        </div>
    </div>
</body>
</html>
