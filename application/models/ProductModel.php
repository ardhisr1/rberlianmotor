<?php

class ProductModel extends CI_Model
{
    public function listProduct()
    {
        return $this->db->get('products')->result_array();
    }
    public function addProduct($data)
    {
        return $this->db->insert('products', $data);
    }

    public function detailProduct($id)
    {
        return $this->db->get_where('kategori', ['kategory_id' => $id])->row_array();
    }

    public function editProduct($id, $data)
    {
        $this->db->where('kategory_id', $id);
        $this->db->update('kategori', $data);
    }

    public function deleteProduct($id){
        $this->db->where('kategory_id', $id);
        return $this->db->delete('kategori');
    }
}
