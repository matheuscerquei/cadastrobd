<?php
require 'configPDO.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body>
<form action="inserir.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text"  name="nome" required><br><br>
        
        <label for="email">E-mail:</label>
        <input type="email"  name="email" required><br><br>
        
        <button type="submit">Salvar</button>
    </form>
</body>
</html>