<?php

class Type extends CI_Controller
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

        $this->load->view('admin/header');
        $this->load->view('admin/aside');
        $this->load->view('type/type', $data);
        $this->load->view('admin/footer');
    }

    public function add()
    {
        $validate = $this->validate();

        if (!$validate) {
            $this->load->view('type/add');
        } else {
            $type = $this->input->post('type');
            $data = [
                "type" => $type
            ];

            $this->Model->addType($data);
            redirect('list-type');
        }
    }

    public function detail($id = null)
    {
        // show detail product
        if ($id == null) {
            redirect('list-type');
        } else {
            $check = $this->Model->detailType($id);
            if ($check) {
                $data = ['type' => $check];
                $this->load->view('type/edit', $data);
            } else {
                redirect('list-type');
            }
        }
    }

    public function edit($id = null)
    {
        // edit product
        if ($id == null) {
            redirect('list-type');
        } else {
            $validate = $this->validate();
            if (!$validate) {
                $this->detail($id);
            } else {
                $data = [
                    'type' => $this->input->post('type')
                ];

                $this->Model->editType($id, $data);
                redirect('list-type');
            }
        }
    }

    public function delete($id = null)
    {
        // delete product
        if ($id == null) {
            redirect('list-type');
        } else {
            $this->Model->deleteType($id);
            redirect('list-type');
        }
    }
}
