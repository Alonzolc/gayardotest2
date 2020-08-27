<?php 
session_start(); 
class Conectar{
	protected $db;

	protected function conexion(){
		 $conectar=$this->db = new PDO("mysql:local=localhost;dbname=gayardo","root","root");
	     return $conectar;
	}
	
	public function set_names(){
		return $this->db->query("SET NAMES 'utf8'");
	}

}
?>

