<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>CodeIgniter - CRUD</title>
	</head>
	<body>

	<h1><?php echo $titulo;?></h1>
	<h2><?php echo $subTitulo;?></h2>

	<a href="<?php echo base_url() ?>">Principal</a> |
	<a href="<?php echo base_url().'funcionario/listar' ?>">Listar</a> |
	<a href="<?php echo base_url().'funcionario/inserir' ?>">Incluir</a>

	<br><br>

	<?php 
		foreach ($funcionarios as $funcionario) {
			$this->table->add_row(
				$funcionario->id_funcionario, 
				$funcionario->nome_funcionario, 
				$funcionario->id_cargo, 
				$funcionario->nome_cargo,
				$funcionario->id_departamento,
				$funcionario->nome_departamento
			);
		}

		echo $this->table->generate();
	?>

	</body>
</html>