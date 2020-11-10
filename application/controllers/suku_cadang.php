<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suku_cadang extends CI_Controller {

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
		$data = [
			'products' => $this->Model->listProduct()
		];

        $this->load->view('customer/layout/header');
		$this->load->view('customer/layout/asides');
		$this->load->view('customer/products', $data);
		$this->load->view('customer/layout/footer');
	}
}
?>