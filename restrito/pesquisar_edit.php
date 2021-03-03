<?php 
  include "../validar.php";
?>
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

    <title>Alteração de Cadastro</title>
  </head>

  <body>

    <?php 
    
        include "conexao.php";
        $id = $_GET['id'] ?? '';
        $sql = "SELECT * FROM formulario WHERE cod_pessoa = $id";

        $dados = mysqli_query($conn, $sql);
        $linha = mysqli_fetch_assoc($dados);
        mysqli_close($conn); 
        
    ?>
            
        


     <div class= "container">
        <div class= "row">
            <div class="col">
                <h1>Formulário</h1>
                <form action="edit_script.php" method="POST">
                    
                    <div class="mb-3">
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" placeholder="Digite seu nome" name="nome" required value="<?php echo $linha['nome'];?>">                       
                    </div> 
                        
                    <div class="mb-3 col-sm-4">  
                         <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" placeholder="( xx ) 9 xxxx-xxxx" name="telefone" value="<?php echo $linha['telefone'];?>">                
                    </div>              

                    <div class="mb-3 row g-3">
                            
                            <div class="col-sm-6">
                                <label for="email1">E-mail</label>
                                <input type="email" class="form-control" placeholder="Digite seu e-mail" name ="email1" value="<?php echo $linha['email1'];?>">
                            </div> 

                            <div class="col-sm-6">
                                <label for="email2">E-mail</label>
                                <input type="email" class="form-control" placeholder="Confirme seu e-mail" name ="email2" value="<?php echo $linha['email2'];?>">
                            </div>    
                    </div>

                       <div class="mb-3 row g-3">
                                
                                <div class="col-sm-6">
                                    <label for="endereco">Endereço</label>
                                    <input type="text" class="form-control" placeholder="Endereço" name ="endereco" value="<?php echo $linha['endereco'];?>">
                                </div>

                                <div class="col-sm-2">
                                    <label for="numero">Número</label>
                                    <input type="text" class="form-control" placeholder="N°" name ="numero" value="<?php echo $linha['numero'];?>">
                                </div>

                                <div class="col-sm-2">
                                    <label for="Estado">Estado</label>
                                    <select class="form-select" name="estado" value="<?php echo $linha['estado'];?>">
                                        <option selected></option>                                        
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AP">AP</option>
                                        <option value="AM">AM</option>
                                        <option value="BA">BA</option>
                                        <option value="CE">CE</option>
                                        <option value="DF">DF</option>
                                        <option value="ES">ES</option>
                                        <option value="GO">GO</option>
                                        <option value="MA">MA</option>
                                        <option value="MT">MT</option>
                                        <option value="MS">MS</option>
                                        <option value="MG">MG</option>
                                        <option value="PA">PA</option>
                                        <option value="PB">PB</option>
                                        <option value="PR">PR</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="RJ">RJ</option>
                                        <option value="RN">RN</option>
                                        <option value="RS">RS</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="SC">SC</option>
                                        <option value="SP">SP</option>
                                        <option value="SE">SE</option>
                                        <option value="TO">TO</option>                                        
                                    </select>
                                </div>  
                                     
                        </div>

                            <div class="mb-3 row g-3">

                                <div class="col-sm-4">
                                    <label for="Cidade">Cidade</label>
                                    <input type="text" class="form-control" placeholder="Cidade" name="cidade" value="<?php echo $linha['cidade'];?>">
                                </div>

                                <div class="col-sm-4">
                                    <label for="Bairro">Bairro</label>
                                    <input type="text" class="form-control" placeholder="Bairro" name="bairro" value="<?php echo $linha['bairro'];?>">
                                </div>

                                <div class="col-sm-3">
                                    <label for="cep">Cep</label>
                                    <input type="text" class="form-control" placeholder="xxxxx-xxx" name ="cep" value="<?php echo $linha['cep'];?>">
                                </div> 
                            </div>     

                            <div class="mb-3 row g-3">
                                        <div class="col-sm-3">                                
                                            <label for="nomeCargo">Cargo</label>                                        
                                            <select id='cargo' class='form-select' name='cargo'>                                        
                                                <option value="Vereador">Vereador</option>
                                                <option value="Assessor">Assessor</option>
                                                <option value='outros'>Outros</option>
                                            </select>                               
                                        </div>
                                    
                                    <div id="pai"> 
                                        <div id="outros" class="col-sm-3">
                                            <label for="texto">Outros Cargos</label>
                                            <input type="text" class="form-control" placeholder="Digite seu Cargo"   name="outros">
                                        </div>
                                    </div>    
                            </div>
                            
                        <div class="mb-3">
                            <span>Sexo</span>
                                <div class="form-check">
                                    
                                    <label for="sexo-masculino">Masculino</label>
                                    <input class="form-check-input" type="radio" name = "sexo" value ="Masculino">                                                                                             
                                    </div>                                        
                                
                                <div class="form-check">
                                    <label for="sexo-feminino">Feminino</label>  
                                    <input class="form-check-input" type="radio" name ="sexo" value ="Feminino">                                          
                                    </div>    
                        </div>              

                    <div class="mb-3">
                        <input type="submit" class="btn btn-success" value="Salvar Alterações">
                        <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa']?>">
                    </div>                                     

                </form>
                <a href="pesquisar.php" class="btn btn-secondary" >Voltar</a>
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