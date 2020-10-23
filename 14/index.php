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
        <!-- Revisando si existe un valor en un arreglo-->
                <?php 
                        $tecnologias = array('CSS', 'HTML', 'JavaScript', 'jQuery');
                        //la funcion "in_array" revisa si un elemento existe en un arreglo
                        $existe = in_array('HTML5',$tecnologias );
                 ?>
                 <pre>
                   <?php //Muestra bool(true), si colocariamos print_r($existe), mostraria 1 que significa true
                         var_dump($existe);    
                   ?>
                 </pre>
                 
                 <!--Verificando si existe un elemento en un array asociativo-->
                 <?php 
                     $persona = array(
                         'nombre' => 'Juan',
                         'pais' => 'Mexico',
                         'profesion' => 'Desarrollador Web'
                     );
                  ?>
                  
                  <?php
                      //Lo que hacemos, es convertir el Array asociativo en un array indexado con el array_values
                      //De esa manera, ahora si podremos aplicar el in_array 
                      $existe2 = in_array('Juan', array_values($persona)); 
                  ?>                 
                  <pre>
                    <?php var_dump($existe2);    ?>
                  </pre>
        </div>
    </div>




  </body>
</html>
