

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Poppins:wght@200&display=swap" rel="stylesheet"> <!--fonte poppins-->

    <link rel="stylesheet" href="../../../../projetoescolar/assets/css/index/style.css"> <!--pag index css-->

    <link rel="stylesheet" href="../../../../projetoescolar/assets/css/matricula/areamatricula.css">
    
    <link rel="shortcut icon" href="../../../../projetoescolar/assets/midia/midialogo/favicon.ico" type="image/x-icon"> <!--favicon-->
    <title>Geração 10</title>

    <script src="https://kit.fontawesome.com/9cc5a5e153.js" crossorigin="anonymous"></script> <!--leitura de icone-->
</head>
<body>
    <section id="menu">
        <header> <!--menu web-->
                <img src="../../../../projetoescolar/assets/midia/midialogo/nome2.png" alt="">
        </header>

    </section>
    
    <section id="form-matricula">
        <div id="matriculas-org">
        <?php
  require('../../../../projetoescolar/assets/back-end/dbconnect.php');
   
  $sql = $conexao->query("select * from matricula");
   while($produto = $sql->fetch_object()) {
      $nome = "$produto->nomealuno";
      $nomeResponsavel = "$produto->nomeresponsavel";
      $email = "$produto->email"; 
      $serie = "$produto->serie"; 
      $nascimento = "$produto->alunonascimento";
      $wpp = "$produto->numerowpp";
      $id = "$produto->id";

      echo "<div class='matricula'>
      <div class='display'>
          <div class='col'>
              <p>Nome do aluno:</p>
              <span>$nome</span>
          </div>
          <div class='col'>
              <p>Nascimento:</p>
              <span>$nascimento</span>
          </div>
      </div>
      <div class='display'>
          <div class='col'>
              <p>Nome do responsável:</p>
              <span>$nomeResponsavel</span>
          </div>
          <div class='col'>
              <p>Número:</p>
              <span>$wpp</span>
          </div>
      </div>
      <div class='display'>
          <div class='col'>
              <p>E-mail de contato:</p>
              <span>$email</span>
          </div>
          <div class='col'>
              <p>Série:</p>
              <span>$serie</span>
          </div>
      </div>
      <a id='excluir' href='../../../../projetoescolar/assets/back-end/excluir.php?id=$id'>excluir</a>
  </div>";}
 
?>
        </div>
    </section>




    <footer>
        <div class="center">
               
              <div class="footer-un">
                  <div class="footer-logo">
                       <img src="../../../../projetoescolar/assets/midia/midialogo/logocompletoescola.png">
                  </div> <!--footer-logo-->
              </div> <!--footer-box-->
  
              <div class="footer-un">
                  <div class="endereco">
                      <h2>Venha nos visitar!</h2>
                      <h3>Salvador/Bahia</h3>
                      <h4>Acupe de Brotas</h4>
                      <p>Rua Otacílio Santos nº19</p>
                  </div>
              </div> <!--footer-box-->
              <div class="footer-un">
                  <div class="contatos">
                     <h2>Fale Conosco</h2>
                      <ul class="redes-sociais">
                        <li>
                            <a href="https://pt-br.facebook.com/escolaG10/" target="_blank">
                               <i class="fab fa-facebook-square"></i>
                               <span>Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/geracao10.escola/" target="_blank">
                                <i class="fa-brands fa-instagram-square"></i>
                               <span>Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=557193267837&text=Ol%C3%A1!%20Gostaria%20de%20conhecer%20a%20escola.%20" target="_blank">
                               <i class="fa-brands fa-whatsapp-square"></i>
                               <span>Whatsapp</span>
                            </a>
                        </li>
                       </ul>
                  </div> <!--contatos-->
              </div> <!--footer-box-->
             
          
          <div class="creditos">
              <p> Site criado por: Devs Camila & Matheus & Victor 2022</p>
          </div>
  
        </div> <!--center-->
        </footer>
</body>
</html>