<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .produto-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 20px;
        }
        .produto {
            border: 1px solid #ccc;
            padding: 10px;
            width: 200px;
            text-align: left;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .produto:hover {
            transform: scale(1.05);
        }
        .produto img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-bottom: 1px solid #ccc;
            margin-bottom: 10px;
        }
        .produto h3 {
            margin-top: 0;
        }
        .produto p {
            margin-bottom: 5px;
        }
        .add-carrinho {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .add-carrinho:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <main class="produto-container">
        <?php
            // Array com informações dos produtos
            $produtos = [
                ['nome' => 'Camisa Polo', 'preco' => '49,90', 'imagem' => '../img/polo.png'],
                ['nome' => 'Calça Jeans', 'preco' => '79,90', 'imagem' => '../img/calca.png'],
                ['nome' => 'Tênis Esportivo', 'preco' => '149,90', 'imagem' => '../img/tenis.png'],
                ['nome' => 'Jaqueta de Couro', 'preco' => '199,90', 'imagem' => '../img/jaqueta.png'],
                ['nome' => 'Vestido Floral', 'preco' => '89,90', 'imagem' => '../img/vestido.png'],
                ['nome' => 'Saia Jeans', 'preco' => '59,90', 'imagem' => '../img/saia.png']
            ];

            // Itera sobre os produtos e imprime cada um
            foreach ($produtos as $produto) {
                echo '<div class="produto">';
                echo '<img src="' . $produto['imagem'] . '" alt="' . $produto['nome'] . '">';
                echo '<h3>' . $produto['nome'] . '</h3>';
                echo '<p>R$ ' . $produto['preco'] . '</p>';
                echo '<button class="add-carrinho" data-produto="' . $produto['nome'] . '">Adicionar ao Carrinho</button>';
                echo '</div>';
            }
        ?>
    </main>
</body>
</html>
