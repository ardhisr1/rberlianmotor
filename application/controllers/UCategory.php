<?php

class UCategory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('CategoryModel', 'Model');
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
        
        $this->load->view('customer/layout/header');
        $this->load->view('customer/layout/asides');
        $this->load->view('customer/category', $data);
        $this->load->view('customer/layout/footer');
    }
}
?>