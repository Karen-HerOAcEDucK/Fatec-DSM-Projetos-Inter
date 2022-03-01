<?php
   session_start();
   
   include_once("../app/Database.php");
   $database = new Database();
   $nome = $_SESSION['nome'];
   
   $query = "SELECT *
            FROM historico_monitor  AS a, pessoa AS b
            WHERE a.id_pessoa = b.id
            AND b.nome = '$nome';";
   $result = $database->get($query);
?>

<!doctype html>
<html lang="pt-br">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      
      <link rel="stylesheet" href="../style/style.css">
      
      <title>Bem Vindo(a)</title>
   </head>
   <body>
      
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container">
            <a class="navbar-brand" href="../public/home.php">NAME</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
            <div class="collapse navbar-collapse justify-content-center divItensNav" id="navbarSupportedContent">
               <ul class="navbar-nav mb-2 mb-lg-0">
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="../public/home.php">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="../public/monitoria.php">Monitoria</a>
                  </li>
               </ul>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
               <ul class="navbar-nav mb-2 mb-lg-0">
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="../public/update.php">Alterar</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="../public/index.php">Sair</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
         
      <div class="container contPrin">
         <div class="row">
            <div class="col divForm">
               <form action="monitoria.php" method="post" name="form1">
                  <div class="row teste">
                     <div class="col divPrin">
                        <div class="title">
                           <h2>Insira os dados</h2>   
                        </div>
                        <div class="input-group flex-nowrap inputDiv">
                           <input type="text" name="nivel_gli" class="form-control inputCod" placeholder="Nivel de Glicose"/>
                        </div>
                           
                        <div class="input-group flex-nowrap inputDiv">
                           <input type="text" name="refeicao" class="form-control inputCod" placeholder="Refeição"/>
                        </div>
                     </div>
                  </div>
                  <div class="buttonForms">
                     <button type="submit" name="submit" class="btn buttonEnter">Enviar</button>
                  </div>
               </form>
            </div>
               
            <div class="col introMoni divPrin">
               <div class="textMoni">
                  <h2>Como utilizar a Monitoria?</h2>
                  <p>O cadastro de monitoria de nosso sistema é bem simples visando a facilidade e funcionalidade.</p>
                  <p>Basta você inserir o seu nivel de glicose medido pelo seu aparelho e informar ao sistema qual foi sua ultima regfeição. </br> Dessa forma iremos verificar se seu nivel de glicose esta com algum tipo de alteração da qual você deve se atentar.</p>
               </dSiv>
            </div>   
         </div>
         
         
         <div class="container conTable">
            <div class="divTable">
               <table class="table table-striped">
                  <thead>
                     <tr>
                        <th scope="col">Id Monitoria</th>
                        <th scope="col">Nivel Glicemia</th>
                        <th scope="col">Data</th>
                        <th scope="col">Refeição</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        foreach($result as $key => $res){
                           echo "<tr>";
                           echo "<td>".$res['id_historico']."</td>";
                           echo "<td>".$res['nivel_gli']."</td>";
                           echo "<td>".$res['dt_monitor']."</td>";
                           echo "<td>".$res['nome_refeicao']."</td>";
                        }
                     ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>   
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>    
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   
   </body>
</html>


<?php
   include_once("../app/Database.php");
   
   $database = new Database();
   
   if(isset($_POST["submit"])){
      $nivel_gli = $_POST["nivel_gli"];
      $refeicao = $_POST["refeicao"];
      $nome = $_SESSION['nome'];
      
      $query = "INSERT INTO historico_monitor (nivel_gli, dt_monitor, nome_refeicao, id_pessoa) 
               SELECT '$nivel_gli', NOW(), '$refeicao', t.id
               FROM pessoa AS t
               WHERE t.nome = '$nome'";
      $database->execute($query);
      header("Location: monitoria.php");
   }
?>