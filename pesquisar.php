<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='jquery-3.5.1.js'></script>
    <script src='javascript.js'></script>
    <link rel='stylesheet' href='stylesheet.css'>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Pesquisar</title>
  </head>

  <body>


  <?php
        
      $pesquisar = $_POST['busca'] ??'';

      include "conexao.php";
    
     $sql = "SELECT * FROM formulario WHERE nome LIKE '%$pesquisar%'";

    $dados = mysqli_query($conn, $sql);
  ?>

 
     <div class= "container">
        <div class= "row">
            <div class="col">
                <h1>Pesquisar</h1>
                <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                  <form class="d-flex" action="pesquisar.php" method="POST">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="busca" autofocus>
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                  </form>
                </div>
              </nav>
              <table class="table  table-hover">
                  <thead class="table-success">
                      <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">E-mail1</th>
                        <th scope="col">E-mail2</th>
                        <th scope="col" class="table-active">Endereço</th>
                        <th scope="col" class="table-active">N°</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Bairro</th>
                        <th scope="col">Cep</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Funções</th>
                      </tr>
                  </thead>
                        
                        <tbody>

                        <?php  
                        while ($linha = mysqli_fetch_assoc($dados)) {
                          
                          $cod_pessoa = $linha['cod_pessoa'];
                          $nome = $linha['nome'];
                          $telefone = $linha['telefone'];
                          $email1 = $linha['email1'];
                          $email2 = $linha['email2'];
                          $endereco = $linha['endereco'];
                          $numero = $linha['numero'];
                          $estado = $linha['estado'];
                          $cidade = $linha['cidade'];
                          $bairro = $linha['bairro'];
                          $cep = $linha['cep'];
                          $cargo = $linha['cargo'];
                          $sexo = $linha['sexo'];                        

                          echo "<tr>
                                  <th scope='row'>$nome</th>
                                  <td>$telefone</td>
                                  <td>$email1</td>
                                  <td>$email2</td>
                                  <td>$endereco</td>
                                  <td>$numero</td>
                                  <td>$estado</td>
                                  <td>$cidade</td>
                                  <td>$bairro</td>
                                  <td>$cep</td>
                                  <td>$cargo</td>
                                  <td>$sexo</td>
                                  <td width=140px>
                                    <a href='pesquisar_edit.php?id=$cod_pessoa' class='btn btn-success btn-sm'>Editar</a>
                                    <a href='#' class='btn btn-danger btn-sm'>Excluir</a>
                                  </td>

                                </tr>";
                        }

                        ?>  
                          
                        </tbody>
              </table>
                 <a class="btn btn-primary" href="login.php" class="btn btn-secondary" >Voltar</a>
            </div>
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