<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cadastro de usuario</h2>
    <form action="salvar_usuario.php" method="GET">
        nome: <br>
        <input type="text" name="nome"> <br><br>

        apelido: <br>
        <input type="text" name="apelido"> <br><br>

        email: <br>
        <input type="text" name="email"> <br><br>

        senha: <br>
        <input type="text" name="senha"> <br><br>
    
         foto: <br>
         <input type="text" name="foto"> <br><br>

        <input type="submit" value="Salvar">
    </form>

    <a href="principal.php" ><button>Voltar</button></a>

</body>
</html>