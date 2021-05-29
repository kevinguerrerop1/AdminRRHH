<!DOCTYPE html>
<html>
    <head>
        <title>Registro Usuario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/stylesreg.css" />
        <title></title>
    </head>
    <body class="body">
        <form action="Datos/ingUsu.php" method="post">
            <fieldset class="c">
                <h1 align="center">Registro Usuario</h1>
                <hr>

                <div >
                    <input type="text" class="a" id="nombre" name="nombre" placeholder="Nombre" required>
                </div>

                <div>
                    <input type="text" class="a" id="apellido" name="apellido" placeholder="Apellido" required>
                </div>

                <div>
                    <input type="text" class="a" id="rut" name="rut" placeholder="Ingresar Rut sin punto y guion" required>
                </div>

                <div>
                    <input type="email" class="a" id="email" name="email" placeholder="Email" required>
                </div>

                <div>
                    <input type="password" class="a" id="password" name="password" placeholder="Ingrese su Clave" required>
                </div>

                <label>Fecha nacimiento:</label>

                <div>
                    <input type="date" class="a" id="fechanacimiento" name="fechanacimiento" required>
                </div>

                <h1></h1>
                <input type="submit" class="btn" value="Ingresar">
            </fieldset>
        </form>
    </div>
</body>
</html>