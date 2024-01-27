<?php

class Categorias extends Model {
	public function listar() {
		$sql = "SELECT * from categorias";
		$consulta = $this->pdo->query($sql);
		return $consulta->fetchAll(PDO::FETCH_ASSOC);
	}

	public function lerPagina($pagina) {
		$sql = "SELECT * from categorias where pagina = :pagina";


		$consulta = $this->pdo->prepare($sql); 
		$consulta->bindParam(':pagina', $pagina); 
		$consulta->execute();
		return $consulta->fetchAll(PDO::FETCH_ASSOC);
	}


}


?>