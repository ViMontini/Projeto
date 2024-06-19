<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas - Home</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .welcome-container {
            display: flex;
            justify-content: center;
            padding: 20px;
        }
        .welcome-section {
            text-align: center;
            background: linear-gradient(to right, #f9f9f9, #e6e6e6);
            padding: 50px 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            max-width: 800px;
            width: 100%;
            position: relative;
            overflow: hidden;
        }
        .welcome-section::before {
            content: "";
            background: url('imagens/fundo.jpg') no-repeat center center;
            background-size: cover;
            opacity: 0.2;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 0;
        }
        .welcome-section h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #333;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
            position: relative;
            z-index: 1;
        }
        .welcome-section p {
            font-size: 1.2em;
            color: #666;
            margin-bottom: 30px;
            position: relative;
            z-index: 1;
        }
        .icon {
            font-size: 3em;
            color: #4CAF50;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>

    <main class="welcome-container">
        <div class="welcome-section">
            <div class="icon">&#x1F455; &#x1F457;</div> <!-- Ícones de camisa e vestido -->
            <?php
                echo "<h1>Bem-vindo à nossa loja de roupas!</h1>";
                echo "<p>Veja nossas últimas novidades em roupas masculinas e femininas.</p>";
            ?>
        </div>
    </main>


</body>
</html>
