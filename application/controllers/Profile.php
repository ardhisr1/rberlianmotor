<?php

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        //$this->load->model('', 'Model');
        //$this->load->model('','Model');
    }

    public function index()
    {
        $this->load->view('customer/layout/header');
        $this->load->view('customer/profile');
        $this->load->view('customer/layout/footer');

    }
}
?>