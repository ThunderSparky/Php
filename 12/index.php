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
        <!-- Array asociativos-->
            <?php 
                $persona = array(
                    'nombre' => 'Juan',
                    'pais' => 'Mexico',
                    'profesion' => 'Desarrollador Web'
                );
             ?>
             <pre>
               <?php print_r($persona); ?>
             </pre>
             <!--Para llamar a un valor del array asociativo, necesitamos colocar el nombre de las llave-->
             <?php echo $persona['profesion'];?>
             
             <pre>
                <!--El array_values, convierte el array asociativo para que se muestre con indices, y muestra su valor-->
               <?php print_r(array_values( $persona ) ); ?>
             </pre>
             
             <pre>
                <!--El array_keys, esto nos regresa el nombre de las llaves, ordenadas con indices-->
               <?php print_r( array_keys( $persona ) ); ?>
             </pre>
        </div>
    </div>




  </body>
</html>
