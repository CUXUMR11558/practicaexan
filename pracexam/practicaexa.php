<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/styles2.css">


</head>

<body>
    <h1 class="text-center text-danger">SERPIENTES Y ESCALERAS</h1>
    <hr>


    <div class="row">



        <div class="col-4">
            <form action="practicaexa.php" method="post" class="p-5 text-white">
                <fieldset disabled>

                    <div class="mb-3">
                        <label for="valor" class="form-label">ACUMULADO</label>
                        <input type="text" id="valor" name="dado" min="1" max="10" value="<?php $jugacasiacumu ?>" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="valor" class="form-label">DADO</label>
                        <input type="text" id="valor" name="dado" min="1" max="10" value="<?php $dado ?>" class="form-control">
                        <input type="hidden" name="nojugada">
                    </div>
                    <div class="col-lg-4 mt4">
                        <input type="sumit" id="enviar" name="enviar" class="btn btn-success" value="tirar">

                    </div>
                    <div class="row mt-3">

                        <div class="col-lg-4">
                            <a href="practicaexa.php" id="enviar" name="enviar" class="btn btn-warning">Reiniciar</a>

                        </div>


                    </div>

            </form>

            <div class="row">
                <div class="col">
                    
                        <?php
                        if ($dado > 0) {
                        ?>
                            <div style="border: solid">
                                <?php
                                if ($jugacasiacumu < 100) {
                                ?>
                                    <h1>TIRI1!!</h1>
                                    <h1><?= $dado ?></h1>
                                    <h2><?= $mensaje ?></h2>

                            </div>
                        <?php } else {
                        ?>
                            <h1>FELICIDADES GANASTE</h1>
                   

            <?php
                                }
                            } ?>


                </div>

            </div>













            <div class="row">
                <br><br>

            </div>

            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col">
                            <h1 class="text-center text-black">JUGADOR 1</h1>
                            <div class="text-center" id="ficha1">1</div>
                        </div>
                        <div class="col-3"></div>
                    </div>

                    <div class="row">
                        <div class="col-3"> </div>
                        <div class="col text-center">
                            <h1 class="text-center text-black">JUGADOR 2</h1>
                            <div class="text-center" id="ficha2">2</div>
                        </div>
                        <div class="col-3">

                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="col">

            <img src="../images/escalera1.png" alt="" class="img1">
            <img src="../images/escalera2.png" alt="" class="img2">

            <img src="../images/escalera3.png" alt="" class="img3">

            <img src="../images/serpiente1.png" alt="" class="img4">
            <img src="../images/serpiente2.png" alt="" class="img5">

            <img src="../images/serpiente3.png" alt="" class="img6">



            <?php
            $jugacasiacumu = 0;
            $dado = 0;
            $filaactual = 0;

            if (isset($_POST["valor"])) {
                $dado = $ran = rand(1, 12);
                $valoranti = $_POST("valor");
                $jugacasiacumu = $valoranti + $dado;

                switch ($jugacasiacumu) {
                    case "2":
                        $jugacasiacumu = 67;
                        $mensaje = 'USTED CAYO EN LA CASILLA 2 POR LO CUAL LA ESCALERA LO SUBIRA A LA CASILLA 23';
                        $alerta = 1;
                        break;


                    case "2":
                        $jugacasiacumu = 67;
                        $mensaje = 'USTED CAYO EN LA CASILLA 2 POR LO CUAL LA ESCALERA LO SUBIRA A LA CASILLA 23';
                        $alerta = 1;
                        break;
                    case "2":
                        $jugacasiacumu = 67;
                        $mensaje = 'USTED CAYO EN LA CASILLA 2 POR LO CUAL LA ESCALERA LO SUBIRA A LA CASILLA 23';
                        $alerta = 1;
                        break;


                    case "2":
                        $jugacasiacumu = 67;
                        $mensaje = 'USTED CAYO EN LA CASILLA 2 POR LO CUAL LA ESCALERA LO SUBIRA A LA CASILLA 23';
                        $alerta = 1;
                        break;
                    case "2":
                        $jugacasiacumu = 67;
                        $mensaje = 'USTED CAYO EN LA CASILLA 2 POR LO CUAL LA ESCALERA LO SUBIRA A LA CASILLA 23';
                        $alerta = 1;
                        break;


                    case "2":
                        $jugacasiacumu = 67;
                        $mensaje = 'USTED CAYO EN LA CASILLA 2 POR LO CUAL LA ESCALERA LO SUBIRA A LA CASILLA 23';
                        $alerta = 1;
                        break;

                    default:
                        if ($dadp > 1) {
                            $mensaje = "usted avanso $dado casilla";
                        } else {
                            $mensaje = "usted avanzo $dado casilla";
                        }
                        $alerta = 1;
                        break;
                }
            }





























            // Tamaño del tablero
            $filas = 10;
            $columnas = 10;

            // Inicializar el número base y el tablero
            $numero = 100;
            $tablero = [];

            // Colores para las casillas del tablero
            $colores = [
                'red',
                'blue',
                'yellow',
                'green', // Rosa claro

            ];

            // Llenar el tablero con números del 1 al 100 y colores
            for ($i = 0; $i < $filas; $i++) {
                $fila = [];
                for ($j = 0; $j < $columnas; $j++) {
                    $colorIndex = ($i + $j) % count($colores); // Calcular el índice de color
                    $color = $colores[$colorIndex];
                    $fila[] = "<td style='width: 80px; height: 80px; text-align: center; background-color: $color;'>$numero</td>";
                    --$numero;
                }
                $tablero[] = $fila;
            }

            // Imprimir el tablero
            echo "<table border='1'>";
            foreach ($tablero as $fila) {
                echo "<tr>";
                foreach ($fila as $celda) {
                    echo $celda;
                }
                echo "</tr>";
            }
            echo "</table>";
            ?>



        </div>






    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>












</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>