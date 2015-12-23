<?php
define('servidor', 'localhost');
define('servidor_usuario', 'root'); //Edita tu usuario
define('servidor_clave', 'mysql'); //Edita tu contrase�a
define('base_datos', 'html_comentarios_jquery'); //Edita tu bd

$html_link = mysql_connect(servidor, servidor_usuario, servidor_clave) or die ("No se puede conectar con el servidor");
mysql_select_db(base_datos, $html_link) or die ("No se puede seleccionar la base de datos");
?>