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
        <title></title>
    </head>
    
    <body>
        <header>
            <span class="opacar">
      <img src="imagen/banner-01.png" width="100%" height="600px" >
      </span>
    </header>
        <div>
            <h1> GAleria</h1>
           
        </div>
        
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
