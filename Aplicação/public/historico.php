<?php
   session_start();
   
   include_once("../app/Database.php");
   $database = new Database();
   $nome = $_SESSION['nome'];
   
   $query = "SELECT *
            FROM teste_historico  AS a, teste AS b
            WHERE a.id_pessoa_teste = b.id
            AND b.nome = '$nome';";
   $result = $database->get($query);
?>

<!doctype html>
<html lang="en">
   <head>
      <!-- Requireds meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
         
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
         
      <link rel="stylesheet" href="index.css">
         
      <title>Bem Vindo(a)</title>
   </head>
   <body>
      
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container">
            <a class="navbar-brand" href="../public/home.php">NAME</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
               <ul class="navbar-nav mb-2 mb-lg-0">
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="../public/home.php">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="../public/monitoria.php">Monitoria</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="../public/historico.php">Historico</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
         
      <div class="container contPrin">
         <div class="">
            
         </div>
         <table class="table">
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
                     echo "<td>".$res['dt_monitos']."</td>";
                     echo "<td>".$res['nome_refeicao']."</td>";
                  }
               ?>
            </tbody>
         </table>
      </div>
         
      <script src="http s://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>    
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   
   </body>
</html>