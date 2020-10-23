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
        <!-- Agregando elementos a arreglos-->
            <?php
                // versiones anteriores
                $tecnologias = ['CSS', 'HTML', 'JavaScript', 'jQuery'];
            ?>
                
            <pre>
              <?php print_r($tecnologias); ?>
            </pre>
                
                <?php  
                      //De esta manera agregamos un elemento en la ultima posición
                      $tecnologias[] = 'Python';
                      //Otra manera de agregar un elemento, es colocar el indice que tocaría y colocar su valor
                      $tecnologias[5] = 'Java';
                ?>

            <pre>
              <?php print_r($tecnologias); ?>
            </pre>
            
              <?php 
                // borrar ultimo elemento y traerlo en variable
                $java = array_pop($tecnologias); 
              ?>

              <h1><?php 
                //Se muestra el valor que hemos borrado
                echo $java; 
              ?></h1>
            
              <pre>
                <?php print_r($tecnologias); ?>
              </pre>
              
              <?php
                 // remover primer elemento del array
                 unset($tecnologias[0]); 
              ?>
              
              <pre>
                <?php print_r($tecnologias); ?>
              </pre>
              
              <?php 
                // remover primer elemento y agregarlo a variable
                $html = array_shift($tecnologias);
              ?>

              <h1><?php echo $html; ?></h1>
              
              <pre>
                <?php print_r($tecnologias); ?>
              </pre>
              
              <?php
                // remover ciertos elementos y agregar otros, (array, En que indice quiero comenzar, 
                // cuanto quiero avanzar, Agregar otros nuevos elementos seguidos de coma)
                $array = array_splice($tecnologias, 1,1, array('AngularJS', 'jQuery'));
              ?>

              <pre>
                <?php print_r($array); ?>
              </pre>

              <pre>
                <?php print_r($tecnologias); ?>
              </pre>
        </div>
    </div>
  </body>
</html>
