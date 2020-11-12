<?php

class UCategory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('CategoryModel', 'Model');
        $this->load->model('MerkModel', 'Merk');
    }

    function validate()
    {
        $validation = $this->form_validation;
        $validation->set_rules('category', 'category', 'required');
        return $validation->run(); // RETURN FALSE IF VALIDATION FALSE
    }

    public function index()
    {
        // all category
        $data = [
            'categories' => $this->Model->listCategory()
        ];
        
        $data3 = [
			'merks' => $this->Merk->listMerk()
		];
	
		$this->load->view('customer/layout/header', $data3);
        //$this->load->view('customer/layout/asides');
        $this->load->view('customer/category', $data);
        $this->load->view('customer/layout/footer');
    }
}
?>