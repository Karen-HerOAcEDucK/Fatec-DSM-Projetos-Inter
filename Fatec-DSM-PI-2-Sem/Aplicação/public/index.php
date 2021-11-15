<?php
   include_once("../app/Database.php");

   $database = new Database();
   
   if($_SERVER["REQUEST_METHOD"] == "POST"){
      session_start();
      
      $nome = $_POST['nome'];
      $senha = $_POST['senha'];
      
      $query = "SELECT Nome, senha from pessoa WHERE Nome = '$nome' AND senha = '$senha'";
      $response = $database->get($query);
      
      if($response){
         $_SESSION['loggedin'] = TRUE;
         $_SESSION["nome"] = $nome;
         header("location: home.php");
      } else {
         $_SESSION['loggedin'] = FALSE;
      }
      
   }
?>


<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      
      <link rel="stylesheet" href="../style/styleLogin.css">
      
      <title>Welcome Player</title>
   </head>
   <body>
      <div class="container">
         <div class="row general">
            <div class="col generalLogin">
               
               <!-- Header do forms -->
               <div class="generalHeader">
                  <div class="imageHeader">
                     <img class="light-shadow" src="https://place-hold.it/250x80" alt="" />
                  </div>
                     
                  <div class="textHeader">
                     <h2>Bem-Vindo(A)</h2>
                  </div>
               </div>
               
               <!-- Inputs do Forms -->
               <div class="generalForms">
                  <form action="index.php" method="post">
                     <div class="row teste">
                        <div class="col">
                           <div class="input-group flex-nowrap inputDiv">
                              <input type="text" name="nome" class="form-control inputCod" placeholder="Nome"/>
                           </div>
                              
                           <div class="input-group flex-nowrap inputDiv">
                              <input type="password" name="senha" class="form-control inputPass" placeholder="Senha"/>
                           </div>
                        </div>
                     </div>
                     <div class="col teste">
                        <a href="Cadastrar.php">Cadastrar-se</a>
                     </div>

                     <div class="buttonForms">
                        <button type="submit" class="btn buttonEnter">Entrar</button>
                     </div>
                     
                  </form>
               </div> 
            </div>
         </div>
      </div>
   </body>
</html>