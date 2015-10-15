<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>CodeIgniter - CRUD</title>
	</head>
	<body>

	<h1><?php echo $titulo;?></h1>
	<h2><?php echo $subTitulo;?></h2>

	<a href="<?php echo base_url() ?>">Principal</a> |
	<a href="<?php echo base_url().'cargo/listar' ?>">Listar</a> |

	<br><br>

	<?php
		foreach ($cargos as $cargo) {
			$this->table->add_row($cargo->id_cargo, $cargo->nome);
		}

		echo $this->table->generate();
	?>

	</body>
</html>