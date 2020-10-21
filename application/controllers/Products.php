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

    function unlinkImage($img)
    {
        $path = './assets/product-image/';
        return @unlink($path . $img);
    }


    function setData($img = true)
    {
        if ($img) {
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
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('product', true)),
                'kategori_id' => htmlspecialchars($this->input->post('category', true)),
                'merk_id' => htmlspecialchars($this->input->post('merk', true)),
                'type_id' => htmlspecialchars($this->input->post('type', true)),
                'price' => htmlspecialchars($this->input->post('price', true)),
                'description' => htmlspecialchars($this->input->post('desc', true)),
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
        $this->load->view('admin/header');
        $this->load->view('admin/aside');
        $this->load->view('products/product', $data);
        $this->load->view('admin/footer');
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
            redirect('list-product');
        } else {
            $check = $this->Model->detailCategory($id);
            if ($check) {
                $data = ['category' => $check];
                $this->load->view('products/edit', $data);
            } else {
                redirect('list-product');
            }
        }
    }

    public function edit($id = null)
    {
        // edit product
        if ($id == null) {
            redirect('list-product');
        }

        $validate = $this->validate();
        if (!$validate) {
            $check = $this->Model->detailProduct($id);
            $product = $check;
            if ($check) {
                $data = [
                    'product' => $check,
                    'category' => $this->Category->listCategory(),
                    'merk' => $this->Merk->listMerk(),
                    'type' => $this->Type->listType(),
                ];
                $this->load->view('products/edit', $data);
            } else {
                redirect('list-product');
            }
        } else {
            if (empty($_FILES['pict']['name'])) {
                $data = $this->setData(false);
                $this->Model->editProduct($id, $data);
                redirect('list-product');
            } else {
                $data = $this->setData();
                $product = $this->Model->detailProduct($id);
                $this->unlinkImage($product['pict']);
                $this->Model->editProduct($id, $data);
                redirect('list-product');
            }
        }
    }

    public function delete($id = null)
    {
        // delete product
        if ($id == null) {
            redirect('list-product');
        } else {
            $get = $this->Model->detailProduct($id);
            $this->unlinkImage($get['pict']);
            $this->Model->deleteProduct($id);
            redirect('list-product');
        }
    }
}
