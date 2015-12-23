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
     <header id="foto" style="background: url(imagen/banner-01.png) no-repeat left top;background-size: 100% 100%" >
     <div id="jpz" >
         <img id="jpz" src="imagen/Sobre natural.png" width="500px" height="300px">    
     </div>
     </header>
    <body>
        
        <div id="curato" align="center">
            <table>
                <tr>
                    <td><h4>Sobrenatural es el nuevo proyecto que presenta el Cultor
                            Leonardo Zarama donde a través de una 
            alegoría a la naturaleza nos presenta lo ancestral y místico en un 
            permanente ritual de vida enmarcado en planos materiales e 
            imaginarios a partir de ideales vivos que se apropian de inmensas 
            esculturas en papel, logrando la creación de un sinnúmero de 
            elementos propios que se conjugan dentro de una carroza, en la cual
            se proyecta la idealización de la flora y fauna en el concepto 
            central. Se concibe a través de la implementación de nuevas técnicas 
            de producción con la utilización de materiales en este </h4></td> 
            
            <td><h4>El equipo de trabajo presente en 
            el transcurso de las actividades dentro de la escena de construcción
            ha sido parte importante1en la creación e inclusión de las nuevas 
            técnicas planteadas anteriormente sintetizando la congruencia del 
            concepto impreso en la carroza donde prima el significado del 
            discurso y la importancia de la relación entre la muestra artesanal 
            y la pretensión del artesano con la aplicación de nuevos métodos e 
            innovación de materiales. </h4></td>
                </tr>
            </table>
        </div>
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
            <img src="imagen/footerCP.png" width="100%" height="80px">
        </footer>
         <script src="js/lightbox-plus-jquery.js"></script>
    </body>
   
</html>
