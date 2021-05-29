<!DOCTYPE html>
<html>
    <head>
        <title>Marcado</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/stylescontacto.css" />
    </head>
    <body>

      <?php
date_default_timezone_set('America/Santiago');

?>
        <div>
          <br>
          <br>
          <br>
            <fieldset class="c">
                <h1 align="center">Marcar</h1>
                <hr style="margin-bottom: 60px;">
                <label class="a">Ingrese Su Codigo</label>
                            <input type="type" class="b" style="height: 50px; text-align:center;" name="fecha" value="<?=date('Y-m-d') ?>" readonly="readonly">
                <div style="width: 45%; float: left;">
                    <label>  Ingreso y salida laboral</label>
                    <div style="width: 30px;">
                        <label class="a">  Hora  </label>
                    </div>
                    <input type="type" class="b" style="height: 50px; text-align:center;" id="hora" name="hora" value="<?=date('g:ia') ?>" readonly="readonly" >
                    <div style="width: 30px;">
                        <label class="a">  Fecha  </label>
                    </div>
                    <input type="type" class="b" style="height: 50px; text-align:center;" name="fecha" value="<?=date('Y-m-d') ?>" readonly="readonly">

                    <input type="submit" class="btn" value="Ingreso">
                    <input type="submit" class="btn" value="Salida">
                </div>
                <div style="width: 50%; float: right;">
                    <label>  Ingreso y salida colacion</label>
                    <div style="width: 30px;">
                        <label class="a">  Hora  </label>
                    </div>
                    <input type="type" class="b" style="height: 50px; text-align:center;" id="hora" name="hora" value="<?=date('g:ia') ?>" readonly="readonly">
                    <div style="width: 30px;">
                <label class="a">  Fecha  </label>
                    </div>
                    <input type="type" class="b" style="height: 50px; text-align:center;" name="fecha" value="<?=date('Y-m-d') ?>" readonly="readonly">
                    <input type="submit" class="btn" value="Ingreso">
                    <input type="submit" class="btn" value="Salida">
                </div>
            </fieldset>
        </div>
    </body>
</html>
