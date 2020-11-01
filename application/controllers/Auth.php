<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('AuthModel', 'Model');
    }

    function validate($login = false)
    {
        $validation = $this->form_validation;
        if (!$login) {
            $validation->set_rules('name', 'name', 'required');
            $validation->set_rules('email', 'email', 'required|valid_emails|is_unique[customers.email]');
            $validation->set_rules('password', 'password', 'required|min_length[8]');
        } else {
            $validation->set_rules('email', 'email', 'required|valid_emails');
            $validation->set_rules('password', 'password', 'required');
        }
        return $validation->run(); // RETURN FALSE IF VALIDATION FALSE
    }

    function setData($login = false)
    {
        $input = $this->input;
        if ($login) {
            $data = [
                'email' => $input->post('email'),
                'password' => $input->post('password')
            ];
        } else {
            $data = [
                'name' => $input->post('name'),
                'email' => $input->post('email'),
                'password' => password_hash($input->post('password'), PASSWORD_DEFAULT),
            ];
        }

        return $data;
    }

    public function index()
    {
        $validation = $this->validate(true);
        if (!$validation) {
            $this->load->view('customer/layout/header');
            $this->load->view('auth-user/login');
            $this->load->view('customer/layout/footer');
        } else {
            $data = $this->setData(true);
            $emailCheck = $this->Model->getUserByEmail($data['email']);
            if ($emailCheck) {
                $passwordHash = $emailCheck['password'];
                if(password_verify($data['password'], $passwordHash)){
                    echo 'login success';
                }else{
                    // Password wrong
                    redirect('auth/login');
                }
            }else{
                // Email is not registered
                redirect('auth/login');
            }
            // $this->Model->registerUser($data);
            // redirect('auth/login');
        }
    }

    public function register()
    {
        $validation = $this->validate();
        if (!$validation) {
            $this->load->view('customer/layout/header');
            $this->load->view('auth-user/register');
            $this->load->view('customer/layout/footer');
        } else {
            $data = $this->setData();
            $this->Model->registerUser($data);
            redirect('auth/login');
        }
    }
}
