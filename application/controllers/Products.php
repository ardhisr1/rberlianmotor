<?php

class Products extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        // all products
        echo 'show all Products';
    }

    public function add(){
        $this->load->view('products/add');
    }

    public function detail($id = null){
        // show detail product
        if($id == null){
            echo 'null';
        }else{
            echo 'not null';
        }
    }

    public function edit($id = null){
        // edit product
    }

    public function delete($id = null){
        // delete product
    }
}