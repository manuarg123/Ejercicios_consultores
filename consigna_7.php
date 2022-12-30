<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplos Unidad 6</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
    <body>
        <main class="container">
            <?php
            include("botonera.php");
            ?>
            <section>
                <h1>Ingrese varios números, luego seleccione el check y obtenga el mayor apretando el botón</h1>
                <div class="container">
                    <form action="procesador_7.php" method="post" href="consigna_7.php">
                        <input type="number" name="num_7" placeholder="Ingrese el número">
                        <input type="submit" value="Agregar Número" class="enviar" name="btnEnviar">
                    </form>
                    <form action="procesador_7b.php" method="post" href="consigna_7.php">
                        <input type="checkbox" id="cbox1" value="first_checkbox" name="check_7">
                        <input type="submit" value="Mostrar resultado" class="enviar" name="btnEnviar">
                    </form>
                    <?php
                    if(isset($_POST['check_7'])) {
                        $helper->setArrayOfNumbers($numeros);
                        $numeros_result = $helper->getArrayOfNumbers();
                        echo "<h2>" . $numeros . "</h2>";    
                        foreach ($numeros as $value) {
                            echo "<h2>" . $value . "</h2>";    
                        }
                    } 
                    ?>
                </div>
            </section>
        </main>
    </body>
</html>