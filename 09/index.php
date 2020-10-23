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
        <!--ARRAY-->
            <?php
                // array indexado, es decir tienen un indice para identificarlos, comenzando por el 0
                $tecnologias = ['CSS', 'HTML', 'JavaScript', 'jQuery'];
                echo $tecnologias[0];
                echo $tecnologias[1];
                echo $tecnologias[2];
                echo $tecnologias[3];
                
                //Nueva forma de crear un array
                $lenguajes = array('CSS', 'jQuery', 'PHP', 'MySQL');
                echo $lenguajes[3]; //Muestra mysql
            ?>
              
        </div>
    </div>




  </body>
</html>
