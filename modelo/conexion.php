 <?php

   // script para crear una conexion con la BD

  // parametros requeridos para la conexion BD

  //parametros para BD local
  DEFINE('USER', 'root'); //crea la constante USER con valor 'root'
  DEFINE('PW', '');
  DEFINE('HOST', 'localhost');
  DEFINE('BD', 'consulta_2');

  /* parametros para BD remota(infinityfree)
  DEFINE('USER', 'if0_38807334'); //crea la constante USER con valor 'root'
  DEFINE('PW', '0L1r1XEHnU');
  DEFINE('HOST', 'sql210.infinityfree.com');
  DEFINE('BD', 'if0_38807334_bd_empresa');*/

  //conexion con la BD
  $conexion = mysqli_connect(HOST , USER , PW , BD);

  //establecer conjunto de caracteres para el hosting 
  mysqli_set_charset($conexion,'utf8mb4');

  //verificar la conexion BD 
  if(!$conexion) 
  {
     die("la conexion con la BD fallo "+ mysqli_error($conexion));
     exit();
     
  }
  /*else
  {
     die("conexion exito ala BD! "); 
  }*/

?>