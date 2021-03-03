<?php 
  include "../validar.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Cadastro</title>
  </head>

  <body>
     <div class= "container">
        <div class= "row">
            
            <?php
          
            include "conexao.php";
                
                $nome = $_POST['nome'];
                $telefone = $_POST['telefone'];
                $email1 = $_POST['email1'];
                $endereco = $_POST['endereco'];
                $numero = $_POST['numero'];
                $estado = $_POST['estado'];
                $cidade = $_POST['cidade'];
                $bairro = $_POST['bairro'];                 
                $cep = $_POST['cep'];
                $cargo = $_POST['cargo'];
                $sexo = $_POST['sexo'];
                                          
                $sql = "INSERT INTO `formulario` (`nome`, `telefone`, `email1`, `endereco`, `numero`, `estado`, `cidade`, `bairro`, `cep`, `cargo`, `sexo`) VALUES
                ('$nome','$telefone','$email1','$endereco','$numero','$estado','$cidade','$bairro','$cep','$cargo','$sexo')";
    

                if (mysqli_query($conn, $sql)){
                    mensagemAlerta ("$nome , Cadastro realizado com sucesso!", 'success');
                } else 
                    mensagemAlerta ("$nome , Cadastro não realizado!", 'danger');
            ?>
              <hr>
            <a href = "index.php" class="btn btn-primary"> Voltar </a>
            
        </div>
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