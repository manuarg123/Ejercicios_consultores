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
                <h1>Array Multidimensional a Simple: Seleccionar check para ejecutar</h1>
                <div class="container">
                    <form action="procesador_4.php" method="post" href="consigna_4.php">
                        <div>
                            <input type="checkbox" id="cbox1" value="first_checkbox" name="check_2">
                        </div>
                        
                        <input type="submit" value="Mostrar valores simplificados" class="enviar" name="btnEnviar">
                    </form>
                    <?php
                    $simple_array = $helper->multiToSingleArray($helper->getMultiArray());
                    if(isset($_POST['check_2'])){
                        foreach($simple_array as $value){
                            echo "<h3>" . $value . "</h3>";
                        }
                    }
                        
                    ?>
                </div>
            </section>
         </main>
    </body>
</html>