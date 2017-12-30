<?php
 require_once 'conexao.php';
 
 $nome=$_POST['nome'];
 $email=$_POST['email'];
 $login=$_POST['login'];
 $senha=$_POST['senha'];

 $sql=mysqli_query($conectar,"INSERT INTO usuarios(nome, email, login, senha)VALUES ('$nome', '$email', '$login', '$senha')");
 echo "<center><h1>Cadastro realizado com sucesso</h1></center>";
 header("Location:../Login.php");
 mysqli_close($conectar);
 

