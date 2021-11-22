<?php
   include_once("../app/Database.php");
   $database = new Database();
   session_start();
   
   $nome = $_SESSION["nome"];
   $query = "SELECT *FROM pessoa AS p WHERE nome = '$nome'";
   $result = $database->get($query);
   
   foreach($result as $item){
      $nome = $item['nome'];
      $sobrenome = $item['sobrenome'];
      $email = $item['email'];
      $senha = $item['senha'];
   }
?>


<!doctype html>
<html lang="pt-br">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      
      <link rel="stylesheet" href="../style/styleCada.css">
      
      <title>Cadastro</title>
   </head>
   <body>
      <div class="container">
         <div class="row general">
            <div class="col generalLogin">
               
               <!-- Header do forms -->
               <div class="generalHeader">
                  <div class="imageHeader">
                     <img class="light-shadow" src="" alt="" />
                  </div>
                     
                  <div class="textHeader">
                     <h2>Alteração de Perfil</h2>
                  </div>
               </div>
               
               <!-- Inputs do Forms -->
               <div class="generalForms">
                  <form action="Cadastrar.php" method="post" name="form1">
                     <div class="row teste">
                        <div class="col">
                           <div class="input-group flex-nowrap inputDiv">
                              <input type="text" name="nome" class="form-control inputCod" placeholder="Nome de usuario" value="<?php echo $nome?>"/>
                           </div>
                              
                           <div class="input-group flex-nowrap inputDiv">
                              <input type="text" name="sobrenome" class="form-control inputCod" placeholder="Sobrenome" value="<?php echo $sobrenome?>"/>
                           </div>
                              
                           <div class="input-group flex-nowrap inputDiv">
                              <input type="text" name="email" class="form-control inputCod" placeholder="Email" value="<?php echo $email?>"/>
                           </div>
                              
                           <div class="input-group flex-nowrap inputDiv">
                              <input type="password" name="senha" class="form-control inputPass" placeholder="Senha" value="<?php echo $senha?>"/>
                           </div>
                              
                           <div class="input-group flex-nowrap inputDiv">
                              <input type="password" name="senha_confirma" class="form-control inputPass" placeholder="Confirmar Senha" value="<?php echo $senha?>"/>
                           </div>
                        </div>
                     </div>
                     <div class="buttonForms">
                        <button type="submit" name="submit" class="btn buttonEnter">Entrar</button>
                     </div>
                  </form>
               </div> 
            </div>
         </div>
      </div>
   </body>
</html>