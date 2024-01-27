<?php

class Cursos extends Model {
	public function listar($id) {
		$sql = "SELECT * from cursos where idcategorias = :id";

		$consulta = $this->pdo->prepare($sql); 
		$consulta->bindParam(':id', $id, PDO::PARAM_INT); 
		$consulta->execute();

			return $consulta->fetchAll(PDO::FETCH_ASSOC);
	}

	public function lerPagina($pagina) {
		$sql = "SELECT * from cursos where pagina = :pagina";


		$consulta = $this->pdo->prepare($sql); 
		$consulta->bindParam(':pagina', $pagina); 
		$consulta->execute();
		return $consulta->fetchAll(PDO::FETCH_ASSOC);
	}


}


?>