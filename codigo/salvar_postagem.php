<?php
$texto = $_GET['texto'];
session_start();
$idusuario = $_SESSION['idusuario'];

$sql = "INSERT INTO postagem (texto, idusuario) VALUES ('$texto', '$idusuario')";
require_once "conexao.php";
mysqli_query($conexao, $sql);

header('Location: principal.php');
?>