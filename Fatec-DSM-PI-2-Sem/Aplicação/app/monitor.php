<?php
   include_once("../app/Database.php");
   include_once("../public/index.php");
   
   $database = new Database();
   
   session_start();
   
   if(isset($_POST["submit"])){
      $nivel_gli = $_POST["nivel_gli"];
      $refeicao= $_POST["refeicao"];
      echo "cheguei";
      // $query = "INSERT INTO teste_historico (nivel_gli, dt_monitos, nome_refeicao, id_pessoa_teste) 
      //          SELECT '1.25', NOW(), 'almoco', t.id
      //          FROM test t
      //          WHERE t.id = t.'$nome'";
      // $database->execute($query);
      // header("Location: ../public/monitoria.php");
   }
   
   include "../public/monitoria.php"
?>