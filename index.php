<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Kits de Festa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #87CEFA;
        }
        header {
            background-color:	#BC8F8F ;
            padding: 10px;
            text-align: center;
        }
        nav {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 5px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .product {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            margin: 10px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Loja de Kits de Festa</h1>
    </header>
    <nav>
        <a href="index.php">Início</a>
        <a href="produtos.php">Produtos</a>
        <a href="contato.php">Contato</a>
        <a href="formadm.php">Administrador</a>
    </nav>
    <div class="container">
        <div class="product">
            <h2>Kit Festa Padrão</h2>
            <p>Descrição do kit festa padrão...</p>
            <p>Preço: R$50,00</p>
            <button>Adicionar ao Carrinho</button>
        </div>
        <div class="product">
            <h2>Kit Festa Premium</h2>
            <p>Descrição do kit festa premium...</p>
            <p>Preço: R$100,00</p>
            <button>Adicionar ao Carrinho</button>
        </div>
        <!-- Adicione mais produtos aqui -->
    </div>
    <?php include 'rodape.php'; ?>
</body>
</html>
