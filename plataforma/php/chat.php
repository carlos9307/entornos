<?php 
$_SESSIONS['usuario'];

function actualizarChat($materia) {
	$fecha = date("Y-d-m");
	$consulta = "SELECT MENSAJE FROM CHAT JOIN MATERIAS ON ID_MATERIA = RELA_MATERIA WHERE MATERIA_DESCRIPCION LIKE '".$materia."' AND CHAT_FECHA = '".$fecha."'"
}

?>