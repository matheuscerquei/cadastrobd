<?php
 require 'configPDO.php';
 
$id = $_REQUEST['id'];

$sql = $pdo->prepare("DELETE FROM usuario where id=:id");
$sql->bindValue(':id',$id);
$sql->execute();
?>