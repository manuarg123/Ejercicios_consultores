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
                <h1>Ingrese una oración con alguna palabra que se repita más veces</h1>
                <div class="container">
                    <form action="procesador_5.php" method="post" href="consigna_5.php">
                        <div>
                            <input type="text" name="string_check" placeholder="Ingrese una cadena" required=true>
                        </div>
                        
                        <input type="submit" value="Obtener resultados" class="enviar" name="btnEnviar">
                    </form>
                    <?php
                    $array_string = $helper->getStringChecked($helper->getStringToCheck());
                    
                    if(isset($_POST['string_check'])){
                        echo "<h2> Palabra más repetida: " . $array_string["letter_repeated"] . "</h2>";
                        echo "<h2> Veces Repetida: " . $array_string["count_repeated"] . "</h2>";
                        
                    }
                        
                    ?>
                </div>
            </section>
        </main>
    </body>
</html>