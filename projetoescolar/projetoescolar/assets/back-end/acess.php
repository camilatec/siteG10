<?php
require_once('dbconnect.php');

$cod = $_POST['code'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM `acess` WHERE cod = '$cod' AND pass = '$pass'";
$executar = mysqli_query($conexao,$sql);
$row = mysqli_num_rows($executar);


if($row == 1) {
    $_SESSION['user'] = $cod;      
    header('location:../../../projetoescolar/assets/html/menu/matriculas.php');
    exit();
}

else {
    echo "
    <script>
      document.getElementById('error').style.display = 'inline';
    </script>";
    header('location:../../../projetoescolar/assets/html/menu/acessosecretaria.php');
}


?>
?>