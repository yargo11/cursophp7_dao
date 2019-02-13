<?php

	class Usuario {
		
		private $idiusuario;
		private $deslogin;
		private $dessenha;
		private $dtcadastro;
		
		public function getIdusuario(){
			return $this->idusuario;
		}
		
		public function setIdusuario($value){
			$this->idusuario = $value;
		}
		
		public function getDeslogin(){
			return $this->deslogin;
		}
		
		public function setDeslogin($value){
			$this->deslogin = $value;
		}
		
		public function getdessenha(){
			return $this->dessenha;
		}
		
		public function setdessenha($value){
			$this->dessenha = $value;
		}
		
		public function getDtcadastro(){
			return $this->dtcadastro;
		}
		
		public function setDtcadastro($value){
			$this->dtcadastro = $value;
		}
		
		public function loadById($id){
			
			$sql = new SQL();
			
			$results = $sql->select("SELECT * FROM tb_users WHERE idusuario = :ID", array(
			":ID"=>$id
			));
			
		if (count($results) > 0) {
			
			$row = $results[0];
			
			$this->setIdusuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro(new DateTime($row['dtcadastro']));
		}}
		public function __toString(){
		
		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
		));
	}
		
	}
	
	
?>