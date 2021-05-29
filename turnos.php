<?php
include 'home.php';
$conexion = new mysqli('localhost', 'deployso_kethasoft', '5U5sFE(4!Z?X', 'deployso_AC');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kethasoft</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <div class="limiter">
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100 ver1 m-b-110">

                        <table data-vertable="ver1">
                             
                            <thead>
                                <tr class="row100 head">
                                    <th class="column100 column1" data-column="column1">Nombre</th>
                                    <th class="column100 column2" data-column="column2">Fecha</th>
                                    <th class="column100 column3" data-column="column3">Entrada</th>
                                    <th class="column100 column4" data-column="column4">Salida Colación</th>
                                    <th class="column100 column5" data-column="column5">Entrada Colación</th>
                                    <th class="column100 column6" data-column="column6">Salida</th>
                                </tr>
                            </thead>
                            <?php
                                $sql = "SELECT nombre,fecha,hem,hsm,het,hst FROM horarioasignado INNER JOIN horarios ON (horarioasignado.id_horario = horarios.id_horario) INNER JOIN usuarios ON (horarioasignado.id_usuario = usuarios.id_usuario)";
                                $result = mysqli_query($conexion, $sql);
                                while ($mostrar = mysqli_fetch_array($result)) {
                                    ?>
                            <tbody>
                               
                                    <tr class="row100">
                                        <td class="column100 column6" data-column="column1"><?php echo $mostrar['nombre'] ?></td>
                                        <td class="column100 column1" data-column="column2"><?php echo $mostrar['fecha'] ?></td>
                                        <td class="column100 column2" data-column="column3"><?php echo $mostrar['hem'] ?></td>
                                        <td class="column100 column3" data-column="column4"><?php echo $mostrar['hsm'] ?></td>
                                        <td class="column100 column4" data-column="column5"><?php echo $mostrar['het'] ?></td>
                                        <td class="column100 column5" data-column="column6"><?php echo $mostrar['hst'] ?></td>
                                    </tr>
                                    
                            </tbody>
<?php
                                }
                                ?>
                        </table>
                        
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