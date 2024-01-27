<?php

class Model {
	public $pdo;

	public function __construct() {
		$host = "localhost";
		$usuario = "root";
		$senha = "";
		$banco = "aulaphp";
		$porta = 3306;

		try {
			$this->pdo = new PDO("mysql:host=$host;porta=$porta;dbname=$banco",$usuario,$senha);

		} catch(PDOException $e) {
			die("Erro na conexão com o banco de dados: " . $e->getMessage());
		}

	}
}	


?>