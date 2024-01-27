<?php

	function categorias() {
		$modelCategorias = new Categorias();
		$dados = $modelCategorias->listar();

		$pagina = "categorias.php";
		include "view/template.php";
	}

	function cursos($id) {
		$model = new Cursos();
		$dados = $model->listar($id);

		$pagina = "cursos.php";
		include "view/template.php";

	}



?>