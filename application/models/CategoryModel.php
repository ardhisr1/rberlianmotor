<?php

class CategoryModel extends CI_Model
{
    public function listCategory()
    {
        return $this->db->get('kategori')->result_array();
    }
    public function addCategory($data)
    {
        return $this->db->insert('kategori', $data);
    }

    public function detailCategory($id)
    {
        return $this->db->get_where('kategori', ['kategory_id' => $id])->row_array();
    }

    public function editCategory($id, $data)
    {
        $this->db->where('kategory_id', $id);
        $this->db->update('kategori', $data);
    }

    public function deleteCategory($id){
        $this->db->where('kategory_id', $id);
        return $this->db->delete('kategori');
    }
}
