<?php session_start(); 
ob_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='jquery-3.5.1.js'></script>
    <script src='javascript.js'></script>
    <!-- <link rel='stylesheet' href='stylesheet.css'> -->
    <script src="https://kit.fontawesome.com/9a2a488e23.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="restrito/css/bootstrap.min.css">

    <title>Login</title>
  </head>

  <body>
  <div id="login-container">
        <h1>Login</h1>
        <form action="index.php" method="POST">
            <label for="email">E-mail</label>
            <input type="text" name="loginn" id="email" placeholder="Digite seu E-mail" autocomplete="off"> 
            
            <label for="password">Senha</label>
            <input type="password" name="senha" id="password" placeholder="Digite a sua Senha">
            
            <input type="submit" value="Enviar">
        </form>
        <div id="social-container">
            <p>Acesse o nosso site</p>
            <i class="fas fa-lightbulb"></i>
            <!-- <i class="fa fa-facebook-f"></i>
            <i class="fa fa-linkedin"></i> -->
        </div>
        <!-- <div id="register-container"> -->
            <a href="#" id="forgot-pass">Esqueci a Senha</a>
            <!-- <p>Ainda não tem conta?</p> -->
            <!-- <a href="#">Registrar-se</a> -->
            <?php
                  if (isset($_POST['loginn'])) {
                    $loginn = $_POST['loginn'];
                    $senha = $_POST['senha'];

                      include "restrito/conexao.php";
                      $senha =md5 ($senha);
                      $sql = "SELECT * FROM usuarios WHERE loginn = '$loginn' AND senha = '$senha'";
                       
                    if ($result = mysqli_query($conn, $sql)){
                      $num_registros = mysqli_num_rows($result);

                      if ($num_registros == 1) {
                        $linha = mysqli_fetch_assoc($result);
                        mysqli_close($conn);  
                        
                                        if (($loginn == $linha['loginn']) and ($senha == $linha['senha'])){
                                          
                                          $_SESSION['loginn'] = true;
                                          header("location: restrito");
                                        } else {
                                            echo "Login Inválido!";
                                        } 
                      } else {
                        echo "Login Inválido!";
                        }  
                    }   
                  }
                  
            ?>
  </div>
 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>