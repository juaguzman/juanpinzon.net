<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="styles/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="styles/lightbox.css">
        <link rel="stylesheet" href="styles/prueba.css">
        <title></title>
    </head>
    
    <body>
        <header>
            <span class="opacar">
                <div style="background: url(imagen/banner.png) no-repeat left top;  height: 40%; width: 90%;" />
  
                <h4 style="color: #FFF;    position: absolute; width: 240px;">
    Primera línea del texto<br />segunda línea del texto
  </h4>
</div>
            </span>
    </header>
        <div>
            
            <h1> GAleria</h1>
            
           
        </div>
        <div style="float: left; width: 37%; padding-left: 120px;  ">Sobrenatural es el nuevo proyecto 
            que presenta el Cultor Leonardo Zarama donde a través de una 
            alegoría a la naturaleza nos presenta lo ancestral y místico en un 
            permanente ritual de vida enmarcado en planos materiales e 
            imaginarios a partir de ideales vivos que se apropian de inmensas 
            esculturas en papel, logrando la creación de un sinnúmero de 
            elementos propios que se conjugan dentro de una carroza, en la cual
            se proyecta la idealización de la flora y fauna en el concepto 
            central. Se concibe a través de la implementación de nuevas técnicas 
            de producción con la utilización de materiales en este </div>
        
        <div style="float: right; width: 37%; padding-right: 120px;">
            caso el uso 
            de tintes naturales los cuales serán parte de la obra en el proceso 
            creativo.
            <br>
            <br>
            El equipo de trabajo presente en 
            el transcurso de las actividades dentro de la escena de construcción
            ha sido parte importante1en la creación e inclusión de las nuevas 
            técnicas planteadas anteriormente sintetizando la congruencia del 
            concepto impreso en la carroza donde prima el significado del 
            discurso y la importancia de la relación entre la muestra artesanal 
            y la pretensión del artesano con la aplicación de nuevos métodos e 
            innovación de materiales.</div>

        <div style="clear: both"></div>
        <div align="center">    
<?php      
      // Incluir la clase   
      include_once('./gallery_1.php');
      
      $mygallery = new gallery(); // Crear una nueva instancia
      $mygallery->loadFolder('capturas'); // Leer las imágenes de la carpeta "galley_images"
      $mygallery->show('100%', 200, 0); // Mostrar la galería en este lugar en un area de 500px      
?>    
    </div>
        <footer>
            
        </footer>
         <script src="js/lightbox-plus-jquery.js"></script>
         
    </body>
   
</html>
