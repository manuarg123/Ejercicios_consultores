<!DOCTYPE html>
<html>
  <head>
    <title>Ejercicios Consultores de Empresas</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos.css">
  </head>

  <body>
    <main class="container">
    <?php
    include("botonera.php");
    ?>
      <section>
        <h1>POO</h1>
        <p>Creamos la clase <strong>forma</strong> y definimos las propiedades y funcionalidades.</p>
        <h2> Primer script con POO con <em>__constructor </em></h2>

      <div class="container">
              <p class="title">Ingrese números a multiplicar</p>
              <form action="helper.php" method="post">
                  <input type="number" name="num_1" placeholder="Número 1">
                  <input type="number" name="num_2" placeholder="Número 2">

                  <input type="submit" value="Enviar" class="enviar" name="btnEnviar">
              </form>
        </div>

        <?php
          include("helper.php");
          $multiplicacion1 = new helper($_POST["num_1"],$_POST["num_2"]);
          echo "<b>" . $multiplicacion1->number_1 . "</b>";
          echo "<b>" . $multiplicacion1->number_2 . "</b>";
          echo "<br>Resultado: " . $multiplicacion1->multiplicacion();
        ?>

      </section>
    </main>
  </body>
</html>