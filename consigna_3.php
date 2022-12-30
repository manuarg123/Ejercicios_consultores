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
                <h1>Eliminar valores de array: Marchar check para limpiarlo</h1>
                <div class="container">
                    <form action="procesador_3.php" method="post" href="consigna_2.php">
                        <div>
                            <input type="checkbox" id="cbox1" value="first_checkbox" name="check">
                        </div>
                        
                        <input type="submit" value="Mostrar Valores correctos del Array" class="enviar" name="btnEnviar">
                    </form>
                    <?php
                    if(isset($_POST['check'])) {
                        foreach($helper->cleanArray($helper->getArrayToCut()) as $value){
                            echo "<h3>" . $value . "</h3>";
                        }
                    } 
                    ?>
                </div>
            </section>
        </main>
    </body>
</html>