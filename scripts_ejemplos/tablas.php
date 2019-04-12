<html>
    <head>
        <meta charset="UTF-8">
        <title>Tablas de multiplicar</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <!-- Botón para volver atrás -->
        <div class="row">
            <div class="col-md-12 well"><a href="quiz3.php"><button class="btn btn-default">Atrás</button></a> </div>
        </div>
        <!-- Tabla del número elegido-->
        <table  class="table table-hover table-bordered ">
        <?php
        $num = $_POST["number"];
        echo ("<tr>");
        // Cabecera
        for ($i = 1; $i < 11; $i++) {
            echo ("<th>");
            echo "$i";
            echo ("</th>");
        }

        echo ("</tr>");

        // Resultados
        echo ("<tr>");

        for ($i = 1; $i < 11; $i++) {
            echo ("<td>");
            $aux = $num*$i;
            echo "$aux";
            echo ("</td>");
        }


        echo ("</tr>");


        ?>

            <!-- Tabla genérica, creada al ejecutar el php -->
        </table>
        <br><br>
        <p class="active">
            Ahora una tabla más genérica:
        </p>
        <br>
        <table  class="table table-hover table-bordered ">
        <?php

            echo ("<tr>");

            for ($i = 1; $i < 11; $i++) {
                echo ("<th>");
                echo "$i";
                echo ("</th>");
            }

            echo ("</tr>");

            for($j=1; $j<=10; $j++) {

            for ($i = 1; $i < 11; $i++) {
                echo ("<td>");
                $aux = $j*$i;
                echo "$aux";
                echo ("</td>");
            }


            echo ("</tr>");
            }

        ?>
        </table>
    </body>
</html>
Fin de la conversación
Escribe un mensaje...
