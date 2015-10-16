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
		<a href="<?php echo base_url().'cargo/inserir' ?>">Inserir</a>

		<br><br>

		<?php 
			echo validation_errors();

			echo form_open('cargo/inserirNovoCargo');

			echo form_label('Descrição do cargo', 'cargo');

			$arrayInput = array(
				'type' => 'text', 
				'name' => 'cargo',
				'id' => 'cargo'
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