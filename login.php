<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
</head>
<body>
    <h1>inicia secion</h1>
    <form action="validar_login.php" method="post">
        <label for="user">Nombre de usuario</label>
        <br>
        <input type="text" name="user" id="user">
        <br>
        <label for="pass">contrasena</label>
        <br>
        <input type="text" name="pass" id="pass">
        <br>
        <input type="submit" value="iniciar sesion">
    </form>
</body>
</html>