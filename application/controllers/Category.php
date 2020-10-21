<?php

class Category extends CI_Controller
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
        
        $this->load->view('admin/header');
        $this->load->view('admin/aside');
        $this->load->view('category/category', $data);
        $this->load->view('admin/footer');
    }

    public function add()
    {
        $validate = $this->validate();

        if (!$validate) {
            $this->load->view('category/add');
        } else {
            $category = $this->input->post('category');
            $data = [
                "category" => $category
            ];

            $this->Model->addCategory($data);
            redirect('list-category');
        }
    }

    public function detail($id = null)
    {
        // show detail product
        if ($id == null) {
            redirect('list-category');
        } else {
            $check = $this->Model->detailCategory($id);
            if ($check) {
                $data = ['category' => $check];
                $this->load->view('category/edit', $data);
            } else {
                redirect('list-category');
            }
        }
    }

    public function edit($id = null)
    {
        // edit product
        if ($id == null) {
            redirect('list-category');
        } else {
            $validate = $this->validate();
            if (!$validate) {
                $this->detail($id);
            } else {
                $data = [
                    'category' => $this->input->post('category')
                ];

                $this->Model->editCategory($id, $data);
                redirect('list-category');
            }
        }
    }

    public function delete($id = null)
    {
        // delete product
        if ($id == null) {
            redirect('list-category');
        } else {
            $this->Model->deleteCategory($id);
            redirect('list-category');
        }
    }
}
