<?php

class ProductModel extends CI_Model
{
    public function listProduct()
    {
        return $this->db->get('show_products')->result_array();
    }
    public function addProduct($data)
    {
        return $this->db->insert('products', $data);
    }

    public function detailProduct($id)
    {
        return $this->db->get_where('show_products', ['product_id' => $id])->row_array();
    }

    public function editProduct($id, $data)
    {
        $this->db->where('product_id', $id);
        $this->db->update('products', $data);
    }

    public function deleteProduct($id){
        $this->db->where('product_id', $id);
        return $this->db->delete('products');
    }

    public function getProductsByMerk($Merk){
        $this->db->get_where('show_product', ['Merk' => $Merk])->row_array();
    }
    
    public function getProductsByCategory($Category){
        $this->db->get_where('show_product', ['Merk' => $Merk])->row_array();
    }
    
    public function getProductsByType($Type)
    {
        $this->db->get_where('show_product', ['Type' => $Type])->row_array();
    }

    
}
