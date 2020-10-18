<?php

class MerkModel extends CI_Model
{
    public function listMerk()
    {
        return $this->db->get('merks')->result_array();
    }
    public function addMerk($data)
    {
        return $this->db->insert('merks', $data);
    }

    public function detailMerk($id)
    {
        return $this->db->get_where('merks', ['merk_id' => $id])->row_array();
    }

    public function editMerk($id, $data)
    {
        $this->db->where('merk_id', $id);
        $this->db->update('merks', $data);
    }

    public function deleteMerk($id){
        $this->db->where('merk_id', $id);
        return $this->db->delete('merks');
    }
}
