<?php

class gallery 
{
   var $files = array();
   var $path;
   
   function loadFolder($path){
      $this->path = $path;
      
      //---Guardar en un arreglo todos los archivos en el directorio   
      $folder = opendir($this->path);
         
      while ($fil = readdir($folder)) {
         
         //---Si no es un directorio
         if(!is_dir($fil)){
            
            $arr = explode('.', $fil);
            if(count($arr) > 1){
               
               //---Ir guardando los nombres en un arreglo
               $this->files[] = $fil;
            }
         }
      }
      
      //---Cerrar el directorio
      closedir($folder);
      
      //---Ordenar alfabeticamente el arreglo
      sort($this->files);
   }

   function show($area = 500, $width = 1000, $space = 10){
   
      //---Crear la galería con los nombres de todos los archivos
      $total = count($this->files);
      $cont = 0;
      
      echo '<div name="xx" style="width:'.$area.'px">';
      
         //---Situar los thumbnails
         for($i = 0; $i < $total; $i++){      
            echo '<img onclick="javascript:this.width=450;this.height=338" ondblclick="javascript:this.width=100;this.height=80" src='.$this->path.'/'.$this->files[$i].' width='.$width.' height='.$width.' border="0">';
         }
?>        
                <script language="javascript">
                $(document).ready(function(){
                   $("a[rel = 'lightbox']").lightBox();
                });
                </script>        
<?

<?php
      echo '</div>';
   }
}
?>