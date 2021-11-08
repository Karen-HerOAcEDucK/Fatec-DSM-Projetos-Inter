<!doctype html>
<html lang="en">
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
                     <h2>Cadastro</h2>
                  </div>
               </div>
               
               <!-- Inputs do Forms -->
               <div class="generalForms">
                  <form action="index.php" method="post">
                     <div class="row teste">
                        <div class="col">
                           <div class="input-group flex-nowrap inputDiv">
                              <input type="text" name="name" class="form-control inputCod" value="<?php echo $nome; ?>" placeholder="Nome de usuario"/>
                           </div>
                              
                           <div class="input-group flex-nowrap inputDiv">
                              <input type="text" name="name" class="form-control inputCod" placeholder="Sobrenome"/>
                           </div>
                              
                           <div class="input-group flex-nowrap inputDiv">
                              <input type="password" name="senha" class="form-control inputPass" placeholder="Senha"/>
                           </div>
                              
                           <div class="input-group flex-nowrap inputDiv">
                              <input type="password" name="senha_confirma" class="form-control inputPass" placeholder="Confirmar Senha"/>
                           </div>
                        </div>
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


<?php
    
    $nome = $cpf = $senha = $sobrenome = "";

    if($_POST) {
        $senha          = $_POST['senha'];
        $senhaConfirma  = $_POST['senha_confirma'];
        if ($senha == "") {
            $mensagem = "<span class='aviso'><b>Aviso</b>: Senha não foi alterada!</span>";
        } else if ($senha == $senhaConfirma) {
            $mensagem = "<span class='sucesso'><b>Sucesso</b>: As senhas são iguais: ".$senha."</span>";
        } else {
            $mensagem = "<span class='erro'><b>Erro</b>: As senhas não conferem!</span>";
        }
        echo "<p id='mensagem'>".$mensagem."</p>";

        $nome = $_POST['name'];
        $cpf = $_POST[''];
        $sobrenome = $_POST['']


    }

    $sql = "INSERT INTO pessoa ("Nome","Sobrenome", "CPF") VALUES ($nome,$sobrenome,$cpf)";

?>
