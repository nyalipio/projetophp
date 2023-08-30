<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Produtos</title>
    <style>
        /* Seu CSS aqui */
    </style>
</head>
<body>
    <header>
        <h1>Confeitaria Mix</h1>
    </header>
    <div class="container">
        <div class="product-list">
            <?php
            $products = array(
                array(
                    'name' => 'Kit Básico',
                    'description' => 'Um kit simples para sua festa.',
                    'price' => 50.00
                ),
                array(
                    'name' => 'Kit Premium',
                    'description' => 'Um kit completo para uma festa inesquecível.',
                    'price' => 100.00
                )
            );

            foreach ($products as $product) {
                echo '<div class="product-card">';
                echo '<h2>' . $product['name'] . '</h2>';
                echo '<p>' . $product['description'] . '</p>';
                echo '<p><strong>Preço: R$' . number_format($product['price'], 2) . '</strong></p>';
                echo '<button>Adicionar ao Carrinho</button>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
