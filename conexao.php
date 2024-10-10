<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <main class="msg">
<?php


    $pdo = new PDO("mysql:dbname=estoque;host=localhost:3306", "root", "cimatec");

if ($pdo) {
    echo "Produto Cadastrado";
}

?>
</main>
</body>
</html>