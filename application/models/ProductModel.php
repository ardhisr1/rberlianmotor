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
        $this->db->get_where('show_products', ['merk' => $Merk])->result_array();
    }
    
    public function getProductsByCategory($Category){
        $this->db->get_where('show_products', ['category' => $Category])->result_array();
    }
    
    public function getProductsByType($Type)
    {
        $this->db->get_where('show_products', ['type' => $Type])->result_array();
    }

    public function searchProductByMerk($Merk, $Words)
    {
        //$this->db->select('(SELECT * FROM show_products WHERE merk ='+ $Merk +'LIKE '., );
        $this->db->like('name',['name'=> $Words]);
        $this->db->get_where('show_products',['merk' => $Merk ])->result_array();
    }

    
}
