<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Poppins:wght@200&display=swap" rel="stylesheet"> <!--fonte poppins-->

    <link rel="stylesheet" href="../../../../projetoescolar/assets/css/index/style.css"> <!--pag index css-->

    <link rel="stylesheet" href="../../../../projetoescolar/assets/css/matricula/matriculaa.css">
    
    <link rel="shortcut icon" href="../../../../projetoescolar/assets/midia/midialogo/favicon.ico" type="image/x-icon"> <!--favicon-->
    <title>Geração 10</title>

    <script src="https://kit.fontawesome.com/9cc5a5e153.js" crossorigin="anonymous"></script> <!--leitura de icone-->
</head>
<body>
    <section id="menu">

        <div class="center">
            <div id="menu-mobile">
                <label for="btm-h">
                    <i class="fa-solid fa-xmark"></i>
                </label>
                        <a href="../../../../projetoescolar/assets/index.html" rel="prev" class="btn-menu">
                        Home</a>
                        <a href="https://grafiteweb.infocraft.com.br/geracao10" target="_blank" rel="next" class="btn-menu">
                        2ª Via</a>
                        <a href="../../../../projetoescolar/assets/html/menu/mapa.html" rel="next" class="btn-menu">
                        Mapa</a>
                        <a id="btn-matricula" href="../../../../projetoescolar/assets/html/menu/matricula.php" rel="next">
                            Pré Matrícula</a>
            </div>
        </div>

        <input type="checkbox" onclick="clicar()" id="btm-h">
        
        <script>

            const nome1 = document.getElementById('menu-mobile')
            const nome2 = document.getElementById('mmenu')

            function clicar(){
                nome1.classList.toggle('active') //const é uma variável, fuction linca com const por "nome"/
                nome2.classList.toggle('')
            }

        </script>

        
        <header> <!--menu web-->
            <div class="center" id="mmenu">
                    <nav>
                    <a href="../../../../projetoescolar/assets/index.html" rel="prev">
                        Home</a>
                        <a href="https://grafiteweb.infocraft.com.br/geracao10" target="_blank" rel="next" class="btn-menu">
                        2ª Via</a>
                        <a href="../../../../projetoescolar/assets/html/menu/mapa.html" rel="next">
                        Mapa</a>
                        <a id="btn-matricula" href="../../../../projetoescolar/assets/html/menu/matricula.php" rel="next">
                            Pré Matrícula</a>
                    </nav><!--menu-->
        
                    <label for="btm-h">
                        <i class="fa-solid fa-bars"></i>
                    </label>       
            </div><!--center-->
        </header>

    </section>

    <section id="imagenspng"> <!--logo + banner-->
        <div id="icones">
            <a href="https://api.whatsapp.com/send?phone=557193267837&text=Ol%C3%A1!%20Gostaria%20de%20conhecer%20a%20escola.%20" target="_blank"><img src="../../../../projetoescolar/assets/midia/midiafotos/zap.png" alt=""></a>
            <a href="https://www.instagram.com/geracao10.escola/" target="_blank"><img src="../../../../projetoescolar/assets/midia/midiafotos/insta.png" alt=""></a>
            </div>
        <div class="center">

            <div id="logo">
                <picture>
                    <source media="(max-width:420px )" srcset="../../../../projetoescolar/assets/midia/midialogo/nome3.png" type="image/png">

                    <source media="(max-width:850px )" srcset="../../../../projetoescolar/assets/midia/midialogo/nome2.png" type="image/png">

                    <img src="../../../../projetoescolar/assets/midia/midialogo/nome1.png" alt="">  
                </picture>
            </div><!--logo-->
        </div> <!--center-->
    </section> <!--imagenspgn--> 
    
    
    <section id="form-matricula">
       
            <div class="center" id="teste1">
                <form method="post" action="../../../../projetoescolar/assets/back-end/receber.php"> 
                    <div class="display">
                        <div class="form-item">
                            <input type="text" class="input" name="name" id="input1" required>
                            <label class="label" for="input1">Nome do aluno(a)</label>
                        </div>
                        <div class="form-item">
                            <input type="date" class="input" name="alunoNascimento" id="input2" required>
                            <label class="label"  for="input2">Data de nascimento do aluno(a)</label>
                        </div>
                    </div>
                    <div class="display">
                        <div class="form-item">
                            <input type="text" class="input" name="nameResponsavel" id="input3" required>
                            <label class="label" for="input3">Nome do responsável</label>
                        </div>
                        <div class="form-item">
                            <input type="text" class="input" name="serie" id="input4" required>
                            <label class="label" for="input4">Série do aluno</label>  
                        </div>
                    </div>
                    <div class="display">
                        <div class="form-item">
                            <input type="text" class="input" name="wppnumero" id="input5" required>
                            <label class="label" for="input5">Número do Whatsapp</label>
                        </div>
                        <div class="form-item">
                            <input type="email" class="input" name="email" id="input6" required>
                            <label class="label" for="input6">E-mail de contato</label>
                        </div>
                   
                    </div>
                    <input type="submit" value="Enviar" id="submit" > 
                </form>
            </div>
            <div id="imgarea-livro">
                <img src="../../../../projetoescolar/assets/midia/midiailust/livro.png" alt="img-livro">
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