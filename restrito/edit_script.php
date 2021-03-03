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

    <title>Alteração de Cadastro</title>
  </head>

  <body>
     <div class= "container">
        <div class= "row">
            
            <?php

            
          
            include "conexao.php";
                
                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $telefone = $_POST['telefone'];
                $email1 = $_POST['email1'];
                $email2 = $_POST['email2'];
                $endereco = $_POST['endereco'];
                $numero = $_POST['numero'];
                $estado = $_POST['estado'];
                $cidade = $_POST['cidade'];
                $bairro = $_POST['bairro'];                 
                $cep = $_POST['cep'];
                $cargo = $_POST['cargo'];
                $sexo = $_POST['sexo'];
                                          
                                          
                $sql = "UPDATE `formulario` SET `nome` = '$nome', `telefone` = '$telefone', `email1` = '$email1', `email2` = '$email2', `endereco` = '$endereco',
                `numero` = '$numero', `estado` = '$estado', `cidade` = '$cidade', `bairro` = '$bairro', `cep` = '$cep', `cargo` = '$cargo', `sexo` = '$sexo' WHERE `formulario`.`cod_pessoa` = $id";

                if (mysqli_query($conn, $sql)){
                    mensagemAlerta ("$nome , Alterado com sucesso!", 'success');

                } else 
                    mensagemAlerta ("$nome , Não alterado!", 'danger');
            ?>

              
            <a href = "pesquisar.php" class="btn btn-primary"> Voltar </a>
            
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