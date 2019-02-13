<?php

	require_once("config.php");
	$sql = new SQL();
	
	$usuarios = $sql->select("SELECT * FROM tb_users");
	
	echo json_encode($usuarios);

?>