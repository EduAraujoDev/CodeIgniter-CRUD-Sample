<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargo extends CI_Controller {

    public function __construct(){
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
}