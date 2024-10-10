<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
    <form action="cadastro.php" method="post">
    <h1>Cadastrar</h1>
    <label>Produto</label><br>
    <input type="text"  name="Produto" required><br><br>
    <label>Quantidade</label><br>
    <input type="text"  name="Quantidade" required><br><br>
    <label>Preço</label><br>
    <input type="text" name="preco" required><BR><br>

    <button type="submit">Cadastrar</button>
    </form>
</main>
</body>
</html>