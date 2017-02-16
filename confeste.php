<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Juego de Tronos</title>
  </head>
  <body>

        <h1>Conferencia Oeste</h1>
        <a href="index.php"><h1>Inicio</h1></a>
        <a href="temporada.php"><h1>Temporada 99/00</h1></a>





    <?php
    include 'dbNBA.php';
    $NBA=new dbNBA();
      if ($NBA->geterror()==false) {
//Si no hay error se ejecuta todo esto

            ?>
          <?php
            echo "<p> Lista de de todos los equipos de la conferencia este</p>";
            echo "<hr>";
            //llamamos a la funcion que muestra todos los equipos de la conferencia este de dbNBA.php
            //Tenemos que usar el mismo "$resultado" que definimos en dbNBA.php
            $resultado2=$NBA->mostrarConfEste();
            while ($fila1=$resultado2->fetch_assoc()) {
              echo "Nombre: ".$fila1["Nombre"];
              echo "<br>";
              echo "Ciudad: ".$fila1["Ciudad"];
              echo "<br>";
              echo "Division: ".$fila1["Division"];
              echo "<br>";
              echo "<br>";
            }
            }
              ?>
  </body>
</html>
