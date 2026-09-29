<?php
    require_once "conexao.php";

    //pegar os valores digitados
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
    
    $resultados = mysqli_query($conexao, $sql);

    $quantidade = mysqli_num_rows($resultados);

    if ($quantidade == 1) {

        $linha = mysqli_fetch_array($resultados);

        session_start();
        $_SESSION['idusuario'] = $linha['idusuario'];
        $_SESSION['nome'] = $linha['nome'];
        $_SESSION['apelido'] = $linha['apelido'];
        $_SESSION['email'] = $linha['email'];
        $_SESSION['senha'] = $linha['senha'];
        $_SESSION['foto'] = $linha['foto'];

        header("Location: principal.php");
    }
    else {
        header("Location: index.php?erro=login");    
    }
?>