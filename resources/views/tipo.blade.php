<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Seu cabeçalho aqui -->
</head>
<body>
    <!-- Incluindo a barra de navegação -->
    <style>
        body {
            font-family: 'figtree', sans-serif;
            background-color: #f7f7f7;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 50px;
        }
        .hero-image {
            width: 100%;
            max-width: 800px;
            display: block;
            margin: 0 auto;
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
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px; /* Aumenta o preenchimento das células */
            text-align: left;
            border-bottom: 1px solid #ddd;
            color: #000; /* Pinta o texto de preto */
            font-size: 16px; /* Aumenta o tamanho do texto */
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        /* Adicionando imagens de fundo para cada linha da tabela */
        tr:nth-child(odd) {
            background-image: url('imagem1.jpg'); /* Substitua 'imagem1.jpg' pelo caminho da sua imagem */
            background-size: cover;
            color: #fff; /* Altera a cor do texto para torná-lo legível na imagem de fundo */
        }
        tr:nth-child(even) {
            background-image: url('imagem2.jpg'); /* Substitua 'imagem2.jpg' pelo caminho da sua imagem */
            background-size: cover;
            color: #fff; /* Altera a cor do texto para torná-lo legível na imagem de fundo */
        }
    </style>
</head>
<body>
    <nav>
        <a href="/">Início</a>
        <a href="artefatos">Artefatos</a>
        <a href="contato">Contato</a>
        <a href="tipo">Tipo</a> <!-- Novo botão Tipo -->
        <a href="login">Login</a>
    </nav>

    <!-- Conteúdo da página aqui -->
    <div class="container">
        <h1>Tipo dos nossos produtos</h1>
        
        <!-- Tabela com os tipos dos itens -->
        <table>
            <tr>
                <th>Tipo</th>
                <th>Descrição</th>
            </tr>
            <tr>
                <td style="font-size: 18px;">Maravilhosos</td>
                <td>Itens de formatos variados, com propriedades e funções variadas, sem um motivo específico ou propósito claro.</td>
            </tr>
            <tr>
                <td style="font-size: 18px;">Armas mágicas</td>
                <td>Armas tocadas pela magia de poderosos ferreiros e magos, dão um poder sobrenatural para seus portadores, servem especialmente para o combate</td>
            </tr>
            <tr>
                <td style="font-size: 18px;">Armaduras mágicas</td>
                <td>Vestimentas criadas como o contraponto de armas mágicas, capazes de resistir e proteger o usuário de diversas formas contra os perigos externos
</td>
            </tr>
            <tr>
                <td style="font-size: 18px;">Focos Arcanos</td>
                <td>Itens feitos para a manipulação da magia e da logica, com pequenos toques de estranheza aqui e ali que auxiliam o conjurador a projetar feitiços poderosos</td>
            </tr>
            <!-- Adicione mais linhas conforme necessário -->
        </table>
    </div>
</body>
</html>


