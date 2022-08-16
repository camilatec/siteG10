<?php
  $user = 'u600039458_GeracaoDez';
  $dbname = 'u600039458_EscolaG10';
  $pass = 'Gabinete1028';
  $host = 'localhost';

  $conexao = mysqli_connect("$host", "$user", "$pass", "$dbname");

  $conexao->query("SET NAMES utf8");
  $conexao->query("SET character_set_connection=utf8");
  $conexao->query("SET character_set_client = utf8 ");
  $conexao->query("SET character_set_result = utf8 ");
  ?>