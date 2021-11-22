<?php
   include_once("../app/Database.php");
   
   $database = new Database();
   
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST"){
      $nome = $_POST['nome'];
      $senha = $_POST['senha'];
      
      //Função MD5 do banco de daos para fazer a desencripitação da senha do usuario no banco de dados
      $query = "SELECT nome, senha, id from teste WHERE nome = '$nome' AND senha = MD5('$senha')";
      $response = $database->get($query);
      
      if($response){
         $_SESSION['loggedin'] = TRUE;
         $_SESSION['nome'] = $nome;
         header("location: ../public/home.php");
      } else  {
         $_SESSION['loggedin'] = FALSE;
         
      }
   }
   
   include "../public/home.php";
?>
