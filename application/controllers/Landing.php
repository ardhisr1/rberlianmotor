<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('ProductModel', 'Model');
        $this->load->model('MerkModel', 'Merk');
        $this->load->model('TypeModel', 'Type');
        $this->load->model('CategoryModel', 'Category');
    }



	public function index()
	{
		// all category
        $data = [
			'products' => $this->Model->listProduct()
		];

		$data3 = [
			'merks' => $this->Merk->listMerk()
		];
	
		$this->load->view('customer/layout/header', $data3);
		$this->load->view('Landing_page', $data);
		$this->load->view('customer/layout/footer');
	}
}
