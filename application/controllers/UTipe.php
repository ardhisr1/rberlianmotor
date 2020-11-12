<?php

class UTipe extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('TypeModel', 'Model');
        $this->load->model('MerkModel', 'Merk');
    }

    function validate()
    {
        $validation = $this->form_validation;
        $validation->set_rules('type', 'type', 'required');
        return $validation->run(); // RETURN FALSE IF VALIDATION FALSE
    }

    public function index()
    {
        // all type
        $data = [
            'types' => $this->Model->listType()
        ];

        $data3 = [
			'merks' => $this->Merk->listMerk()
		];
	
		$this->load->view('customer/layout/header', $data3);
        //$this->load->view('customer/layout/asides');
        $this->load->view('customer/type', $data);
        $this->load->view('customer/layout/footer');
    }
}