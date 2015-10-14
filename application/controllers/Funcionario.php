<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function listar()
	{
		$dados = array(
			'titulo' => 'CodeIgniter - CRUD',
			'subTitulo' => 'Listar Funcionarios'
		);

		$this->load->view('funcionario/listar', $dados);
	}
}