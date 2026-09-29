<?php require_once "verificar_sessao.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Cadastro de Postagem</h2>
    <form action="salvar_postagem.php" method="GET">
        texto: <br>
        <input type="text" name="texto"> <br><br>

        <input type="submit" value="Salvar">
    </form>

    <a href="principal.php" ><button>cancelar</button></a>

</body>
</html>