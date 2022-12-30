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
                <h1>Ingrese un palíndromo y luego uno que no sea</h1>
                <div class="container">
                    <form action="procesador_6.php" method="post" href="consigna_6.php">
                        <div>
                            <input type="text" name="palindromo_check" placeholder="Ingrese una cadena" required=true>
                        </div>
                        
                        <input type="submit" value="¿És un palíndromo?" class="enviar" name="btnEnviar">
                    </form>
                    <?php
                    $palindrome_result = $helper->getPalindromo($helper->getPalindromeCheck());
                    
                    if(isset($_POST['palindromo_check'])){
                        if($palindrome_result == true){
                            echo "<h2> SI </h2>";  
                        }else{
                            echo "<h2> NO </h2>";  
                        }
                        
                    }
                        
                    ?>
                </div>
            </section>
        </main>
    </body>
</html>