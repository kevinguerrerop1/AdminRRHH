<?php
include 'home.php';
$conexion = new mysqli('localhost', 'deployso_kethasoft', '5U5sFE(4!Z?X', 'deployso_AC');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Jornada</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <title></title>
    </head>
    <body >
        <div class="limiter">
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100 ver1 m-b-110">
                        <hr>
                        <hr>
                        <table data-vertable="ver1">
                            <thead>
                                <tr class="row100 head">
                                    <th class="column100 column1" data-column="column1"></th>
                                    <th class="column100 column2" data-column="column2">Nombre</th>
                                    <th class="column100 column3" data-column="column3">Apellido</th>
                                    <th class="column100 column4" data-column="column4">Rut</th>
                                    <th class="column100 column5" data-column="column5">Email</th>
                                    <th class="column100 column6" data-column="column6">Fecha Nacimiento</th>
                                </tr>
                            </thead>
                            <?php
                            $sql = "SELECT id_usuario,nombre,apellido,rut,email,fechanacimiento FROM usuarios";
                            $result = mysqli_query($conexion, $sql);
                            while ($mostrar = mysqli_fetch_array($result)) {
                                ?>
                                <tbody>

                                    <tr class="row100">
                                        <td class="column100 column6" data-column="column1"><?php echo $mostrar['id_usuario'] ?></td>
                                        <td class="column100 column1" data-column="column2"><?php echo $mostrar['nombre'] ?></td>
                                        <td class="column100 column2" data-column="column3"><?php echo $mostrar['apellido'] ?></td>
                                        <td class="column100 column3" data-column="column4"><?php echo $mostrar['rut'] ?></td>
                                        <td class="column100 column4" data-column="column5"><?php echo $mostrar['email'] ?></td>
                                        <td class="column100 column5" data-column="column6"><?php echo $mostrar['fechanacimiento'] ?></td>
                                    </tr>

                                </tbody>
                                <?php
                            }
                            ?>
                        </table>

                        <hr>

                        <table data-vertable="ver1">       
                            <thead>
                                <tr class="row100 head">
                                    <th class="column100 column1" data-column="column1">Nombre</th>
                                    <th class="column100 column3" data-column="column2">Entrada</th>
                                    <th class="column100 column4" data-column="column3">Salida Colación</th>
                                    <th class="column100 column5" data-column="column4">Entrada Colación</th>
                                    <th class="column100 column6" data-column="column5">Salida</th>
                                </tr>
                            </thead>
                            <?php
                            $sql = "SELECT nombre_h,hem,hsm,het,hst FROM horarios";
                            $result = mysqli_query($conexion, $sql);
                            while ($mostrar = mysqli_fetch_array($result)) {
                                ?>
                                <tbody>

                                    <tr class="row100">
                                        <td class="column100 column6" data-column="column1"><?php echo $mostrar['nombre_h'] ?></td>
                                        <td class="column100 column2" data-column="column2"><?php echo $mostrar['hem'] ?></td>
                                        <td class="column100 column3" data-column="column3"><?php echo $mostrar['hsm'] ?></td>
                                        <td class="column100 column4" data-column="column4"><?php echo $mostrar['het'] ?></td>
                                        <td class="column100 column5" data-column="column5"><?php echo $mostrar['hst'] ?></td>
                                    </tr>

                                </tbody>
                                <?php
                            }
                            ?>
                        </table>
                        <hr>
                        <form action="Datos/ingturno.php" method="post">
                            <div>
                                <label>Ingrese ID de Trabajador</label>
                                
                                <input type="text" name="id_usuario" id="id_usuario">

                                <label>Ingrese ID de Horario</label>

                                <input type="text" name="id_horario" id="id_horario">

                                <label>Ingrese Fecha a Trabajar</label>

                                <input type="date" name="fecha" id="fecha">
                                <br>
                                <input type="submit" class="btn" value="Ingresar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--===============================================================================================-->  
            <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
            <!--===============================================================================================-->
            <script src="vendor/bootstrap/js/popper.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
            <!--===============================================================================================-->
            <script src="vendor/select2/select2.min.js"></script>
            <!--===============================================================================================-->
            <script src="js/main.js"></script>

    </body>
</html>

