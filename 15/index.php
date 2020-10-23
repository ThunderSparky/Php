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
        <!-- Recorriendo un arreglo con FOREACH-->

                <!--Para un arreglo indexado-->
                <?php 
                        $tecnologias = array('CSS', 'HTML', 'JavaScript', 'jQuery','Python');
                 ?>
                 
                 <h2>Lenguajes que Conozco</h2>
                 <ul>
                   <!--Muestra todos los elementos de la lista-->
                   <?php foreach($tecnologias as $tecnologia): ?>
                        <li><?php echo $tecnologia; ?></li>  
                   <?php endforeach; ?>
                 </ul>
                 
                 <!--Para un arreglo asociativo-->
                 <?php 
                     $persona = array(
                         'nombre' => 'Juan',
                         'pais' => 'Mexico',
                         'profesion' => 'Desarrollador Web'
                     );
                  ?>
                  <h2>Datos Personales Con Llaves y valor</h2>
                  <ul>
                        <?php foreach($persona as $key => $val ): ?>
                              <li><?php echo $key . ': ' . $val ?></li>
                        <?php endforeach; ?>
                  </ul>

                  <h2>Datos Personales solo con valor</h2>
                  <ul>
                        <?php foreach($persona as $val ): ?>
                              <li><?php echo  $val ?></li>
                        <?php endforeach; ?>
                  </ul>
        </div>
    </div>




  </body>
</html>
