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
		<a href="<?php echo base_url().'cargo/inserir' ?>">Incluir</a>

		<br><br>

		<?php 
			echo validation_errors();

			echo form_open('departamento/inserirNovoDepartamento');

			echo form_label('Descrição do departamento', 'departamento');

			$arrayInput = array(
				'type' => 'text', 
				'name' => 'departamento',
				'id' => 'departamento'
				);
			echo form_input($arrayInput);		

			$arrayButton = array(
				'type' => 'submit',
				'value' => 'Cadastrar',
				'content' => 'Cadastrar'
				);
			echo form_button($arrayButton);

			echo form_close();
		?>
	</body>
</html>