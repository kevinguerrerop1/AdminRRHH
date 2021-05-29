<?php ?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Kethasoft</title>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <header>
            <img src="img/logo7" class="logo">
            <nav>
                <ul>
                    <li><a href="http://kethasoft.cl/home.php">Inicio</a></li>
                    <li class="sub-menu"><a href="#">Trabajadores</a>
                        <ul>
                            <li><a href="trabajadores.php">Ver Trabajadores</a></li>
                            <li><a href="turnos.php">Ver Horario</a></li>
                            <li><a href="regUsu.php">Registro Trabajadores</a></li>
                            <li><a href="Asignar.php">Asignar Trabajadores</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu"><a href="#">Local</a>
                        <ul>
                            <li><a href="reghorario.php">Horario Local</a></li>
                        </ul>
                    </li>
                      <li><a href="marcar.php">Marcar</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav>
            <div class="menu-toggle">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
        </header>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(
                    function () {
                        $('.menu-toggle').click(function () {
                            $('nav').toggleClass('active')
                        })

                        $('ul li').click(function () {
                            $(this).siblings().removeClass('active');
                            $(this).toggleClass('active');
                        })
                    }
            )
        </script>
    </body>
</html>
