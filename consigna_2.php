<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicios Consultores de empresas</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>

    <body>
        <main class="container">
            <?php
            include("botonera.php");
            ?>
            <section>
                <h1>Mostrar Número más grande de Array</h1>
                <div class="container">
                    <form action="procesador_2.php" method="post" href="consigna_2.php">
                        <input type="number" name="num_1" placeholder="Número 1" required=true>
                        <input type="number" name="num_2" placeholder="Número 2" required=true>
                        <input type="number" name="num_3" placeholder="Número 3" required=true>
                        <input type="submit" value="Agregar número" class="enviar" name="btnEnviar">
                    </form>
                    <?php
                    if(isset($_POST['num_1']) && isset($_POST['num_2']) && isset($_POST['num_3'])) {
                        $long_number = 0;
                        foreach($helper->getArrayNumber() as $number){
                            if($number > $long_number){
                                $long_number = $number;
                            }
                        }
                        echo "<h1 style='color:red; font-weigth:bold; text-align:center'>NUMERO MAS GRANDE:</h1> <br>";
                        echo "<h3 style='color:red; font-weigth:bold; text-align:center'>"
                                                            .$long_number. 
                            "</h3>";
                    } 
                    ?>
                </div>
            </section>
        </main>
    </body>
</html>