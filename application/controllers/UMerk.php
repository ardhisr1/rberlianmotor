<?php

class UMerk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('MerkModel', 'Model');
    }

    function validate()
    {
        $validation = $this->form_validation;
        $validation->set_rules('merk', 'merk', 'required');
        return $validation->run(); // RETURN FALSE IF VALIDATION FALSE
    }

    public function index()
    {
        // all merk
        $data = [
            'merks' => $this->Model->listMerk()
        ];
	
		$this->load->view('customer/layout/header', $data);
       // $this->load->view('customer/layout/asides');
        $this->load->view('customer/merk', $data);
        $this->load->view('customer/layout/footer');
    }
}
?>