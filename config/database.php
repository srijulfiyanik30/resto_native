<?php 

class database{
	private $db = [
		'host' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'resto_yanik'
	];

	public function data(){
		return $this->db;
	}
}