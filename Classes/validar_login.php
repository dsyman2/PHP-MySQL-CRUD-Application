<?php
session_start();
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
include_once("conexao.php");

$result = mysqli_query($conectar, "SELECT * FROM usuarios WHERE login='$usuario' AND senha='$senha' LIMIT 1");
$resultado = mysqli_fetch_assoc($result);

header("Location:../Principal.php");

 ?>