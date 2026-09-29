<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
        if (isset($_GET['erro'])) {
            if ($_GET['erro'] == "login") {
                echo "<p>Login e/ou senha incorretos.</p>";
            }
        }
        ?>
        <h3>Fazer login</h3>
    <form action="verificar_login.php" method="post">
        E-mail: <br>
        <input type="text" name="email"> <br><br>
        Senha: <br>
        <input type="text" name="senha"> <br><br>
        <input type="submit" value="Acessar">
    </form> 
   <br><br><br> Não possui uma conta?<br> <br>
    <a href="cad_usuario.php"><button>Criar conta</button></a>
</body>
</html>