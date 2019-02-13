<?php

	require_once("config.php");
	//$sql = new SQL();
	/*$user = new Usuario();
	$user -> loadById(1);
	echo $user;*/
	
	//$lista = Usuario::getList();
	//echo json_encode($lista);
	
	
	/*$search= Usuario::search("ot");
	echo json_encode($search);*/
	
	/*$user = new Usuario();
	$user->login("root","987654");
	
	echo $user;*/
	
	/*$aluno = new Usuario("nova","zelandia");
	
	$aluno->insert();
	
	echo $aluno;*/
	
	$user = new Usuario();
	
	$user->loadById(7);
	
	$user->update("professores","hcode");
	
	echo $user;


?>