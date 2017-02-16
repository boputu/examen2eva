<?php
/**
 *Clase para conexion y consultas con la base de datos.
 */
class dbNBA
{

  //Variable privada interna que almacena la conexion.
  private $conexion;
  //Variable privada interna que almacena si hay error.
  private $error=false;


  function __construct()
  {
    $this->conexion= new mysqli("localhost", "root", "", "NBA");
    if ($this->conexion->connect_errno) {
      $this->error=true;
    }
  }
  public function geterror(){
    return $this->error;
  }

//Funcion que muestra un listado de todos los equipos
  public function mostrarEquipos(){
    return $resultado=$this->conexion->query("SELECT Nombre,Ciudad,Conferencia,Division FROM equipos");
  }

//Funcion que muestra todos los equipos de la conferencia este
  public function mostrarConfEste(){
    return $resultado2=$this->conexion->query("SELECT Nombre,Ciudad,Division FROM equipos WHERE Conferencia='East'");
  }

//Funcion que muestra los partidos segun la temporada indicada en el fichero temporada.php
  public function mostrarTemporada($temporada){
    return $resultado3=$this->conexion->query("SELECT equipo_local,equipo_visitante,puntos_local,puntos_visitante,temporada FROM partidos WHERE temporada=".$temporada);
  }

}

 ?>
