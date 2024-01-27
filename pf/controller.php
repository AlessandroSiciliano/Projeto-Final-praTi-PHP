<?php

	function categorias() {
		$modelCategorias = new Categorias();
		$dados = $modelCategorias->listar();

		$pagina = "categorias.php";
		include "view/template.php";
	}

	function categoria($pagina) {
		$modelCategorias = new Categorias();
		$dados = $modelCategorias->lerPagina($pagina);

		if (count($dados) > 0) {
			$model = new Cursos();
			$dados = $model->listar($dados[0]['id']);
			$pagina = "cursos.php";
			include "view/template.php";
		} else {
			echo "Página não encontrada";
		}
	}

	function curso($pagina) {
		$model = new Cursos();
		$dados = $model->lerPagina($pagina);

		if (count($dados) > 0) {
			$nome = $dados[0]['nome'];
			$imagem = $dados[0]['imagem'];
			$descricao = $dados[0]['descricao'];
			$pagina = "curso.php";
			include "view/template.php";

		} else {
			echo "Página não encontrada";
		}
	}




?>