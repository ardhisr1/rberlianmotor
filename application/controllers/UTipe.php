<?php

class UTipe extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('TypeModel', 'Model');
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

        $this->load->view('customer/layout/header');
        $this->load->view('customer/layout/asides');
        $this->load->view('customer/type', $data);
        $this->load->view('customer/layout/footer');
    }
}