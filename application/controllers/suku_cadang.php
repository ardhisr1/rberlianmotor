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

	//Show All Products
	public function index()
	{
		$data = [
			'products' => $this->Model->listProduct(),
			
		];

		$data2 = [
			'categories' => $this->Category->listCategory(),
		];

		$data3 = [
			'merks' => $this->Merk->listMerk()
		];

        $this->load->view('customer/layout/header',$data3);
		$this->load->view('customer/layout/asides', $data2, $data3);
		$this->load->view('customer/products', $data);
		$this->load->view('customer/layout/footer');
	}

	//Products by Merek
    public function ProductsByMerk()
    {
        // all category
        $data = [
            'products' => $this->Model->listProduct()
		];
		
		$data2 = [
            'categories' => $this->Category->listCategory()
		];
		
		$data3 = [
			'merks' => $this->Merk->listMerk()
		];

		$this->load->view('customer/layout/header', $data3);
		$this->load->view('customer/layout/asides', $data2, $data3);
		$this->load->view('customer/products', $data);
		$this->load->view('customer/layout/footer');
    }
}
?>