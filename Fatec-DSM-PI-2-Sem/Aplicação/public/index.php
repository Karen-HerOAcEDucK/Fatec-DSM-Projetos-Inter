<!doctype html>
<html lang="pt-br">
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
                  <form action="../app/login.php" method="post">
                     <div class="row inputs">
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