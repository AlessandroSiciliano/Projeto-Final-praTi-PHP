<?php

	include "pf/controller.php";
	include "pf/model/model.php";
	include "pf/model/categorias.php";
	include "pf/model/cursos.php";

	function rota($rota, $f) {
		$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

		$partes = explode('/', trim($path,'/'));
		$partesRota = explode('/', trim($rota,'/'));

		if (count($partes) == 0) {
			if (count($partesRota) == 0) {
				$f();
				exit();
			}
		}

		if (count($partes) == 1) {
			if (count($partesRota) > 0) {
				if ($partes[0] == $partesRota[0]) {
					$f();
					exit();
				}
			}
		}

		if (count($partes) == 2) {
			if (count($partesRota) > 0) {
				if ($partes[0] == $partesRota[0]) {
					$f($partes[1]);
					exit();
				}
			}
		}

/*		if ($path == $rota) {
			$f();
			exit();
		}*/
	}

	rota("/", function() {
		categorias();
	});
	rota("/login", function() {
		login();
	});

	rota("/categorias", function($par) {
		categoria($par);
	});
	
	rota("/cursos", function($par) {
		curso($par);
	});
	echo "Página não encontrada";


?>