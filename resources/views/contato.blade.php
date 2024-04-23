<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Seu cabeçalho aqui -->
</head>
<body>
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
        /* Estilos para o formulário de contato */
        .contact-form {
            margin-top: 30px;
        }
        .contact-form input[type="text"],
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .contact-form textarea {
            height: 150px; /* Altura do campo de texto aumentada */
        }
        .contact-form button {
            background-color: #ff6600;
            color: #fff;
            padding: 12px 24px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }
        .contact-form button:hover {
            background-color: #e64d00;
        }
        /* Estilos para o mapa */
        .map-container {
            margin-top: 30px;
            position: relative;
            overflow: hidden;
            padding-bottom: 56.25%; /* Proporção 16:9 */
            height: 0;
        }
        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
        /* Estilos para a mensagem de agradecimento */
        .thank-you-message {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
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
        <h1>Entre em contato conosco</h1>
        
        <!-- Formulário de contato -->
        <form class="contact-form" action="/enviar-contato" method="post">
            @csrf
            <input type="text" name="nome" placeholder="Seu nome" required>
            <input type="text" name="email" placeholder="Seu email" required>
            <textarea name="mensagem" placeholder="Sua mensagem" required></textarea>
            <button type="submit">Enviar</button>
        </form>
        
        <!-- Mapa do Google Maps -->
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15621.281741733!2d-122.42039462527772!3d37.77397286856067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858090d31857ff%3A0xf77d12cfbb1b7f18!2sGolden%20Gate%20Bridge!5e0!3m2!1sen!2sus!4v1635205956661!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        
        <!-- Mensagem de agradecimento (inicialmente oculta) -->
        <div class="thank-you-message" style="display: none;">Obrigado por entrar em contato! Redirecionando de volta para a página inicial...</div>
    </div>

    <script>
        // Exibir a mensagem de agradecimento e redirecionar após alguns segundos
        document.querySelector('.contact-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Impede o envio do formulário
            
            // Exibe a mensagem de agradecimento
            document.querySelector('.thank-you-message').style.display = 'block';
            
            // Redireciona após 3 segundos
            setTimeout(function() {
                window.location.href = '/';
            }, 3000);
        });
    </script>
</body>
</html>
