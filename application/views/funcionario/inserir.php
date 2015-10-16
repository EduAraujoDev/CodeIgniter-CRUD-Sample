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
			echo validation_errors();

			echo form_open('funcionario/inserirNovoFuncionario');

			echo form_label('Nome do funcionario', 'funcionario');

			$arrayInput = array(
				'type' => 'text', 
				'name' => 'funcionario',
				'id' => 'funcionario'
				);
			echo form_input($arrayInput);

			echo "<br>";

			$list = array();
			$list[''] = 'Selecione um cargo';

			foreach ($cargos as $cargo) {
				$list[$cargo->id_cargo] = ucfirst(htmlspecialchars($cargo->nome));
			}

			echo form_dropdown('cargos', $list);

			echo "<br>";

			$list = array();
			$list[''] = 'Selecione um departamento';


			foreach ($departamentos as $departamento) {
				$list[$departamento->id_departamento] = ucfirst(htmlspecialchars($departamento->nome));
			}			

			echo form_dropdown('departamentos', $list);

			echo "<br>";

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