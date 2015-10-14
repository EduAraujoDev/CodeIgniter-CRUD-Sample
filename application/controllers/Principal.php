<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

	public function index()
	{
		$dados = array(
			'titulo' => 'CodeIgniter - CRUD'
		);
		$this->load->view('principal', $dados);
	}
}