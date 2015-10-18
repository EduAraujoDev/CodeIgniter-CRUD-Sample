<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('funcionario_model','funcionario_model');
        $this->load->model('departamento_model','departamento_model');
        $this->load->model('cargo_model','cargo_model');
    }

    public function listar()
	{
		$dados = array(
			'titulo' => 'CodeIgniter - CRUD',
			'subTitulo' => 'Listar Funcionarios',
			'funcionarios' => $this->funcionario_model->get_funcionarios_all()->result()
			);

		$this->load->view('funcionario/listar', $dados);
	}

	public function inserir()
	{
		$dados = array(
			'titulo' => 'CodeIgniter - CRUD',
			'subTitulo' => 'Inserir Funcionarios',
			'departamentos' => $this->departamento_model->get_departamentos_all()->result(),
			'cargos' => $this->cargo_model->get_cargos_all()->result()
			);

		$this->load->view('funcionario/inserir', $dados);
	}		

	public function inserirNovoFuncionario()
	{
		$this->form_validation->set_rules('funcionario', 'funcionario', 'required');
        $this->form_validation->set_rules('cargos','cargos','required|is_natural');
		$this->form_validation->set_rules('departamentos','departamentos','required|is_natural');

        if($this->form_validation->run()==TRUE) 
        {
			$dados = array(
					'nome' => $this->input->post('funcionario'),
					'id_cargo' => $this->input->post('cargos'),
					'id_departamento' => $this->input->post('departamentos')
				);

			$this->funcionario_model->set_funcionario($dados);

			$dados = array(
				'titulo' => 'CodeIgniter - CRUD',
				'subTitulo' => 'Listar Funcionarios',
				'funcionarios' => $this->funcionario_model->get_funcionarios_all()->result()
				);

			$this->load->view('funcionario/listar', $dados);			
        } else {
			$dados = array(
				'titulo' => 'CodeIgniter - CRUD',
				'subTitulo' => 'Inserir Funcionarios',
				'departamentos' => $this->departamento_model->get_departamentos_all()->result(),
				'cargos' => $this->cargo_model->get_cargos_all()->result()
				);

			$this->load->view('funcionario/inserir', $dados);
        }
	}
}