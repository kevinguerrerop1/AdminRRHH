<?php
session_start();
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Kethasoft</title>
        <link rel="stylesheet" href="/css/master.css">
    </head>
    <body>
        <div class="login-box">
            <img src="img/logo3.png" class="avatar" alt="Avatar Image">
            <h1>Login Here</h1>
            <form method="post" action="Datos/verificar.php">

                <label for="username">Username</label>
                <input name="rut" type="email" placeholder="Ingrese su Correo">
                <label for="password">Password</label>
                <input name="password" type="password" placeholder="Ingrese Clave">
                <input type="submit"  value="Log In">
                <a href="regUsu.php">Crear Cuenta</a>
            </form>
        </div>
    </body>
</html>
