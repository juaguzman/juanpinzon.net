
 <div id="comentarios">
            <?php
require "conexion/conexion.php";
require 'include/fecha.php';
require 'include/funciones.php';
$publicado="Publicado";
?>
           <script>
	
jQuery(function($){
		   
	// simple jQuery validation script
	$('#form1').submit(function(){
		
		var valid = true;
		var errormsg = 'Campo requerido..!';
		var errorcn = 'error';
		
		$('.' + errorcn, this).remove();			
		
		$('.required', this).each(function(){
			var parent = $(this).parent();
			if( $(this).val() == '' ){
				var msg = $(this).attr('title');
				msg = (msg != '') ? msg : errormsg;
				$('<span class="'+ errorcn +'">'+ msg +'</span>')
					.appendTo(parent)
					.fadeIn('fast')
					.click(function(){ $(this).remove(); })
				valid = false;
			};
		});
		
		return valid;
	});
	
})	
</script>


<?php  
$actualiza="<META HTTP-EQUIV='Refresh' CONTENT='1; URL=index.php'>";//actualizamos la pagina
$sql="select name, comentarios,fecha from comentarios where publicado='$publicado' and estado='OK' order by fecha "; //c�digo MySQL
$datos=mysql_query($sql,$html_link); //enviar c�digo MySQL
while ($row=mysql_fetch_array($datos)) { //Bucle para ver todos los registros
      $name=$row['name']; //datos del campo nombre
      $comentarios=$row['comentarios']; //datos del campo tel�fono
      $fecha=$row['fecha']; //datos del campo email
      //echo "$name, $comentarios, $fecha. <br/>"; //visualizar datos

?>
      
<!-- presentar mensajes-->
<div id="section">
<ol class="messageList">
<li class="message"> 
<div class="messageUserInfo">
<div class="messageUserBlock">
<div class="avatarHolder">
<a href="#" class="avatar"><img src="avatar/images.jpg" width="96" height="96" alt="" /></a>
</div> <!-- avatarHolder-->
<h3 class="userText">
<!--<a href="#" class="username">victor</a>-->
<em class="userBanner bannerStaff wrapped">
<span class="before"></span>
<strong><?php echo $name; ?></strong>
<span class="after"></span>
</em>
</h3> <!-- usertext-->
<span class="arrow"><span></span></span></div> 
<!-- messageUserBlock-->
</div> <!-- messageUserinfo-->

<div class="messageInfo primaryContent">
<div class="messageContent">
<article><blockquote class="messageText"><span class="quote"></span><?php echo $comentarios; ?></blockquote></article>
</div> <!-- messageContent-->
</div>  <!-- messageInfo primary content-->

<div class="messageMeta">
<div class="privateControls"><span class="item muted">Publicado : <?php echo  date("d-m-Y",strtotime($fecha)) ; ?></span></div>
</div> <!--massagemeta-->
</li> <!-- message-->
</ol>
</div><!--section-->

<?php 
}
?>
<div class="comments-padding">
<div id="respond">
<h3><span>Dejanos tu comentario</span></h3>
		<div>
			<?php
		if(isset($_POST['publicar']))//Vallidamos que el formulario fue enviado
			{

				/*Validamos que todos los campos esten llenos correctamente*/
				if(($_POST['nombre'] != '') && ($_POST['email'] != '') && ($_POST['comentarios'] != ''))
				{
				 if(!validarnombre($_POST['nombre']))
					{
				  echo '<p>nombre solo 20 caracteres</p>';
					}
			 	else
				  {
					
					if(!validar_email($_POST['email']))
					 {
					 echo '<p>email inv&aacute;lido</p>';
					 }
					 	else {
						
					$nombre= limpiar($_POST['nombre']);
					$email= limpiar($_POST['email']);
					$comentarios= limpiar($_POST['comentarios']);
					$ipuser= $_SERVER['REMOTE_ADDR'];

					if(validarcomentarios($_POST['comentarios']))
					{
   				  $estado='OK'; // Cambiar por SR si deseas que todos los mensajes no se publiquen hasta que los hayas revisado.
				  $fecha=date("Y-m-d"); 
				  $publicado="Publicado";
				  $query=mysql_query("insert into comentarios (publicado , fecha , name, email , comentarios , estado) values ('$publicado', '$fecha', '$nombre', '$email' , '$comentarios','$estado' )");
				  echo mysql_error();
      			  echo "Gracias por su comentario. espere..... <br>".$actualiza;//ACTULIZAMOS DESPUES DE GUARDAR
			   		}
					else
						{
							echo '<p>Comentario min. 260 caract.</p>';
						}
						
						}//else email
				  }//else nombre

				} //cerramos que esten llenos todos los campos
				else
					{
						echo '<h5>Deberas llenar todos los campos.</h5>';
					}

			 }  //isset post publicar
			?>
	  </div>
<form action="" method="post" id="form1" name="form1">

<div>
<input name="nombre" type="text" class="comments-input-text required" tbindex="1" Title="Ingres su nombre &rarr;" >
<label for="nombre"><small>Nombre (max 20 caract.)</small></label>
</div>
<div>
<input name="email" type="email" class="comments-input-text required" tabindex="1" title="ingrese su email &rarr;" >
<label for="email"><small>email (ingrese correo valido)</small></label>
</div>
<label for="comentarios"><small>(min 260 caract.)</small></label>
<div>
<textarea name="comentarios" cols="40" rows="3" class="comments-input-textarea required" tabindex="4" title="Ingrese su comentario &rarr;" ></textarea>
</div>
<br />

<div class ='button-submit-comment-margin'>
<input type="submit" name="publicar" class="button-submit-comment" id="publicar" value="Publicar">
</div>
<div class="clear"></div>
</form>

</div><!--respond-->
</div><!--comment-padding-->


        </div>