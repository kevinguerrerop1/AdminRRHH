<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro Horario</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link  rel="stylesheet" href="css/stylesreg.css" />
        <title></title>
    </head>
    <body>
         <form action="Datos/inghorario.php" method="post">
        <fieldset class="c">
            <h1 align="center">Registro Horario</h1>
            <hr>
           
                <div >
                    <input type="text" class="a" id="nombre" name="nombre" placeholder="Ingrese Nombre del Turno" required>
                </div>

                <div >
                    <input type="text" class="a" id="hem" name="hem" placeholder="Ingrese Hora Inicio Laboral" required>
                </div>

                <div >
                    <input type="text" class="a" id="hsm" name="hsm" placeholder="Ingrese Hora Salida a Colación" required>
                </div>

                <div >
                    <input type="text" class="a" id="het" name="het" placeholder="Ingrese Hora de Ingreso de Colación" required>
                </div>

                <div>
                    <input type="text" class="a" id="hst" name="hst" placeholder="Ingrese Hora Salida Laboral" required>
                </div>
            
            <h1></h1>
            <input type="submit" class="btn" value="Ingresar">
           
        </fieldset>
         </form>
    </body>
</html>