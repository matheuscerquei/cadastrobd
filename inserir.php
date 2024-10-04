<?php require 'configPDO.php';
$nome = $_POST['nome'];
$email = $_POST['email'];

//preparando comando
if($nome && $email){
    $sql = $pdo->prepare("INSERT INTO usuario (nome, email) VALUES (:nome, :email)");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);

//executar pareamento

$sql->execute(); 
header("location:table.php");
}else{
    header("Location:cadastro.php");
}
?>