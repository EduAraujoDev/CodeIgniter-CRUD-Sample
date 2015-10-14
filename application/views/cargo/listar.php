<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>CodeIgniter - CRUD</title>
	</head>
	<body>

	<h1><?php echo $titulo;?></h1>
	<h2><?php echo $subTitulo;?></h2>

	<?php
		foreach ($cargos as $cargo) {
			$this->table->add_row($cargo->id_cargo, $cargo->nome);
		}

		echo $this->table->generate();
	?>

	</body>
</html>