<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .carrinho-container {
            display: flex;
            justify-content: center;
            padding: 20px;
        }
        .carrinho-section {
            text-align: center;
            background-color: #f9f9f9;
            padding: 50px 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            max-width: 800px;
            width: 100%;
            position: relative;
            overflow: hidden;
        }
        .carrinho-section h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #333;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
            position: relative;
            z-index: 1;
        }
        .carrinho-section p {
            font-size: 1.2em;
            color: #666;
            margin-bottom: 30px;
            position: relative;
            z-index: 1;
        }
        .carrinho-section ul {
            list-style-type: none;
            padding: 0;
            position: relative;
            z-index: 1;
        }
        .carrinho-section li {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            text-align: left;
            box-shadow: 0 1px 2px rgba(0,0,0,0.1);
        }
        .empty-icon {
            font-size: 4em;
            color: #ccc;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>

    <main class="carrinho-container">
        <div class="carrinho-section">
            <div class="empty-icon">&#x1F6D2;</div> <!-- Ícone de carrinho vazio -->
            <?php
                session_start();

                if (!isset($_SESSION['carrinho'])) {
                    $_SESSION['carrinho'] = array();
                }

                echo "<h2>Carrinho de Compras</h2>";

                if (empty($_SESSION['carrinho'])) {
                    echo "<p>O carrinho está vazio.</p>";
                } else {
                    echo "<ul>";
                    foreach ($_SESSION['carrinho'] as $produto) {
                        echo "<li>$produto</li>";
                    }
                    echo "</ul>";
                }
            ?>
        </div>
    </main>


</body>
</html>
