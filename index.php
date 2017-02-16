<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Juego de Tronos</title>
  </head>
  <body>
<!-- Enlace a otras paginas -->
        <a href="confeste.php"><h1>Conferencia Este</h1></a>
        <h1>Conferencia Oeste</h1></a>
        <a href="temporada.php"><h1>Temporada 99/00</h1></a>





    <?php
    //Incluimos la base de datos
    include 'dbNBA.php';
    $NBA=new dbNBA();
      if ($NBA->geterror()==false) {
        //Si no hay error se ejecuta todo esto

            ?>
          <?php
            echo "<p> Lista de de todos los equipos</p>";
            echo "<hr>";
            //llamamos a la funcion que muestra todos los equipos de dbNBA.php
            //Tenemos que usar el mismo "$resultado" que definimos en dbNBA.php
            $resultado=$NBA->mostrarEquipos();
            while ($fila1=$resultado->fetch_assoc()) {
              echo "Nombre: ".$fila1["Nombre"];
              echo "<br>";
              echo "Ciudad: ".$fila1["Ciudad"];
              echo "<br>";
              echo "Conferencia: ".$fila1["Conferencia"];
              echo "<br>";
              echo "Division: ".$fila1["Division"];
              echo "<br>";
              echo "<br>";
            }
            }
              ?>
  </body>
</html>
