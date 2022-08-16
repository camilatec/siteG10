<?php
require_once('./dbconnect.php');

$id = $_GET['id'];



$sql = "delete from matricula where id= '$id'";

$executar = mysqli_query($conexao,$sql);

header('location:../../../projetoescolar/assets/html/menu/matriculas.php');

?>