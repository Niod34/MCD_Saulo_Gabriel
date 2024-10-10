<?php

require 'conexao.php';

$sql = $pdo->query('SELECT * FROM est');

$estoque = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ler.css">
</head>
<body>
<table class="table">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Produto</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Preço</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($estoque as $produto) : ?>
    <tr>
      <td><?php echo $produto["Id_Produto"]; ?></td>
      <td><?php echo $produto["Produto"]; ?></td>
      <td><?php echo $produto["Quantidade"]; ?></td>
      <td><?php echo $produto["preco"]; ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
