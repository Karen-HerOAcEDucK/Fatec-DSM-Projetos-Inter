<?php
   session_start();
   
   include_once("../app/Database.php");
   $database = new Database();

   if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      header("location: index.php");
      exit;
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
      
      <!--  <link rel="stylesheet" href="index.css"> -->
      
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
      
      <div class="container contPrinP">
         <div id="carouselExampleCaptions divCar" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="../style/images/Quaker.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                     <h5>É muito importante manter uma alimentação balanceada</h5>
                     <p>É necessário ingerir legumes e verduras. Quanto mais, melhor!</p>
                  </div>
               
               </div>
               <div class="carousel-item">
                  <img src="../style/images/graos.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                     <h5>Quantidade de cada alimento também faz parte do segredo</h5>
                     <p>Grãos integrais. Quinoa, chia, linhaça e outros grãos também são aliados da saúde.</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="../style/images/legume.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                     <h5>Leguminosas também são essenciais na dieta.</h5>
                     <p>Alguns exemplos são o feijão, a lentilha, a ervilha, o grão de bico e a soja.</p>
                  </div>
               </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
            </button>
         </div>
            
      <div class="divPrinCards">
         <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col divCard">
               <div class="card">
                  <img src="../style/images/diabetes.jpg" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title">10 dicas simples para controlar a diabetes</h5>
                        <a class="card-text">https://www.tuasaude.com/5-dicas-para-controlar-a-diabetes/</a>
                     </div>
               </div>
            </div>
            <div class="col divCard">
               <div class="card">
                  <img src="../style/images/medica.jpg" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title">"Diabetes é uma doença que age em silêncio", diz Thaisa Trujilho"</h5>
                        <a class="card-text">https://atarde.uol.com.br/muito/noticias/2201639-diabetes-e-uma-doenca-que-age-em-silencio-diz-thaisa-trujilho</a>
                     </div>
               </div>
            </div>
            <div class="col divCard">
               <div class="card">
                  <img src="../style/images/teste.jpg" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title">Laboratório lança teste para alertar sobre risco de diabetes tipo 2</h5>
                        <a class="card-text">https://agenciabrasil.ebc.com.br/saude/noticia/2021-11/laboratorio-lanca-teste-para-alertar-sobre-risco-de-diabetes-tipo-2</a>
                     </div>
               </div>
            </div>
            <div class="col divCard">
               <div class="card">
                  <img src="../style/images/teste2.jpg" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title">Campanha alerta sobre riscos do diabetes para a saúde dos olhos</h5>
                        <a class="card-text">https://agenciabrasil.ebc.com.br/saude/noticia/2021-11/campanha-alerta-sobre-riscos-do-diabetes-para-saude-dos-olhos</a>
                     </div>
               </div>
            </div>
         </div>
      </div>
   </div>
      
      
      
      <script src="http s://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
      
   </body>
</html>
