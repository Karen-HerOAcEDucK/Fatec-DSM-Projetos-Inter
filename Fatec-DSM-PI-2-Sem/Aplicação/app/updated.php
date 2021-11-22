<?php
   include_once("../app/Database.php");
   
   $database = new Database();   
   
   if(isset($_POST["submit"])){
      $nome = $_POST["nome"];
      $sobrenome = $_POST["sobrenome"];
      $senha = $_POST["senha"];
      $email = $_POST["email"];
      
      //Função MD5 para fazer a cripitografia da senha do usuario
      $query = "UPDATE pessoa AS p
               SET nome = '$nome', sobrenome = '$sobrenome', senha = '$senha', email = '$email'
               WHERE p.nome = '$email'";
      $database->execute($query);
      header("Location: home.php");
   }
?>