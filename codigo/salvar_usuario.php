<?php
$nome = $_GET['nome'];
$apelido = $_GET['apelido'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$foto = $_GET['foto'];

// INSERT INTO curso (nome, area, carga_horaria) VALUES ("Tec. Info", "Informatica", 3000);
$sql = "INSERT INTO usuario (nome, apelido, email, senha, foto ) VALUES ('$nome', '$apelido', '$email', '$senha', '$foto')";
require_once "conexao.php";
mysqli_query($conexao, $sql);

header('Location: principal.php');
?>