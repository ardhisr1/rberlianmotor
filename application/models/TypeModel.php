<?php

class TypeModel extends CI_Model
{
    public function listType()
    {
        return $this->db->get('types')->result_array();
    }
    public function addType($data)
    {
        return $this->db->insert('types', $data);
    }

    public function detailType($id)
    {
        return $this->db->get_where('types', ['type_id' => $id])->row_array();
    }

    public function editType($id, $data)
    {
        $this->db->where('type_id', $id);
        $this->db->update('types', $data);
    }

    public function deleteType($id){
        $this->db->where('type_id', $id);
        return $this->db->delete('types');
    }
}
