<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>
    <div class="contenedor">
      <h1>Aprendiendo PHP</h1>

        <div class="contenido">
              <h2>Agenda Teléfonica</h2>
              <!-- Guardando datos en un arreglo MEDIANTE una funcion-->
              <?php 
              //Creamos un array vacio
              $agenda = array(); 
              
              function guardarUsuario($nombre, $tel) {
                //Esto es necesario para acceder a la variable GLOBAL que esta creada arriba
                global $agenda;
                $agenda[] = array($nombre, $tel);
              }
              //Llamamos a la funcion y le pasamos los valores de sus parametros
              guardarUsuario("Juan", "123460");
              guardarUsuario("Miguel", "567812");
              guardarUsuario("Alma", "987654");
              
              //Creamos la funcion mostrarUsuario
              function mostrarUsuario($id) {
                  //Llamamos a la variable agenda
                  global $agenda;
                  //Obtenemos el id de la variable agenda
                  $usuario = $agenda[$id];
                  foreach($usuario as $user) {
                    echo $user . '<br/>';
                  }
              }
              mostrarUsuario(2);
              ?> 
        </div>
    </div>
  </body>
</html>
