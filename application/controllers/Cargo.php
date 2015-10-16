<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargo extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('cargo_model','cargo_model');
    }

	public function listar()
	{
		$dados = array(
				'titulo' => 'CodeIgniter - CRUD',
				'subTitulo' => 'Listar Cargos',
				'cargos' => $this->cargo_model->get_cargos_all()->result()
			);

		$this->load->view('cargo/listar', $dados);
	}

	public function inserir()
	{
		$dados = array(
				'titulo' => 'CodeIgniter - CRUD',
				'subTitulo' => 'Inserir Cargo',
			);

		$this->load->view('cargo/inserir', $dados);
	}

	public function inserirNovoCargo()
	{
		$dados = array(
				'nome' => $this->input->post('cargo')
			);

		$this->cargo_model->set_cargo($dados);

		$dados = array(
				'titulo' => 'CodeIgniter - CRUD',
				'subTitulo' => 'Listar Cargos',
				'cargos' => $this->cargo_model->get_cargos_all()->result()
			);

		$this->load->view('cargo/listar', $dados);	
	}
}