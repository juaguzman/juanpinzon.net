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
       
 <header id="foto" style="background: url(imagen/banner-01.png) no-repeat left top;background-size: 100% 100%" >
     <div id="jpz" >
         <img id="jpz" src="imagen/p3.png" width="500px" height="200px">
         
     </div>
      
    
    </header>
        <div id="titulo" align="center">
            <h1> GALERIA</h1>
           
        </div>
        
        <div align="center" id="galeria">    
<?php      
      // Incluir la clase   
      include_once('./gallery.php');
      
      $mygallery = new gallery(); // Crear una nueva instancia
      $mygallery->loadFolder('capturas'); // Leer las imágenes de la carpeta "galley_images"
      $mygallery->show('100%', 250, 150, 0); // Mostrar la galería en este lugar en un area de 500px      
?>    
    </div>
        <footer>
            COPYRAIGT
            <img src="imagen/footerCP.png" width="100%" height="80px">
        </footer>
         <script src="js/lightbox-plus-jquery.js"></script>
    </body>
   
</html>
