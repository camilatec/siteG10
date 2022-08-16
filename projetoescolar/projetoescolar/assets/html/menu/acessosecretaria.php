<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Poppins:wght@200&display=swap" rel="stylesheet"> <!--fonte poppins-->

    <link rel="stylesheet" href="../../../../projetoescolar/assets/css/index/style.css"> <!--pag index css-->

    <link rel="stylesheet" href="../../../../projetoescolar/assets/css/matricula/formacesss.css">
    
    <link rel="shortcut icon" href="../../../../projetoescolar/assets/midia/midialogo/favicon.ico" type="image/x-icon"> <!--favicon-->
    <title>Geração 10</title>

    <script src="https://kit.fontawesome.com/9cc5a5e153.js" crossorigin="anonymous"></script> <!--leitura de icone-->
</head>
<body >
    <div id="error">Código ou palavra passe incorreto</div>
    <script>
        function start() {
         document.getElementById('error').style.display = 'inline';
        }
     </script>
    <div id="grid">
        <div id="img"><img src="../../../../projetoescolar/assets/midia/midialogo/logocompletoescola.png" alt=""></div>
        <span>Ambiente exclusivo para administradores</span>
        <form action="./acessosecretaria.php" method="POST">
            <input class="acessinput" placeholder="Código de acesso" name="code" type="text"><br>
            <input class="acessinput" placeholder="Palavra-passe" name="pass" type="text"><br>
            <input id="submitbtn" value="acessar" type="submit">
        </form>
    </div>
</body>
</html>
<?php
    require_once('../../../../projetoescolar/assets/back-end/dbconnect.php');

    @$cod = $_POST['code'];
    @$pass = $_POST['pass'];

    @$sql = "SELECT * FROM `acess` WHERE cod = '$cod' AND pass = '$pass'";
    @$executar = mysqli_query($conexao,$sql);
    @$row = mysqli_num_rows($executar);

    if($cod != '' && $pass != '') {
        if($row == 1) {
            $_SESSION['user'] = $cod;      
            header('location:../../../../projetoescolar/assets/html/menu/matriculas.php');
            exit();
        }

        else {
            $cod = '';
            $pass = '';
            echo "
            <script>
               start()
            </script>";
        } 
    }
?>
