<?php 
require 'configPDO.php';
$lista = [];
$sql = $pdo->query("SELECT * FROM usuario");
if($sql->rowcount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Lista de usuarios cadastrados</h1>
<a href="cadastro.php">cadastrar novos usuarios</a>
<br><br>
<table border="2">
<tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Email</th>
</tr>


<?php 

foreach($lista as $usuario):?>

<tr>
<td> <?=$usuario['id'];?> </td>
<td> <?=$usuario['nome'];?></td>
<td> <?=$usuario['email'];?></td>
<td><a href="editar.php?id=<?=$usuario['id'];?> "> editar</a></td>
<td><a href="excluir.php?id=<?=$usuario['id'];?> "> excluir</a></td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>
