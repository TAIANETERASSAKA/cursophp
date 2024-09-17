<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" >
</head>
<body>
    <header>
        <h1>Obtendo dados de formularios</h1>
    </header>
    <section>
    <form action="cadastro.php" method="post">
        <label for="nameUser">Nome</label>
        <input id="nameUserID" type="text" name="nameUser" placeholder="nome de usuario">
        <label for="emailUser">Email</label>
        <input id="emailUserID" type="text" name="emailUser" placeholder="email">
        <input type="submit" value="enviar"> </input>
    </form>
    </section>

    <header>
        <h1>Dados para contato</h1>
    </header>
    <section>
    <form action="cadastro.php" method="get">
        <label for="telefoneUser">Telefone</label>
        <input id="telefoneUserID" type="text" name="telefoneUser" placeholder="telefone de usuario">
        <input type="submit" value="enviar"> </input>

    </form>
    </section>
    

</body>
</html>