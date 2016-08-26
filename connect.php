<?php
	@$mysql = mysql_connect('localhost','root','');
	if(!$mysql){
		exit('No se pudo conectar');
	}else{
		if(!mysql_select_db('pruebitas',$mysql)){
			exit('No se pudo seleccionar base de datos');
		}
	}
?>