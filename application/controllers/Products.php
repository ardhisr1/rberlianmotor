<?php

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('ProductModel', 'Model');
        $this->load->model('MerkModel', 'Merk');
        $this->load->model('TypeModel', 'Type');
        $this->load->model('CategoryModel', 'Category');
    }

    function validate()
    {
        $validation = $this->form_validation;
        $validation->set_rules('product', 'product', 'required');
        $validation->set_rules('price', 'price', 'required|numeric');
        $validation->set_rules('category', 'category', 'required');
        $validation->set_rules('type', 'type', 'required');
        $validation->set_rules('merk', 'merk', 'required');
        $validation->set_rules('desc', 'desc', 'required');
        return $validation->run(); // RETURN FALSE IF VALIDATION FALSE
    }


    function setData()
    {
        $config['upload_path'] = './assets/product-image/';
        $config['allowed_types'] = 'png|jpg|jpeg';
        $config['max_size'] = '3072';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('pict')) {
            // throw message add product is failed 
            echo $this->upload->do_upload('pict');
            // redirect('add-product', 'refresh');
            // return false;
        } else {
            $lampiran = array('upload_data' => $this->upload->data());
            $data = [
                'name' => htmlspecialchars($this->input->post('product', true)),
                'kategori_id' => htmlspecialchars($this->input->post('category', true)),
                'merk_id' => htmlspecialchars($this->input->post('merk', true)),
                'type_id' => htmlspecialchars($this->input->post('type', true)),
                'price' => htmlspecialchars($this->input->post('price', true)),
                'description' => htmlspecialchars($this->input->post('desc', true)),
                'pict' => $lampiran['upload_data']['file_name'],
            ];
    
            return $data;
        }
        
    }

    public function index()
    {
        // all category
        $data = [
            'products' => $this->Model->listProduct()
        ];

        $this->load->view('products/product', $data);
    }

    public function add()
    {
        $validate = $this->validate();

        if (!$validate) {
            $data = [
                'category' => $this->Category->listCategory(),
                'merk' => $this->Merk->listMerk(),
                'type' => $this->Type->listType(),
            ];
            $this->load->view('products/add', $data);
        } else {
            $data = $this->setData();
            $this->Model->addProduct($data);
            redirect('list-product');
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
                $this->load->view('products/edit', $data);
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
