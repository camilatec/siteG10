<?php
  require('./dbconnect.php');
   
  $nomeAluno = $_POST['name'];
  $nomeResponsavel = $_POST['nameResponsavel'];
  $alunoNascimento = $_POST['alunoNascimento'];
  $serie = $_POST['serie'];
  $email = $_POST['email'];
  $numerowpp = $_POST['wppnumero'];

  $executar = "insert into matricula (nomealuno, email, serie, alunonascimento, nomeresponsavel, numerowpp) values ('$nomeAluno','$email','$serie','$alunoNascimento','$nomeResponsavel','$numerowpp')";

  mysqli_query($conexao, $executar);

  header('location:../../../projetoescolar/assets/html/menu/matricula.php')
?>