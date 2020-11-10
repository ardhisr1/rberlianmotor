<?php

class Merk extends CI_Controller
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

        $this->load->view('admin/header');
        $this->load->view('admin/aside');
        $this->load->view('merk/merk', $data);
        $this->load->view('admin/footer');
    }

    public function add()
    {
        $validate = $this->validate();

        if (!$validate) {
            $this->load->view('admin/header');
            $this->load->view('admin/aside');
            $this->load->view('merk/add');
            $this->load->view('admin/footer');

        } else {
            $merk = $this->input->post('merk');
            $data = [
                "merk" => $merk
            ];

            $this->load->view('admin/header');
            $this->load->view('admin/aside');
            $this->Model->addMerk($data);
            $this->load->view('admin/footer');
            redirect('list-merk');
        }
    }

    public function detail($id = null)
    {
        // show detail product
        if ($id == null) {
            redirect('list-merk');
        } else {
            $check = $this->Model->detailMerk($id);
            if ($check) {
                $data = ['merk' => $check];
                
                $this->load->view('admin/header');
                $this->load->view('admin/aside');
                $this->load->view('merk/edit', $data);
                $this->load->view('admin/footer');
            } else {
                redirect('list-merk');
            }
        }
    }

    public function edit($id = null)
    {
        // edit product
        if ($id == null) {
            redirect('list-merk');
        } else {
            $validate = $this->validate();
            if (!$validate) {
                $this->detail($id);
            } else {
                $data = [
                    'merk' => $this->input->post('merk')
                ];
                
                $this->Model->editMerk($id, $data);
                redirect('list-merk');
            }
        }
    }

    public function delete($id = null)
    {
        // delete product
        if ($id == null) {
            redirect('list-merk');
        } else {
            $this->Model->deleteMerk($id);
            redirect('list-merk');
        }
    }
}
