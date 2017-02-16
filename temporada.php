<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Juego de Tronos</title>
  </head>
  <body>

        <h1>Conferencia Oeste</h1>
        <a href="index.php"><h1>Inicio</h1></a>
        <a href="confeste.php"><h1>Conferencia Este</h1></a>





    <?php
    include 'dbNBA.php';
    $NBA=new dbNBA();
      if ($NBA->geterror()==false) {
        //Si no hay error se ejecuta todo esto

            ?>
          <?php
            echo "<p> Lista de todos los partidos de la temporada 99/00 </p>";
            echo "<hr>";
            //llamamos a la funcion que muestra los partidos por temporada de dbNBA.php
            //Tenemos que usar el mismo "$resultado" que definimos en dbNBA.php
            //Le pasamos la temporada que queremo a la funcion mostrarTemporada ya que definimos $temporada previamente.
            $resultado3=$NBA->mostrarTemporada("'99/00'");
            while ($fila1=$resultado3->fetch_assoc()) {
              echo "Equipo local: ".$fila1["equipo_local"];
              echo "<br>";
              echo "Puntos Local: ".$fila1["puntos_local"];
              echo "<br>";
              echo "Equipo visitante: ".$fila1["equipo_visitante"];
              echo "<br>";
              echo "Puntos Visitante: ".$fila1["puntos_visitante"];
              echo "<br>";
              echo "<br>";
            }
            }
              ?>
  </body>
</html>
