<?php

	require_once("config.php");
	//$sql = new SQL();
	$user = new USUARIO();
	
	$user -> loadById(1);
	
	echo $user;


?>